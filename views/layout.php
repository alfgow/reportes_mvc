<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-900 text-white ">
        <header class="">

            <div class="md:hidden flex items-center justify-center px-3 py-4 ">
                <button class="border border-black text-center px-4 py-2 rounded-xl  text-white font-bold  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" id="menu-button">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-4"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 6h10" /><path d="M4 12h16" /><path d="M7 12h13" /><path d="M7 18h10" /></svg>
                </button>
                
            </div>

            <nav class=" bg-slate-600/30 shadow-2xl md:bg-blue-900 w-5/6 md:border-0 border border-black rounded-2xl hidden md:block bg-trasparent  relative mx-auto md:max-w-5xl py-3 md:mt-4" id="menu">
                <div class="flex flex-col md:flex-row items-center justify-between ">
                    <div class=" flex flex-col md:flex-row items-center justify-between px-6 pb-4 w-2/3">
                        <a href="/">Inicio</a>
                        <a href="/">Consultar Reportes</a>
                        <a href="">3</a>
                        <a href="">4</a>
                    </div>
                    <div class=" flex flex-col md:flex-row  justify-evenly px-6 w-1/3 gap-4">
                        <a href="/" 
                            class="border border-black text-center px-4 py-2 rounded-xl bg-green-700 text-black font-bold text-sm">
                            Iniciar Sesión
                        </a>
                        <a href="/usuarios/registro" class="border border-black text-center px-4 py-2 rounded-xl bg-blue-700 text-white font-bold">Regístrate</a>
                    </div>
                </div>
            </nav>


        </header>


    <?php 
        echo $contenido;
    ?>


</body>
<footer>
    <div class="flex justify-center">
        @alfgow
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../src/js/app.js"></script>
</html>