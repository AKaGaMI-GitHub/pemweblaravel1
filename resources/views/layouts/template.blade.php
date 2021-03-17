<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
        <style>
            .bg-black-alt  {
                background:#191919;
            }
            .text-black-alt  {
                color:#191919;
            }
            .border-black-alt {
                border-color: #191919;
            }
        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-black-alt font-sans leading-normal tracking-normal">

        <nav id="header" class="bg-gray-900 fixed w-full z-10 top-0 shadow">
            

                <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
                        
                    <div class="w-1/2 pl-2 md:pl-0">
                        <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold"  href="/home"> 
                            <i class="fas fa-circle text-blue-400 pr-3"></i>Praktek Dokter Hewan I Gusti Ayu Endang Puspitasari
                        </a>
                    </div>
                    <div class="w-1/2 pr-0">
                        <div class="flex relative inline-block float-right">
                        @livewire('navigation-menu')
                            <div class="block lg:hidden pr-4">
                            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
                                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                            </button>
                        </div>
                        </div>

                    </div>


                    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-900 z-20" id="nav-content">
                        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                            <li class="mr-6 my-2 md:my-0">
                                <a href="{{route('home')}}" class="block py-1 md:py-3 pl-1 align-middle text-blue-400 no-underline hover:text-gray-100 border-b-2 border-blue-400 hover:border-blue-400">
                                    <i class="fas fa-home fa-fw mr-3 text-blue-400"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                                </a>
                            </li>
                            <li class="mr-6 my-2 md:my-0">
                                <a href="{{route('datapasien.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-green-400">
                                    <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Data Pasien</span>
                                </a>
                            </li>
                            <li class="mr-6 my-2 md:my-0">
                                <a href="{{route('dashboard')}}" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900 hover:border-green-400">
                                    <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        
                        
                        
                    </div>
                    
                </div>
            </nav>

            <!--Container-->
            <div class="container w-full mx-auto pt-20">
                <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
                    <div class="w-full p-3">
                        <!--Table Card-->
                            {{$slot}}                                  
                        <!--/table Card-->
                    </div>                  
                    <!--/ Console Content-->
                            
                </div>
                
            </div> 
            <!--/container-->
            
            <footer class="bg-gray-900 border-t border-gray-400 shadow">	
                <div class="container max-w-md mx-auto flex py-8">

                    <div class="w-full mx-auto flex flex-wrap">
                        <div class="flex w-full md:w-1/2 ">
                            <div class="px-8">
                                <h3 class="font-bold font-bold text-gray-100">About</h3>
                                <p class="py-4 text-gray-600 text-sm">
                                    Praktek Dokter Hewan drh.I Gusti Ayu Endang Puspitasari bertempat di Jalan Lingga No.2, praktek ini telah di buka sejak tahun 1997 
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex w-full md:w-1/2">
                            <div class="px-8">
                            <h3 class="font-bold font-bold text-gray-100">Contact Person</h3>
                                <ul class="list-reset items-center text-sm pt-3">
                                <li>
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="https://www.instagram.com/endangpuspitasari33/">Instagram</a>
                                    
                                </li>
                                <li>
                                    <p class="inline-block text-gray-600 no-underline">Whatsapp : 08563701995</p>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                

                
                </div>
            </footer>

        <script>
            
            
            /*Toggle dropdown list*/
            /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

            var userMenuDiv = document.getElementById("userMenu");
            var userMenu = document.getElementById("userButton");
            
            var navMenuDiv = document.getElementById("nav-content");
            var navMenu = document.getElementById("nav-toggle");
            
            document.onclick = check;

            function check(e){
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else {userMenuDiv.classList.add("invisible");}
                } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
                }
            }
            
            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {navMenuDiv.classList.add("hidden");}
                } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
                }
            }
            
            }

            function checkParent(t, elm) {
            while(t.parentNode) {
                if( t == elm ) {return true;}
                t = t.parentNode;
            }
            return false;
            }


        </script>
        @stack('modals')
        @livewireScripts
    </body>
</html>
