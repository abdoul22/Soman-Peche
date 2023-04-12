<header class="bg-slate-900 ">
    <div class=" md:flex md:justify-start">
        <nav class="text-right">
            <div class="flex justify-between items-center">
                <h1 class=" font-bold uppercase p-4"><a href="/"><img class="h-48 w-26 md:mr-96" src="images/logo/soman2.svg" alt=""></a></h1>
                <div class="px-4 md:hidden" id="burger">
                    <svg class="w-6 text-gray-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"></path>
                    </svg>
                </div>
            </div>
            <ul class="text-sm md:flex md:pl-60 py-5 md:ml-52 md:justify-center  hidden " id="menu">
                <li class="text-gray-300 font-bold py-1">
                    <a href="/" class="px-2 flex border-l-4 border-indigo-900 ">
                        <svg class="w-5  mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                            </path>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="text-gray-300 py-1">
                    <a href="{{ route('about') }}" class="px-2 flex border-l-4 ">
                        <svg class="w-5 mr-2 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002">
                            </path>
                        </svg>
                        <span>About Us</span>
                    </a>
                </li>
                <li class="py-1 text-gray-300">
                    <a href="{{ route('contact') }}" class="px-2 flex border-l-4">
                        <svg class="w-5 mr-2 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z">
                            </path>
                        </svg>
                        <span>Contact</span>
                    </a>
                </li>
                <li class=" text-gray-300 py-1">
                    <a href="{{ route('albums.index') }}" class="px-2 flex border-l-4">
                        <svg class='w-5 mr-2 ' fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                            </path>
                        </svg>
                        <span>Gallery</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- <nav class="relative flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-6">
            <div class="flex items-center">
                <img class="h-24 w-26 mr-96" src="images/logo/soman2.svg" alt="">
                <button
                    class="mr-2 border-0 bg-transparent py-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
                    type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
                    aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="!visible hidden ml-96 grow basis-[100%] items-center lg:!flex lg:basis-auto"
                id="navbarSupportedContentY" data-te-collapse-item>
                <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                    <li data-te-nav-item-ref>
                        <a href="/" class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                            href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Home</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a href="{{ route('products.index') }}" class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                            href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Products</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a href="{{ route('contact') }}" class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                            href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Contact</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a href="{{ route('about') }}" class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                            href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

</header>
