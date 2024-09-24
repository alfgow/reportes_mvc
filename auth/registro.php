<?php
    require '../includes/app.php';
    incluirTemplate('header');
?>
    <div class="isolate  px-6 py-24 sm:py-32 lg:px-8">
        
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight  sm:text-4xl">Crear una cuenta</h2>
            
        </div>
        <form method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20 bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 text-black" id="reporteForm">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="nombre" class="block text-sm font-semibold leading-6 " id="nombreLabel">Tu
                        nombre</label>
                    <div class="mt-2.5">
                        <input type="text" name="nombre" id="nombre" autocomplete="given-name"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="telefono" class="block text-sm font-semibold leading-6 " id="telefonoLabel">Tu
                        teléfono</label>
                    <div class="mt-2.5">
                        <input type="number" name="telefono" id="telefono"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 " id="emailLabel">Tu Correo
                        Electrónico</label>
                    <div class="mt-2.5">
                        <input type="text" name="email" id="email"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="password" class="block text-sm font-semibold leading-6 " id="passwordLabel">Tu Password</label>
                    <div class="mt-2.5">
                        <input type="password" name="password" id="password"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="password2" class="block text-sm font-semibold leading-6 " id="password2Label">Repite tu Password</label>
                    <div class="mt-2.5">
                        <input type="password" name="password2" id="password2"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            

            </div>
            <div class="mt-10 flex justify-center">
                <button type="submit"
                    class="block w-2/3 rounded-xl bg-yellow-400 px-3.5 py-2.5 text-center text-sm font-semibold text-black font-bold shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrarse</button>
            </div>
        </form>
    </div>

</body>
<script src="../js/registroUsuarios.js"></script>
 <?php
 incluirTemplate('footer');
 ?>