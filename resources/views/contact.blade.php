@extends('layouts.style')
@section('content')
<div>{{-- content wrapper --}}
    <div>
        <nav>
            <div>
                <h1><a href="/">Logo</a></h1>
            </div>
            <ul>
                <li>
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
    <main>
        <div>
            <a href="">Login</a>
            <a href="">Sign Up</a>
        </div>
        <header>
            <h2>Recipies</h2>
            <h3>For Soman peche</h3>
        </header>
        <div>
            <!--section 1-->
            <h4>Latest Recipes</h4>
            <div>
                <!--cards go here-->
                <div>
                    <img class="w-24 h-24" src="{{asset('images/bannier/requin.jpg')}}" alt="">
                    <div>
                        <span>5 Bean chilli strew</span>
                    </div>
                </div>
            </div>
            <!--section 2-->
            <h4>Latest Recipes</h4>
            <div>
                <!--cards go here-->
            </div>
            <div>
                <div>Load More</div>
            </div>
        </div>
    </main>
</div>
@endsection
