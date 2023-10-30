<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body x-data="{ selectedDownloadBookButton: '' }">
    <script type="text/javascript">
        {
            var abierto2 = false;
        }
    </script>

    @if (session('create_category_error'))
    <script type="text/javascript">
        {
            var abierto2 = true;
        }
    </script>
    @endif

    <script type="text/javascript">
        {
            console.log("debe estar abierto es:" + abierto2);
        }
    </script>

    <div x-data="{ modelOpen: abierto2 }">
        <div id="landing style" class="bg-gradient-to-br from-white from-10% via-lime-c100 to-lime-c100">
            <!-- SECTION: LANDING -->
            <x-navbar></x-navbar>
            <div id="landing" class="p-6 pt-0 sm:px-32 md:px-32 lg:px-32 xl:px-48">
                <div class="flex w-full">
                    <div class="lg:w-1/2 lg:py-32 lg:pt-16">
                        <x-agroamigable.text-structures.article flexalignment="justify-center lg:justify-start" alignment="text-center lg:text-left" color="text-lime-c900" hashtag="Innovación Agrícola" title="Agricultura limpia, eficiente y rentable" content="Cultivos sin plagas, ¿es posible?. Sí, es posible la innovación agrícola con nuestra experiencia de
                    más de 20 años (desde 1999), implementado metodologías que incluyen la teoría de la Trofobiosis, la
                    cual plantea que '“'en suelos sanos, cultivos sanos, y en suelo sanos, las plagas se morirán de
                    hambre'”'. Francis Chauboussou">
                        </x-agroamigable.text-structures.article>
                        <div class="w-full h-auto flex justify-center items-center gap-6 p-6 flex-col lg:flex-row">
                            <x-agroamigable.buttons.orange-button href="https://wa.me/+573133811612" label="Contactar">
                            </x-agroamigable.buttons.orange-button>
                            <x-agroamigable.buttons.translucid-button href="https://wa.me/+573133811612" label="Quiero saber más"></x-agroamigable.buttons.translucid-button>
                        </div>
                    </div>
                    <div class="lg:w-1/3 h-full">
                    </div>
                </div>
                <div class="background-images2 flex overflow-x-hidden">
                    <img class="lg:hidden absolute z-10 pt-3" src="{{ url('/images/background-images-mobile.png') }}" alt="Image" />
                    <img class="lg:hidden z-10 pt-3" src="{{ url('/images/background-image-espaciador.png') }}" alt="Image" />
                </div>
            </div>

            <x-agroamigable.separators.lime-c900></x-agroamigable.separators.lime-c900>
            <!-- END SECTION: LANDING -->
            <!-- SECTION: BOOK -->
            <div class="bg-lime-c900 p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 relative z-50 md:flex md:items-center md:justify-center lg:flex lg:items-center lg:justify-center w-full">
                <img class="lg:w-1/3 scale-150 lg:scale-150 py-10 center" src="{{ url('/images/Portada_AGRO_AMIGABLE_1.png') }}" alt="Image" />
                <div class="lg:w-2/3">
                    <x-agroamigable.text-structures.article flexalignment="justify-center lg:justify-end" alignment="text-center lg:text-right" color="text-lime-300" hashtag="Descarga el libro
                digital y gratuito" title="Agro
                Amigable
                con el Medio Ambiente" content="Una visión del desarrollo económico y social, el cual reúne numerosas experiencias de los autores
                implementando esta metodología con proyectos de cooperación internacional con excelentes resultados
                en
                múltiples países de Hispano América.">
                    </x-agroamigable.text-structures.article>
                    <div class="buttons flex justify-around p-4">

                        <button @click="modelOpen =!modelOpen" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
                            <span>Descargar Libro
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION: BOOK -->
        <!-- SECTION: ABOUT US -->
        <div class="bg-lime-c500 ">
            <x-agroamigable.separators.lime-c500></x-agroamigable.separators.lime-c500>
            <div class="p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 lg:flex lg:items-center lg:justify-center w-full">
                <div class="lg:w-1/2">
                    <x-agroamigable.text-structures.article flexalignment="justify-center lg:justify-start" alignment="text-center lg:text-left" color="text-lime-c900" hashtag="Reserva tu asesoría" title="Reserva hoy mismo tu
                    asesoría virtual o
                    presencial con los autores del libro." content="Tenemos agenda abierta para que agendes tu asesoría 1 a 1 con nuestros expertos, para que comiences
                    a transformar exponencialmente tu producción agrícola.">
                    </x-agroamigable.text-structures.article>
                    <div class="w-full h-auto flex justify-center items-center gap-6 p-6 flex-col lg:flex-row">
                        <x-agroamigable.buttons.orange-button href="https://wa.me/+573133811612" label="Contactar">
                        </x-agroamigable.buttons.orange-button>
                        <x-agroamigable.buttons.translucid-button href="https://wa.me/+573133811612" label="Quiero saber más"></x-agroamigable.buttons.translucid-button>
                    </div>

                </div>
                <div class="lg:w-1/2"><img class="relative bottom-0 scale-150" src="{{ url('/images/autors.png') }}" alt="Image" />
                </div>
            </div>
        </div>
        <!-- END SECTION: ABOUT US -->
        <!-- SECTION: CLIENTS TESTIMONIALS -->
        <div class="bg-lime-c100 ">
            <x-agroamigable.separators.lime-c100></x-agroamigable.separators.lime-c100>
            <div class="p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 lg:flex lg:items-center lg:justify-center w-full">
                <div class="lg:w-1/2 p-2 md:pr-16 grid gap-12">
                    <x-agroamigable.boxes.testimony witness="Alejandro Rodríguez" location="Finca Los Haticos Guarico, Moran,
                        Lara, Venezuela" body="Pasó a producir sus propios abonos orgánicos para los cultivos
                        de hortalizas y también desarrolló un exitoso programa Agroturistico." imageUrl="/images/PHOTO-2023-06-07-21-00-39.jpg" videoUrl="https://www.youtube.com/embed/aumZYzr8czs"></x-agroamigable.boxes.testimony>
                    <x-agroamigable.boxes.testimony witness="Luis Fernando Pérez de Buga" location="Valle, Colombia" body="Hizo el proceso de
                                    diversificación escalonada de café, inicialmente a Plátano y banano. Hoy su Granja
                                    Villa del Lago en la Verada Monterrey es un ejemplo de diversificación y
                                    competitividad." imageUrl="/images/man.png" videoUrl="https://www.youtube.com/embed/aumZYzr8czs">
                    </x-agroamigable.boxes.testimony>
                </div>
                <div class="lg:w-1/2">
                    <x-agroamigable.text-structures.article flexalignment="justify-center lg:justify-end" alignment="text-center lg:text-right" color="text-lime-c900" hashtag="Testimonios" title="Lo que dicen nuestros clientes de los resultados obtenidos con nuestro acompañamiento." content="Académicos respaldan la veracidad de esta metodología y propietarios de fincas agro productoras de toda Hispano América han evidenciado aumentos exponenciales de su producción agrícola, con calidades superiores a la media y con la mayor eficiencia de uso del suelo.">
                    </x-agroamigable.text-structures.article>
                    <div class="hidden w-full h-auto lg:flex justify-center items-center gap-6 p-12">
                        <div class="w-full h-auto flex justify-center items-center gap-6 p-6 flex-col lg:flex-row">
                            <button @click="modelOpen =!modelOpen" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
                                <span>Descargar Libro
                                </span>
                            </button>
                        </div>
                        <x-agroamigable.buttons.translucid-button href="https://wa.me/+573133811612" label="Contactar">
                        </x-agroamigable.buttons.translucid-button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION: CLIENTS TESTIMONIALS -->
        <div class="blog bg-lime-c100 flex justify-around">
            <div class="w-full p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 lg:p-16">
                <div class="main-title py-6 text-lime-c900 font-bold text-3xl lg:text-5xl text-center">Échale un vistazo a
                    nuestros
                    últimos
                    artículos en el Blog.
                </div>
                <div class="blog-articles p-0 lg:p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    @foreach ($publications as $publication)
                    <x-publications-showcase :name=" $publication->name" :image="$publication->image" :abstract="$publication->abstract" :id="$publication->id" />
                    @endforeach
                </div>
                <div class="flex justify-center place-content-center">
                    {!! $publications->links('vendor.pagination.agroamigable') !!}
                </div>

            </div>
        </div>
        <div class="footer-agroamigable bg-lime-c100 flex justify-around items-center p-2 border-t border-b border-lime-c900">
            <img class="scale-75 lg:scale-50 w-1/2 lg:w-auto p-2" src="{{ url('/images/Logo AgroAmigable_-12_-12 4.png') }}" alt="Image" />
            <div class="slogan-footer w-1/2 lg:w-auto p-2 text-lime-c900 font-semibold text-2xl">Nuestra causa es la vida...
                toda la vida.</div>
        </div>
        <div class="sub-footer-agroamigable-sm lg:hidden bg-lime-c100 w-full flex-col justify-around items-center p-8 border-lime-c900 text-lime-c900 text-center text-2xl">
            Copyright © 2023 Designed by Biosens Lab & Dustrad Technologies | All Rights Reserved
            <div class="flex items-center justify-center">
                <div class="container max-w-screen-lg mx-auto">
                    <div>
                        <div class="flex flex-wrap justify-center gap-2">
                            <button class="p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </button>

                            <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                <a href="https://www.twitter.com/AgroAmigable" target="_blank">
                                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>
                            </button>

                            <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                <a href="https://www.linkedin.com/company/agroamigable" target="_blank">
                                    <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M218.123122,218.127392 L180.191928,218.127392 L180.191928,158.724263 C180.191928,144.559023 179.939053,126.323993 160.463756,126.323993 C140.707926,126.323993 137.685284,141.757585 137.685284,157.692986 L137.685284,218.123441 L99.7540894,218.123441 L99.7540894,95.9665207 L136.168036,95.9665207 L136.168036,112.660562 L136.677736,112.660562 C144.102746,99.9650027 157.908637,92.3824528 172.605689,92.9280076 C211.050535,92.9280076 218.138927,118.216023 218.138927,151.114151 L218.123122,218.127392 Z M56.9550587,79.2685282 C44.7981969,79.2707099 34.9413443,69.4171797 34.9391618,57.260052 C34.93698,45.1029244 44.7902948,35.2458562 56.9471566,35.2436736 C69.1040185,35.2414916 78.9608713,45.0950217 78.963054,57.2521493 C78.9641017,63.090208 76.6459976,68.6895714 72.5186979,72.8184433 C68.3913982,76.9473153 62.7929898,79.26748 56.9550587,79.2685282 M75.9206558,218.127392 L37.94995,218.127392 L37.94995,95.9665207 L75.9206558,95.9665207 L75.9206558,218.127392 Z M237.033403,0.0182577091 L18.8895249,0.0182577091 C8.57959469,-0.0980923971 0.124827038,8.16056231 -0.001,18.4706066 L-0.001,237.524091 C0.120519052,247.839103 8.57460631,256.105934 18.8895249,255.9977 L237.033403,255.9977 C247.368728,256.125818 255.855922,247.859464 255.999,237.524091 L255.999,18.4548016 C255.851624,8.12438979 247.363742,-0.133792868 237.033403,0.000790807055">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </button>

                            <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                <a href="https://www.youtube.com/@AgroAmigable" target="_blank">
                                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden lg:block">
            <div class="sub-footer-agroamigable-lg bg-lime-c100 w-full flex justify-around items-center p-8 border-lime-c900 text-lime-c900">
                <div class="copyright hidden lg:block">
                    Copyright © 2023 Designed by Biosens Lab & Dustrad Technologies | All Rights Reserved

                </div>
                <div class="hidden lg:block">
                    <div class="flex items-center justify-center">
                        <div class="container max-w-screen-lg mx-auto">
                            <div>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <button class="p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                        <a href="https://www.facebook.com/agroamigable.latam" target="_blank">
                                            <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                            </svg>
                                        </a>
                                    </button>

                                    <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                        <a href="https://www.twitter.com/AgroAmigable" target="_blank">
                                            <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                            </svg>
                                        </a>
                                    </button>

                                    <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                        <a href="https://www.linkedin.com/company/agroamigable" target="_blank">
                                            <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M218.123122,218.127392 L180.191928,218.127392 L180.191928,158.724263 C180.191928,144.559023 179.939053,126.323993 160.463756,126.323993 C140.707926,126.323993 137.685284,141.757585 137.685284,157.692986 L137.685284,218.123441 L99.7540894,218.123441 L99.7540894,95.9665207 L136.168036,95.9665207 L136.168036,112.660562 L136.677736,112.660562 C144.102746,99.9650027 157.908637,92.3824528 172.605689,92.9280076 C211.050535,92.9280076 218.138927,118.216023 218.138927,151.114151 L218.123122,218.127392 Z M56.9550587,79.2685282 C44.7981969,79.2707099 34.9413443,69.4171797 34.9391618,57.260052 C34.93698,45.1029244 44.7902948,35.2458562 56.9471566,35.2436736 C69.1040185,35.2414916 78.9608713,45.0950217 78.963054,57.2521493 C78.9641017,63.090208 76.6459976,68.6895714 72.5186979,72.8184433 C68.3913982,76.9473153 62.7929898,79.26748 56.9550587,79.2685282 M75.9206558,218.127392 L37.94995,218.127392 L37.94995,95.9665207 L75.9206558,95.9665207 L75.9206558,218.127392 Z M237.033403,0.0182577091 L18.8895249,0.0182577091 C8.57959469,-0.0980923971 0.124827038,8.16056231 -0.001,18.4706066 L-0.001,237.524091 C0.120519052,247.839103 8.57460631,256.105934 18.8895249,255.9977 L237.033403,255.9977 C247.368728,256.125818 255.855922,247.859464 255.999,237.524091 L255.999,18.4548016 C255.851624,8.12438979 247.363742,-0.133792868 237.033403,0.000790807055">
                                                    </path>
                                                </g>
                                            </svg>
                                        </a>
                                    </button>

                                    <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                        <a href="https://www.youtube.com/@AgroAmigable" target="_blank">
                                            <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                            </svg>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM: BOOK -->
        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                </div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="main-title py-2 text-lime-c900 font-bold text-3xl text-center border-b border-orange-c500">
                            Descarga GRATIS nuestro libro.</h1>

                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>

                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div>
                                <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre
                                    completo</label>
                                <input placeholder="Maria Dolores" name="name" value="{{ old('name') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                @error('name')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mt-4">
                                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Email</label>
                                <input placeholder="mariadolores@gmail.com" type="email" id="email" name="email" value="{{ old('email') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                @error('email')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mt-4">
                                <label for="phone" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teléfono</label>
                                <input placeholder="" type="number" name="phone" value="{{ old('phone') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                @error('phone')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mt-4">
                                <label for="country" class="block text-sm text-gray-700 capitalize dark:text-gray-200">País</label>
                                <select name="country" id="country" class="country block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="Seleccione país">
                                    <option selected="" value="">Seleccione País</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mt-4">
                                <label for="state" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Región</label>
                                <select name="region" id="region" class="region block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="Seleccione región">
                                    <option selected="" value="">Seleccione Región</option>
                                </select>
                                @error('region')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mt-4">
                                <label for="ciudad" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Ciudad</label>
                                <input placeholder="" name="city" value="{{ old('city') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                @error('city')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                                @enderror
                            </div>

                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="submit" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
                                Descargar Libro
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FORM: END -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            var regions = document.querySelectorAll(".region");
            var countries = document.querySelectorAll(".country")

            $(".country").change(function() {
                let country_id = this.value;
                $.get('/1?country=' + country_id, function(data) {
                    $(".region").html(data);
                })
            })
        })
    </script>

</body>

<script type="text/javascript">
    var contador;
    var alreadyopened;

    $(document).ready(function() {
        contador = 0;
        alreadyopened = 0;
    });

    function logMessage(idClicked, idItself) {
        contador = contador + 1;
        console.log("botón cliqueado fue:" + idClicked + ",botón actual es:" + idItself + "y se ha activado " + contador + " veces.");
    }
</script>

</html>