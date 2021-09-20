@extends('layouts.app')
@section('content')
    <!-- component -->
    <div class="color min-h-screen py-32 px-10 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">

            <div class="container max-w-screen-2xl shadow-lg rounded-lg  hover:shadow-2xl transition duration-300">
                <img src="images/dollar02.jpg" alt="" class="rounded-t-lg w-full">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 hover-text-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                </div>
            </div>
            {{-- card two --}}

            <div class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">

                {{-- <img src="https://images.unsplash.com/photo-1572431447238-425af66a273b" alt="" class="rounded-t-lg w-full"> --}}

                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 hover-text-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                </div>
            </div>

            <div class="container max-w-screen-2xl shadow-lg rounded-lg  hover:shadow-2xl transition duration-300">
                <img src="images/dollars.webp" alt="" class="rounded-t-lg w-full">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 hover-text-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                </div>
            </div>

            {{-- last card --}}

            <div class="container max-w-screen-2xl shadow-lg rounded-lg  hover:shadow-2xl transition duration-300">
                <img src="images/money.jpg" alt="" class="rounded-t-lg w-full">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 hover-text-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                </div>
            </div>

            {{-- <div class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1505881502353-a1986add3762" alt="" class="rounded-t-lg w-full">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 hover-text-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                </div>
            </div>

            <div class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1544473244-f6895e69ad8b" alt="" class="rounded-t-lg w-full">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 hover-text-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                </div>
            </div> --}}

        </div>
    </div>

@endsection
