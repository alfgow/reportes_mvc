
let errors = []

const validacion = (element, elementLabel) => {
    value = element.value;
    elementName = element.name;
    if (!value) {
        element.classList.add('border-2','border-red-500');
        elementLabel.classList.add('text-red-500','font-bold');
        if (!errors.includes(`${elementName}`)) {
            errors = [...errors, `${elementName}`];
        }
    } else if (value.length > 0) {
        element.classList.remove('border-2','border-red-500');
        elementLabel.classList.remove('text-red-500','font-bold');
        errors = errors.filter(error => error !== `${elementName}`);
    }
}


document.getElementById("reporteForm").addEventListener("submit", async (event) => {
    event.preventDefault(); // Evita el envío predeterminado del formulario
    const nombre = document.getElementById("nombre");
    const nombreLabel = document.getElementById("nombreLabel");
    const telefono = document.getElementById("telefono");
    const telefonoLabel = document.getElementById("telefonoLabel");    
    const email = document.getElementById("email");
    const emailLabel = document.getElementById("emailLabel"); 
    const password = document.getElementById("password");
    const passwordLabel = document.getElementById("passwordLabel"); 
    const password2 = document.getElementById("password2");
    const password2Label = document.getElementById("password2Label"); 
        
    
     validacion(nombre, nombreLabel)
     validacion(telefono, telefonoLabel)
     validacion(email, emailLabel)
     validacion(password, passwordLabel)
     validacion(password2, password2Label)

    if (errors.length > 0) {
        Swal.fire({
            title: "Por favor, completa los campos requeridos",
            icon: "error",
            confirmButtonText: "Aceptar",
        });
        return;
    }

    if (password.value !== password2.value) {

        password.classList.add('border-2','border-red-500');
        passwordLabel.classList.add('text-red-500','font-bold');
        password2.classList.add('border-2','border-red-500');
        password2Label.classList.add('text-red-500','font-bold');

        Swal.fire({
            title: "Las contraseñas no coinciden",
            icon: "error",
            confirmButtonText: "Aceptar",
        });
        return;
    }
    
    const formData = new FormData(event.target);
     const resp = await fetch("../db/registroUsuarios.php", {
         method: "POST",
         body: formData,
     })

     if (resp.ok) {
         Swal.fire({
             title: "Registro exitoso",
             icon: "success",
            showConfirmButton: false,
         });
         setTimeout(() => {
            window.location.href = "./gracias.php";
         }, 2000);
     }
     
});

function checkFiles() {
  const input = document.getElementById("inputFile");
  const files = input.files;
  const maxFiles = 3; // Límite de cantidad de archivos
  const maxSize = 1024 * 1024 * 2; // Límite de tamaño de archivo (2MB)

  if (files.length > maxFiles) {
    Swal.fire({
        title: "Máximo 3 imágenes",
        icon: "error"
    });
    input.value = ""; // Limpiar el input
    return;
  }

  for (let i = 0; i < files.length; i++) {
    if (files[i].size > maxSize) {
      Swal.fire({
        title: "Tamaño máximo de archivo 2MB",
        icon: "error"
      });
      input.value = ""; // Limpiar el input
      return;
    }
  }
}