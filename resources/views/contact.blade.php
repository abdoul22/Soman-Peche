@extends('layouts.style')
@section('content')
<div class="grid md:grid-cols-3">{{-- content wrapper --}}
    <div class="md:col-span-1 md:flex md:justify-start">
        <nav class="text-right">
            <div class="flex justify-between items-center ">
                <h1 class="border-b border-gray-100 font-bold uppercase p-4"><a href="/">Logo</a></h1>
                <div class="px-4 md:hidden" id="burger">
                    <svg class="w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"></path>
                    </svg>
                </div>
            </div>
            <ul class="text-sm mt-6 hidden md:block" id="menu">
                <li class="text-gray-700 font-bold py-1">
                    <a href="/" class="px-2 flex border-l-4 border-indigo-900 ">
                        <svg class="w-5  mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                            </path>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="py-1">
                    <a href="/" class="px-2 flex border-l-4 ">
                        <svg class="w-5 mr-2 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002">
                            </path>
                        </svg>
                        <span>About Us</span>
                    </a>
                </li>
                <li class="py-1">
                    <a href="/" class="px-2 flex border-l-4">
                        <svg class="w-5 mr-2 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z">
                            </path>
                        </svg>
                        <span>Contact</span>
                    </a>
                </li>
                <li class="py-1">
                    <a href="/" class="px-2 flex border-l-4">
                        <svg class='w-5 mr-2 ' fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
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
    <!--end nav-->
    <main class="px-16 py-6 md:col-span-2">
        <div class="flex justify-center md:justify-end">
            <a href="" class="transition ease-out duration-500 text-indigo-500 hover:bg-indigo-900 hover:text-gray-200 md:border-indigo-500 border-2 font-semibold btn">Login</a>
            <a href="" class="transition ease-out duration-500 btn ml-2 hover:bg-indigo-900 hover:text-gray-200 text-indigo-500 font-semibold md:border-indigo-500 border-2">Sign Up</a>
        </div>
        <header>
            <h2 class="text-gray-700 text-2xl font-semibold ">Recipies</h2>
            <h3 class="text-gray-700 text-lg font-semibold">For Soman peche</h3>
        </header>
        <div>
            <!--section 1-->
            <h4 class="border-b border-gray-300 font-bold mt-12 pb-2">Latest Recipes</h4>
            <div class="mt-8 grid lg:grid-cols-3 gap-10">
                <!--cards go here-->
                <div class="card hover:shadow-lg">
                    <img class="w-full sm:h-48 h-42 object-cover" src="{{asset('images/bannier/requin.jpg')}}" alt="">
                    <div class="p-2">
                        <span class=" text-gray-600 font-bold">5 Bean chilli strew</span>
                        <span class="text-gray-500 block text-sm"> chilli strew</span>
                    </div>
                    <div class="badge opacity-80">
                        <svg class="w-5 inline-block" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>14 min</span>
                    </div>
                </div>
                <div class="card hover:shadow-lg">
                    <img class="w-full sm:h-48 h-42 object-cover" src="{{asset('images/bannier/requin.jpg')}}" alt="">
                    <div class="p-2">
                        <span class=" text-gray-600 font-bold">5 Bean chilli strew</span>
                        <span class="text-gray-500 block text-sm"> chilli strew</span>
                    </div>
                    <div class="badge opacity-80">
                        <svg class="w-5 inline-block" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>14 min</span>
                    </div>
                </div>
                <div class="card hover:shadow-lg">
                    <img class="w-full sm:h-48 h-42 object-cover" src="{{asset('images/bannier/requin.jpg')}}" alt="">
                    <div class="p-2">
                        <span class=" text-gray-600 font-bold">5 Bean chilli strew</span>
                        <span class="text-gray-500 block text-sm"> chilli strew</span>
                    </div>
                    <div class="badge opacity-80">
                        <svg class="w-5 inline-block" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>14 min</span>
                    </div>
                </div>
                <div class="card hover:shadow-lg">
                    <img class=" w-full sm:h-48 h-42 object-cover" src="{{asset('images/bannier/requin.jpg')}}" alt="">
                    <div class="p-2">
                        <span class=" text-gray-600 font-bold">5 Bean chilli strew</span>
                        <span class="text-gray-500 block text-sm"> chilli strew</span>
                    </div>
                    <div class="badge opacity-80">
                        <svg class="w-5 inline-block" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>14 min</span>
                    </div>
                </div>
            </div>
            <!--section 2-->
            <h4 class="border-b border-gray-300 font-bold mt-12 pb-2">Most Popular</h4>
            <div class="mt-8">
                <!--cards go here-->
            </div>
            <div class="flex justify-center">
                <div class="transition ease-out duration-500 transform hover:scale-125 btn bg-indigo-900 hover:shadow-inner hover:bg-indigo-700 text-gray-200">Load More</div>
            </div>
        </div>
    </main>
</div>
@endsection
