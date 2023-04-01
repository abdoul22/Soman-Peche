@extends('layouts.style')

@include('layouts.header')
@section('content')
<div style="background-image: url('{{ asset('images/bannier/requin.jpg') }}');"
    class="bg-cover bg-center h-96 bg-neutral-50 py-20 px-6 text-center text-neutral-800 dark:bg-neutral-700 dark:text-neutral-200">
    <h1 class="mb-6 text-5xl font-bold text-indigo-100">Soman Pêche</h1>
    <h3 class="mb-8 text-3xl font-bold">the ocean at your fingertips</h3>
    <a class="inline-block rounded bg-primary border-solid border-2 border-sky-500 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
        data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">More Info..</a>
</div>
<section class="p-8">
    <h1 class="font-black text-2xl mb-8 text-indigo-700 ">Welcome to Soman Pêche</h1>
    <h4 class="leading-8 font-semibold">Your destination for fresh and flavorful fish. We are a company specialized in
        the sale of
        high-quality fish from different regions of the world to offer our customers a unique and varied culinary
        experience.
        Our selection of fish includes a wide range of species, from white fish to salmon, tuna, and much more. All our
        products
        are carefully selected to ensure their freshness and quality, and are available in different formats to meet all
        your
        culinary needs.

        At Soman, we are proud of our commitment to sustainability and environmental responsibility. We work closely
        with local
        and international suppliers who share our values and who adhere to the strictest standards of sustainable
        fishing. We
        are also aware of the importance of product traceability, which is why we rigorously monitor all stages of our
        supply
        chain to ensure the quality and safety of our fish.

        Our team of passionate and experienced professionals is always ready to advise you and answer any questions you
        may
        have. We are committed to providing our customers with an exceptional service experience, from choosing your
        products to
        delivering them to your door. Trust Soman to provide you with high-quality, fresh, and flavorful fish for
        unforgettable
        meals.</h4>
</section>
<section class="p-8">
    <h4 class="leading-8 font-semibold">Our commitment to quality and freshness sets us apart from other fish sellers.
        We believe that the best-tasting fish
        comes from the freshest catch, which is why we work hard to ensure that our products are always fresh and of the
        highest
        quality. Whether you're a professional chef or a home cook, we have the perfect fish for you.

        We understand that buying fish can sometimes be confusing, which is why we offer a range of helpful resources to
        guide
        you through the selection process. Our website features detailed information about our products, including their
        origin,
        taste, and texture. We also provide recipes and cooking tips to help you make the most of your purchase.

        At Soman, we believe that everyone should have access to high-quality, sustainable fish. That's why we offer
        competitive
        pricing and a range of affordable options to suit all budgets. We also offer fast and reliable shipping to
        ensure that
        your fish arrives at your door as quickly as possible.

        We take great pride in our customer service, and we're always here to help you with any questions or concerns
        you may
        have. Our knowledgeable team is available by phone or email to assist you with everything from placing an order
        to
        choosing the perfect fish for your next meal.

        In short, Soman is your one-stop-shop for all your fish needs. From the freshest catch to expert advice, we have
        everything you need to create delicious, sustainable meals that you can feel good about.</h4>
    <br>
</section>
@endsection
