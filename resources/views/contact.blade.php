@extends('layouts.style')
@section('content')
@include('layouts.header')
<!-- component -->
<div class="flex my-10 py-6 bg-gray-100">
    <div class="m-auto">
        <div>
            <button type="button"
                class="relative w-full flex justify-center items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-900  focus:outline-none   transition duration-300 transform active:scale-95 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                    viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <g>
                        <rect fill="none" height="24" width="24"></rect>
                    </g>
                    <g>
                        <g>
                            <path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"></path>
                        </g>
                    </g>
                </svg>
                <span class="pl-2 mx-1">Create new Relationship With Soman Peche</span>
            </button>
            <div class="mt-5 bg-white rounded-lg shadow">
                <div class="flex">
                    <div class="flex-1 py-5 pl-5 overflow-hidden">
                        <svg class="inline align-text-top" width="21" height="20.5" xmlns="http://www.w3.org/2000/svg"
                            fill="#000000">
                            <g>
                                <path d="m4.88889,2.07407l14.22222,0l0,20l-14.22222,0l0,-20z" fill="none" id="svg_1"
                                    stroke="null"></path>
                                <path
                                    d="m7.07935,0.05664c-3.87,0 -7,3.13 -7,7c0,5.25 7,13 7,13s7,-7.75 7,-13c0,-3.87 -3.13,-7 -7,-7zm-5,7c0,-2.76 2.24,-5 5,-5s5,2.24 5,5c0,2.88 -2.88,7.19 -5,9.88c-2.08,-2.67 -5,-7.03 -5,-9.88z"
                                    id="svg_2"></path>
                                <circle cx="7.04807" cy="6.97256" r="2.5" id="svg_3"></circle>
                            </g>
                        </svg>
                        <h1 class="inline text-2xl font-semibold leading-none">Your informations</h1>
                    </div>
                    <div class="flex-none pt-2.5 pr-2.5 pl-1"></div>
                </div>
                <div class="px-5 pb-5">
                    <input placeholder="Your Name"class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-100 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    <input placeholder="Your address@exemple.com" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-100 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    <div class="flex">
                        <div class="flex-grow w-1/4 pr-2"><input placeholder="Your Country"
                                class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-100 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                        <div class="flex-grow"><input placeholder="Your Whatsapp number"
                                class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-100 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                    </div>

                </div>
                <hr class="mt-4">
                <div class="flex flex-row-reverse p-3">
                    <div class="flex-initial pl-3">
                        <button type="button"
                            class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
                            <span class="pl-2 mx-1">Send</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 bg-white shadow cursor-pointer rounded-xl">
            <div class="flex">
                <div class="flex-1 py-5 pl-5 overflow-hidden">
                    <ul>
                        <li class="text-xs text-gray-600 uppercase ">Our Location</li>
                        <li>Mauritanie</li>
                        <li>Nouakchott 1478 EAST</li>
                        <li>Nouakchott 42485 </li>
                    </ul>
                </div>
                <div class="flex-1 py-5 pl-1 overflow-hidden">
                    <ul>
                        <li class="text-xs text-gray-600 uppercase">Our Contacts</li>
                        <li>Tel : +22249828498</li>
                        <li>Whatsapp : +22249828498</li>
                        <li>contact@somanepeche.com</li>
                    </ul>
                </div>
                <div class="flex-none pt-2.5 pr-2.5 pl-1">
                    <button type="button"
                        class="px-2 py-2 font-medium tracking-wide text-black capitalize transition duration-300 ease-in-out transform rounded-xl hover:bg-gray-300 focus:outline-none active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#000000">
                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                            <path d="M5 18.08V19h.92l9.06-9.06-.92-.92z" opacity=".3"></path>
                            <path
                                d="M20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83zM3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('layouts.footer')
@endsection
