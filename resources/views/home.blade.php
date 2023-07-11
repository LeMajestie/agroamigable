<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="home bg-gradient-to-tl from-lime-c100 to-white">
        <x-navbar></x-navbar>
        <div class="flex w-full">
            <div class="lg:w-2/3 lg:p-16 lg:pl-32 lg:pr-24 p-6">
                <x-agroamigable.text-structures.article color="text-lime-c900" hashtag="Innovación Agrícola"
                    title="Agricultura limpia, eficiente y rentable"
                    content="Cultivos sin plagas, ¿es posible?. Sí, es posible la innovación agrícola con nuestra experiencia de
                    más de 20 años (desde 1999), implementado metodologías que incluyen la teoría de la Trofobiosis, la
                    cual plantea que '“'en suelos sanos, cultivos sanos, y en suelo sanos, las plagas se morirán de
                    hambre'”'. Francis Chauboussou">
                </x-agroamigable.text-structures.article>
                <div class="hidden w-full h-auto lg:flex justify-center items-center gap-6 p-12">
                    <div class=""><a
                            class="rounded-full bg-orange-c500 border-2 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4"
                            href="https://wa.me/+573133811612">
                            Contactar
                        </a></div>
                    <div class=""> <a
                            class="rounded-full border-2 border-lime-c900 hover:bg-lime-c900 hover:text-white text-lime-c900 text-xl p-4"
                            href="https://wa.me/+573133811612">
                            Quiero saber más</a></div>
                </div>
            </div>
            <div class="lg:w-1/3 h-full">
            </div>
        </div>
        <div class="background-images2 flex overflow-x-hidden">
            <img class="lg:hidden absolute z-10 pt-3" src="{{ url('/images/background-images-mobile.png') }}"
                alt="Image" />
            <img class="lg:hidden z-10 pt-3" src="{{ url('/images/background-image-espaciador.png') }}"
                alt="Image" />
        </div>
        <div class="overflow-x-hidden relative z-50">
            <div class="separator flex justify-star">
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
            </div>
        </div>
    </div>
    <div class="book-lg bg-lime-c900 flex justify-around relative z-50 lg:p-16">
        <div class="w-1/2 hidden lg:block bookbackward">
            <div class="flex justify-center">
                <img class="scale-90 lg:scale-[0.8] content-center"
                    src="{{ url('/images/Portada_AGRO_AMIGABLE_1.png') }}" alt="Image" />
            </div>
        </div>
        <div class="w-1/2 hidden lg:block p-6 text-right">
            <div class="subtext py-6 text-lime-300 font-bold text-xl text-center lg:text-right"> Descarga el libro
                digital y gratuito</div>
            <div class="main-title py-6 text-lime-300 font-semibold text-5xl text-center lg:text-right">"Agro Amigable
                con el Medio Ambiente"
            </div>
            <div class="paragraph py-6 text-center lg:text-right text-lime-300">
                Una visión del desarrollo económico y social, el cual reúne numerosas experiencias de los autores
                implementando esta metodología con proyectos de cooperación internacional con excelentes resultados en
                múltiples países de Hispano América.
            </div>
            <div class="buttons flex justify-around p-4">
                <x-button-popup :countries=$countries />
                </x-button-popup :countries=$countries>
            </div>
        </div>
    </div>
    <div class="book-sm lg:hidden bg-lime-c900 flex-col relative z-50 p-6">
        <div class="bookbackward-sm">
            <img class="scale-75" src="{{ url('/images/Portada_AGRO_AMIGABLE_1.png') }}" alt="Image" />
        </div>
        <div class="text-right">
            <div class="subtext text-lime-300 font-bold text-xl text-center py-2">Descarga el libro
                digital y gratuito</div>
            <div class="main-title text-lime-300 font-semibold text-3xl text-center py-6">"Agro Amigable
                con el Medio Ambiente"
            </div>
            <div class="paragraph text-center lg:text-right text-lime-300">
                Una visión del desarrollo económico y social, el cual reúne numerosas experiencias de los autores
                implementando esta metodología con proyectos de cooperación internacional con excelentes resultados en
                múltiples países de Hispano América.
            </div>
            <div class="buttons flex justify-around p-4">
                <x-button-popup :countries=$countries />
                </x-button-popup :countries=$countries>
            </div>
        </div>
    </div>
    <div class="advisory-sm bg-lime-c500">
        <div class="overflow-x-hidden">
            <div class="separator2 flex justify-star">
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector.png') }}" alt="Image" />
            </div>
        </div>
        <div class="lg:hidden flex-col justify-around">
            <div class="p-6">
                <div class="subtext py-2 text-lime-c900 font-bold text-xl text-center">Reserva tu asesoría</div>
                <div class="main-title py-2 text-lime-c900 font-bold text-3xl text-center">Reserva hoy mismo tu
                    asesoría virtual o
                    presencial con los autores del libro.
                </div>
                <div class="paragraph py-6 text-lime-c900 text-center">
                    Tenemos agenda abierta para que agendes tu asesoría 1 a 1 con nuestros expertos, para que comiences
                    a transformar exponencialmente tu producción agrícola.
                </div>
                <div class="lg:hidden w-full h-auto flex justify-center items-center gap-6 p-2">
                    <div class="flex-col justify-center items-center">
                        <div class="py-2 flex justify-center items-center">
                            <a class="flex justify-center items-center rounded-full bg-orange-c500 border-2 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-lg p-4 py-3"
                                href="https://wa.me/+573133811612">
                                Reservar cita ahora
                            </a>
                        </div>
                        <div class="py-2 flex justify-center items-center">
                            <a class="flex justify-center items-center rounded-full border-2 border-lime-c900 text-lime-c900 text-lg p-4 py-3 hover:bg-lime-c900 hover:text-white"
                                href="https://wa.me/+573133811612">
                                Sobre nosotros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=""><img class="autorsbackward" src="{{ url('/images/autors.png') }}" alt="Image" />
            </div>
        </div>
        <div class="advisory-lg flex justify-around">
            <div class="hidden lg:block w-1/2 p-16">
                <div class="subtext py-6 text-lime-c900 font-bold text-xl">Reserva tu asesoría</div>
                <div class="main-title py-6 text-lime-c900 font-bold text-5xl">Reserva hoy mismo tu asesoría virtual o
                    presencial con los autores del libro.
                </div>
                <div class="paragraph py-6 text-lime-c900">
                    Tenemos agenda abierta para que agendes tu asesoría 1 a 1 con nuestros expertos, para que comiences
                    a transformar exponencialmente tu producción agrícola.
                </div>
                <div class="buttons flex justify-around p-4">
                    <a class="rounded-full bg-orange-c500 text-white text-xl border-2 border-orange-c500 hover:bg-transparent hover:text-orange-c500 p-4"
                        href="https://wa.me/+573133811612">
                        Reservar
                        cita ahora</a>
                    <a class="rounded-full border-2 border-lime-c900 text-lime-c900 text-xl p-4 hover:bg-lime-c900 hover:text-white"
                        href="https://wa.me/+573133811612">
                        Sobre nosotros</a>
                </div>
            </div>
            <div class="hidden lg:block w-1/2"><img class="autorsbackward" src="{{ url('/images/autors.png') }}"
                    alt="Image" />
            </div>
        </div>
    </div>
    <div class="comments bg-lime-c100">
        <div class="overflow-x-hidden">
            <div class="separator3 flex justify-star">
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector 2.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector 2.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector 2.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector 2.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector 2.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector 2.png') }}" alt="Image" />
                <img class="h-16 lg:h-32" src="{{ url('/images/Vector 2.png') }}" alt="Image" />
            </div>
        </div>
        <div class="testimonials-sm lg:hidden flex-col justify-around">
            <div class="p-6 lg:p-24 ">
                <div class="py-6">
                    <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
                        <div class="sm:flex sm:items-center px-6 py-4">
                            <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0"
                                src="{{ url('/images/PHOTO-2023-06-07-21-00-39.jpg') }}" alt="">
                            <div class="text-center sm:text-left sm:flex-grow">
                                <div class="mb-4">
                                    <p class="text-xl leading-tight">Alejandro RodrÍguez</p>
                                    <p class="text-sm leading-tight text-gray-400">Finca Los Haticos Guarico, Moran,
                                        Lara, Venezuela pasó a producir sus propios abonos orgánicos para los cultivos
                                        de hortalizas y también desarrolló un exitoso programa Agroturistico.</p>
                                </div>
                                <div>
                                    <x-button-popup-video>
                                    </x-button-popup-video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
                    <div class="sm:flex sm:items-center px-6 py-4">
                        <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0"
                            src="{{ url('/images/man.png') }}" alt="">
                        <div class="text-center sm:text-left sm:flex-grow">
                            <div class="mb-4">
                                <p class="text-xl leading-tight">Luis Fernando Pérez de Buga</p>
                                <p class="text-sm leading-tight text-gray-400">Valle, Colombia hizo el proceso de
                                    diversificación escalonada de café, inicialmente a Plátano y banano. Hoy su Granja
                                    Villa del Lago en la Verada Monterrey es un ejemplo de diversificación y
                                    competitividad.</p>
                            </div>
                            <div>
                                <button
                                    class="text-xs font-semibold rounded-full px-4 py-1 leading-normal border-2 border-purple-400 text-purple hover:bg-purple-400 hover:text-white"><a
                                        href="https://www.youtube.com/watch?v=V6sRPjYf_XY">Escuchar</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="subtext py-2 text-lime-c900 font-bold text-xl text-center">Testimonios</div>
                <div class="main-title py-2 text-lime-c900 font-bold text-3xl text-center">Lo que dicen nuestros
                    clientes de los
                    resultados obtenidos con nuestro acompañamiento.
                </div>
                <div class="paragraph py-2 text-lime-c900 text-center">
                    Académicos respaldan la veracidad de esta metodología y propietarios de fincas agro productoras de
                    toda
                    Hispano América han evidenciado aumentos exponenciales de su producción agrícola, con calidades
                    superiores a la media y con la mayor eficiencia de uso del suelo.
                </div>
                <div class="lg:hidden w-full h-auto flex justify-center items-center gap-6 p-2">
                    <div class="flex-col justify-center items-center">
                        <div class="py-2 flex justify-center items-center">
                            <x-button-popup :countries=$countries />
                            </x-button-popup :countries=$countries>
                        </div>
                        <div class="py-2 flex justify-center items-center">
                            <a class="flex justify-center items-center rounded-full border-2 border-lime-c900 text-lime-c900 text-lg p-4 py-3 hover:bg-lime-c900 hover:text-white"
                                href="https://wa.me/+573133811612">
                                Contactar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonials-lg flex justify-around">
            <div class="hidden lg:block w-1/2 p-24">
                <div class="py-16">
                    <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
                        <div class="sm:flex sm:items-center px-6 py-4">
                            <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0"
                                src="{{ url('/images/PHOTO-2023-06-07-21-00-39.jpg') }}" alt="">
                            <div class="text-center sm:text-left sm:flex-grow">
                                <div class="mb-4">
                                    <p class="text-xl leading-tight">Alejandro RodrÍguez</p>
                                    <p class="text-sm leading-tight text-gray-400">Finca Los Haticos Guarico, Moran,
                                        Lara, Venezuela pasó a producir sus propios abonos orgánicos para los cultivos
                                        de hortalizas y también desarrolló un exitoso programa Agroturistico.</p>
                                </div>
                                <div>
                                    <x-button-popup-video>
                                    </x-button-popup-video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
                    <div class="sm:flex sm:items-center px-6 py-4">
                        <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0"
                            src="{{ url('/images/man.png') }}" alt="">
                        <div class="text-center sm:text-left sm:flex-grow">
                            <div class="mb-4">
                                <p class="text-xl leading-tight">Luis Fernando Pérez de Buga</p>
                                <p class="text-sm leading-tight text-gray-400">Valle, Colombia hizo el proceso de
                                    diversificación escalonada de café, inicialmente a Plátano y banano. Hoy su Granja
                                    Villa del Lago en la Verada Monterrey es un ejemplo de diversificación y
                                    competitividad.</p>
                            </div>
                            <div>
                                <button
                                    class="text-xs font-semibold rounded-full px-4 py-1 leading-normal border-2 border-purple-400 text-purple hover:bg-purple-400 hover:text-white"><a
                                        href="https://www.youtube.com/watch?v=V6sRPjYf_XY">Escuchar</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block w-1/2 p-16">
                <div class="subtext py-6 text-lime-c900 font-bold text-xl">Testimonios</div>
                <div class="main-title py-6 text-lime-c900 font-bold text-5xl">Lo que dicen nuestros clientes de los
                    resultados obtenidos con nuestro acompañamiento.
                </div>
                <div class="paragraph py-6 text-lime-c900">
                    Académicos respaldan la veracidad de esta metodología y propietarios de fincas agro productoras de
                    toda
                    Hispano América han evidenciado aumentos exponenciales de su producción agrícola, con calidades
                    superiores a la media y con la mayor eficiencia de uso del suelo.
                </div>
                <div class="buttons flex justify-around p-4">

                    <x-button-popup :countries=$countries />
                    </x-button-popup :countries=$countries>
                    <a class="rounded-full border-2 border-lime-c900 text-lime-c900 text-xl p-4 hover:bg-lime-c900 hover:text-white"
                        href="https://wa.me/+573133811612">
                        Contactar</a>

                </div>
            </div>
        </div>
    </div>
    <div class="blog bg-lime-c100 flex justify-around">
        <div class="w-full p-6 lg:p-16">
            <div class="main-title py-6 text-lime-c900 font-bold text-3xl lg:text-5xl text-center">Échale un vistazo a
                nuestros
                últimos
                artículos en el Blog.
            </div>
            <div
                class="blog-articles p-0 lg:p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5"">
                @foreach ($publications as $publication)
                            <x-publications-showcase :name="$publication->name" :image="$publication->image" :abstract="$publication->abstract" :id="$publication->id"/>
                @endforeach
            </div>
        </div>
    </div>
    <div
        class="footer-agroamigable bg-lime-c100 flex justify-around items-center p-2 border-t border-b border-lime-c900">
        <img class="scale-75 lg:scale-50 w-1/2 lg:w-auto p-2"
            src="{{ url('/images/Logo AgroAmigable_-12_-12 4.png') }}" alt="Image" />
        <div class="slogan-footer w-1/2 lg:w-auto p-2 text-lime-c900 font-semibold text-lg">Nuestra causa es la vida...
            toda la vida.</div>
    </div>
    <div
        class="sub-footer-agroamigable-sm lg:hidden bg-lime-c100 w-full flex-col justify-around items-center p-8 border-lime-c900 text-lime-c900 text-center">
        Copyright © 2023 Designed by Biosens Lab & Dustrad Technologies | All Rights Reserved
        <div class="flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <div class="flex flex-wrap justify-center gap-2">
                        <button class="p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                            <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </button>

                        <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                            <a href="https://www.twitter.com/AgroAmigable" target="_blank">
                                <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                        </button>

                        <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                            <a href="https://www.linkedin.com/company/agroamigable" target="_blank">
                                <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 256 256"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M218.123122,218.127392 L180.191928,218.127392 L180.191928,158.724263 C180.191928,144.559023 179.939053,126.323993 160.463756,126.323993 C140.707926,126.323993 137.685284,141.757585 137.685284,157.692986 L137.685284,218.123441 L99.7540894,218.123441 L99.7540894,95.9665207 L136.168036,95.9665207 L136.168036,112.660562 L136.677736,112.660562 C144.102746,99.9650027 157.908637,92.3824528 172.605689,92.9280076 C211.050535,92.9280076 218.138927,118.216023 218.138927,151.114151 L218.123122,218.127392 Z M56.9550587,79.2685282 C44.7981969,79.2707099 34.9413443,69.4171797 34.9391618,57.260052 C34.93698,45.1029244 44.7902948,35.2458562 56.9471566,35.2436736 C69.1040185,35.2414916 78.9608713,45.0950217 78.963054,57.2521493 C78.9641017,63.090208 76.6459976,68.6895714 72.5186979,72.8184433 C68.3913982,76.9473153 62.7929898,79.26748 56.9550587,79.2685282 M75.9206558,218.127392 L37.94995,218.127392 L37.94995,95.9665207 L75.9206558,95.9665207 L75.9206558,218.127392 Z M237.033403,0.0182577091 L18.8895249,0.0182577091 C8.57959469,-0.0980923971 0.124827038,8.16056231 -0.001,18.4706066 L-0.001,237.524091 C0.120519052,247.839103 8.57460631,256.105934 18.8895249,255.9977 L237.033403,255.9977 C247.368728,256.125818 255.855922,247.859464 255.999,237.524091 L255.999,18.4548016 C255.851624,8.12438979 247.363742,-0.133792868 237.033403,0.000790807055">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </button>

                        <button class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                            <a href="https://www.youtube.com/@AgroAmigable" target="_blank">
                                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="hidden lg:block">
        <div
            class="sub-footer-agroamigable-lg bg-lime-c100 w-full flex justify-around items-center p-8 border-lime-c900 text-lime-c900">
            <div class="copyright hidden lg:block">
                Copyright © 2023 Designed by Biosens Lab & Dustrad Technologies | All Rights Reserved

            </div>
            <div class="hidden lg:block">
                <div class="flex items-center justify-center">
                    <div class="container max-w-screen-lg mx-auto">
                        <div>
                            <div class="flex flex-wrap justify-center gap-2">
                                <button
                                    class="p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                    <svg class="w-5 h-5 fill-current" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </button>

                                <button
                                    class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                    <a href="https://www.twitter.com/AgroAmigable" target="_blank">
                                        <svg class="w-5 h-5 fill-current" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                        </svg>
                                    </a>
                                </button>

                                <button
                                    class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                    <a href="https://www.linkedin.com/company/agroamigable" target="_blank">
                                        <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 256 256"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M218.123122,218.127392 L180.191928,218.127392 L180.191928,158.724263 C180.191928,144.559023 179.939053,126.323993 160.463756,126.323993 C140.707926,126.323993 137.685284,141.757585 137.685284,157.692986 L137.685284,218.123441 L99.7540894,218.123441 L99.7540894,95.9665207 L136.168036,95.9665207 L136.168036,112.660562 L136.677736,112.660562 C144.102746,99.9650027 157.908637,92.3824528 172.605689,92.9280076 C211.050535,92.9280076 218.138927,118.216023 218.138927,151.114151 L218.123122,218.127392 Z M56.9550587,79.2685282 C44.7981969,79.2707099 34.9413443,69.4171797 34.9391618,57.260052 C34.93698,45.1029244 44.7902948,35.2458562 56.9471566,35.2436736 C69.1040185,35.2414916 78.9608713,45.0950217 78.963054,57.2521493 C78.9641017,63.090208 76.6459976,68.6895714 72.5186979,72.8184433 C68.3913982,76.9473153 62.7929898,79.26748 56.9550587,79.2685282 M75.9206558,218.127392 L37.94995,218.127392 L37.94995,95.9665207 L75.9206558,95.9665207 L75.9206558,218.127392 Z M237.033403,0.0182577091 L18.8895249,0.0182577091 C8.57959469,-0.0980923971 0.124827038,8.16056231 -0.001,18.4706066 L-0.001,237.524091 C0.120519052,247.839103 8.57460631,256.105934 18.8895249,255.9977 L237.033403,255.9977 C247.368728,256.125818 255.855922,247.859464 255.999,237.524091 L255.999,18.4548016 C255.851624,8.12438979 247.363742,-0.133792868 237.033403,0.000790807055">
                                                </path>
                                            </g>
                                        </svg>
                                    </a>
                                </button>

                                <button
                                    class=" p-2 font-semibold text-lime-c900 inline-flex items-center space-x-2 rounded">
                                    <a href="https://www.youtube.com/@AgroAmigable" target="_blank">
                                        <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
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

</body>

</html>
