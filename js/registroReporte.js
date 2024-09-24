
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
    const personalidadReportado = document.getElementById("personalidadReportado");
    const personalidadReportadoLabel = document.getElementById("personalidadReportadoLabel");    
    const nombreReportado = document.getElementById("nombreReportado");
    const nombreReportadoLabel = document.getElementById("nombreReportadoLabel");    
    const telReportado = document.getElementById("telReportado");
    const telReportadoLabel = document.getElementById("telReportadoLabel");    
    const motivoReporte = document.getElementById("motivoReporte");
    const motivoReporteLabel = document.getElementById("motivoReporteLabel");    
    const descripcion = document.getElementById("descripcion");
    const descripcionLabel = document.getElementById("descripcionLabel");    
    
    // validacion(nombre, nombreLabel)
    // validacion(telefono, telefonoLabel)
    // validacion(email, emailLabel)
    // validacion(personalidadReportado, personalidadReportadoLabel)
    // validacion(nombreReportado, nombreReportadoLabel)
    // validacion(motivoReporte, motivoReporteLabel)
    // validacion(telReportado, telReportadoLabel)
    // validacion(descripcion, descripcionLabel)


    // if (errors.length > 0) {
    //     Swal.fire({
    //         title: "Por favor, completa los campos requeridos",
    //         icon: "error",
    //         confirmButtonText: "Aceptar",
    //     });
    //     return;
    // } 
    
    const formData = new FormData(event.target);
     const resp = await fetch("../db/registroReporte.php",{
         method: "POST",
         body: formData,
     })
     
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