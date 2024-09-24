<?php
    require '../includes/app.php';
    incluirTemplate('header');
?>
    <div class="isolate  px-6 py-24 sm:py-32 lg:px-8">
       
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight  sm:text-4xl">Sistema de Reportes</h2>
            <p class="mt-2 text-lg leading-8 ">Aquí puedes presentar un reporte (denuncia o queja) formal contra:
                Asesores Inmobiliarios, Inquilinos, Dueños, Pólizas Jurídicas o Inmobiliarias que hayan actuado de
                manera poco ética y sin
                respeto. Es necesario adjuntar evidencia fotográfica (Máximo 3 fotos de 2mb cada una) </p>
        </div>
        <form method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20" id="reporteForm">
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
                    <label for="mail" class="block text-sm font-semibold leading-6 " id="mailLabel">Tu Correo
                        Electrónico</label>
                    <div class="mt-2.5">
                        <input type="text" name="mail" id="mail" autocomplete="organization"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="empresa" class="block text-sm font-semibold leading-6 ">Tu Empresa</label>
                    <div class="mt-2.5">
                        <input type="empresa" name="empresa" id="empresa" autocomplete="empresa"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="personalidadReportado" id="personalidadReportadoLabel"
                        class="block text-sm font-semibold leading-6 ">Selecciona la
                        personalidad
                        de la persona reportada</label>
                    <div class="relative mt-2.5">
                        <select name="personalidadReportado" id="personalidadReportado"
                            class="form-select block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">-- Seleccione --</option>
                            <option value="Asesor Inmobiliario">Asesor Inmobiliario</option>
                            <option value="Inquilin@ (Arrendatario)">Inquilin@ (Arrendatario)</option>
                            <option value="Dueñ@ (Arrendador)">Dueñ@ (Arrendador)</option>
                            <option value="Póliza Jurídica">Póliza Jurídica</option>
                            <option value="Oficina Inmobiliaria">Oficina Inmobiliaria</option>
                        </select>

                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="motivoReporte" id="motivoReporteLabel"
                        class="block text-sm font-semibold leading-6 ">Motivo de tu reporte</label>
                    <div class="relative mt-2.5">
                        <select name="motivoReporte" id="motivoReporte"
                            class="form-select block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">-- Seleccione --</option>
                            <option value="No pagó comisión">No Pago de Comisión</option>
                            <option value="Bajo porcentaje de comisión compartido">Bajo porcentaje de comisión
                                compartido</option>
                            <option value="Causas Imputables al arrendatario">Causas Imputables al arrendatario</option>
                            <option value="Causas Imputables al arrendador">Causas Imputables al arrendador</option>
                            <option value="Incumplimiento de Póliza Jurídica">Póliza Jurídica Incumplimiento</option>
                            <option value="Otros Motivos">Otros... Especifique en la descripción</option>
                        </select>

                    </div>
                </div>

                <div>
                    <label for="nombreReportado" class="block text-sm font-semibold leading-6 "
                        id="nombreReportadoLabel">Nombre de la persona o
                        empresa reportada</label>
                    <div class="mt-2.5">
                        <input type="text" name="nombreReportado" id="nombreReportado" autocomplete="given-name"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="telReportado" class="block text-sm font-semibold leading-6 "
                        id="telReportadoLabel">Teléfono de la persona o
                        empresa reportada</label>
                    <div class="mt-2.5">
                        <input type="number" name="telReportado" id="telReportado" autocomplete="family-name"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="descripcion" class="block text-sm font-semibold leading-6 "
                        id="descripcionLabel">Describe brevemente la
                        situación</label>
                    <div class="mt-2.5">
                        <textarea name="descripcion" id="descripcion" rows="4"
                            class="block w-full rounded-xl border-0 px-3.5 py-2  shadow-sm ring-1 ring-inset ring-gray-300 text-black font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label class="block">

                        <input type="file" accept="image/*" multiple name="link[]" type="file" id="link" class="block w-full text-sm text-slate-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-full file:border-0
                          file:text-sm file:font-semibold
                          file:bg-violet-50 file:text-violet-700
                          hover:file:bg-violet-100
                        " onchange="checkFiles()" />
                    </label>
                </div>
                <div class="sm:col-span-2 flex">
                    <input type="checkbox" id="checkbox"
                        class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    <label for="checkbox" class="ml-2 block text-sm font-medium ">Al enviar este reporte aceptas
                        nuestras políticas</label>
                </div>


            </div>
            <div class="mt-10 flex justify-center">
                <button type="submit"
                    class="block w-2/3 rounded-xl bg-yellow-400 px-3.5 py-2.5 text-center text-sm font-semibold text-black font-bold shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar
                    Reporte</button>
            </div>
        </form>
    </div>

</body>
<script src="../js/registroReporte.js"></script>
 <?php
 incluirTemplate('footer');
 ?>