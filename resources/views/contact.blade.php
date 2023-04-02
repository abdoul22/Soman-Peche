@extends('layouts.style')
@section('content')
<div>{{-- content wrapper --}}
    <div>
        <nav>
            <div>
                <h1 class="border-b border-gray-100 font-bold uppercase p-4"><a href="/">Logo</a></h1>
            </div>
            <ul>
                <li class="text-gray-700 font-bold ">
                    <a href="/">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <span>About Us</span>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <span>Gallery</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--end nav-->
    <main class="px-16 py-6">
        <div class="flex justify-center md:justify-end">
            <a href="" class="text-indigo-500 font-semibold">Login</a>
            <a href="" class="ml-2 text-indigo-500 font-semibold">Sign Up</a>
        </div>
        <header>
            <h2 class="text-gray-700 text-2xl font-semibold ">Recipies</h2>
            <h3 class="text-gray-700 text-lg font-semibold">For Soman peche</h3>
        </header>
        <div>
            <!--section 1-->
            <h4 class="border-b border-gray-300 font-bold mt-12 pb-2">Latest Recipes</h4>
            <div class="mt-8 flex">
                <!--cards go here-->
                <div class="bg-white rounded overflow-hidden shadow-md">
                    <img class="md:w-60 sm:h-48 h-42 object-cover" src="{{asset('images/bannier/requin.jpg')}}" alt="">
                    <div class="p-2">
                        <span class=" text-gray-600 font-bold">5 Bean chilli strew</span>
                        <span class="text-gray-500 block text-sm"> chilli strew</span>
                    </div>
                </div>
            </div>
            <!--section 2-->
            <h4 class="border-b border-gray-300 font-bold mt-12 pb-2">Most Popular</h4>
            <div class="mt-8">
                <!--cards go here-->
            </div>
            <div class="flex justify-center">
                <div class="bg-indigo-500 p-2 text-center rounded-full text-gray-200">Load More</div>
            </div>
        </div>
    </main>
</div>
@endsection
