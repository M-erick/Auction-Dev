@extends('layouts.app')
@section('content')
    <!-- component -->
    <div class="bg-gray-50 min-h-screen pb-3  mt-1">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-3 gap-x-6 ">

            <div class="container bg-white  w-full border-b  border-t-2 border-gray-300 ">


                {{-- <img src="images/dollars.webp" alt="" class=" w-full"> --}}
                <div class="p-6">
                        <x-buy-form/>
                </div>
            </div>
            {{-- card two --}}

            <div class="container w-full   bg-white border-t border-b border-gray-300 ">
                {{-- <img src="images/dollars.webp" alt="" class=" w-full"> --}}
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        DIsplay currently bought shares,bought shares history in table Form.</h1>
                    <p class="text-gray-700 my-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                    <p class="text-gray-700 my-2 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        deserunt, culpa mollitia quisquam minus
                        vel architecto pariatur maiores eligendi aperiam nobis numquam consequuntur sint modi, eaque
                        adipisci animi distinctio iusto.</p>
                </div>
            </div>

            <div class="container   bg-white w-full   border-t border-b border-gray-300 ">
                {{-- <img src="images/dollars.webp" alt="" class=" w-full"> --}}
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>


                </div>
            </div>

        </div>
    </div>

@endsection
