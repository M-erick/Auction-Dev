@extends('layouts.app')
@push('scripts')
    <script src="{{ asset('chart.js/chart.js') }}"></script>


<script src="{{  asset('js/chart_demo.js') }}" defer></script>

@endpush
@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10 mt-10">
        <div class="w-full >

        @if (session('status'))
            <div class=" text-sm border border-t-8 rounded
            text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <section class="flex flex-col  break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm ">

            {{-- <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
                {{-- include the navbar containing the buy sell hyperlinks --}}
            {{-- </header> --}}

            <div class="color min-h-screen pt-20 pb-5 px-1 ">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 lg:m-2 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6  ">

                    <div class="container max-w-screen-2xl shadow-lg rounded-lg  hover:shadow-2xl transition duration-300">
                        {{-- <img src="images/dollar02.jpg" alt="" class="rounded-t-lg w-full"> --}}
                        <canvas id="myChart" width="550" height="250" ></canvas>
                        <div class="p-6">
                            <h1
                                class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                               Market Trend Statistics.</h1>

                        </div>
                    </div>

                    {{-- card two --}}
                    {{-- add timer details --}}

                    <div
                        class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300  mb-5">

                       <x-timer/>


                    </div>
                </div>


                {{-- last card --}}

                <div class="container max-w-screen-2xl shadow-lg rounded-lg  hover:shadow-2xl transition duration-300 mb-5">
                    {{-- <img src="images/money.jpg" alt="" class="rounded-t-lg w-full"> --}}
                    <div class="p-6">
                        <h1
                            class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  text-center font-bold text-gray-900 ">Available Shares</h1>
                           {{-- @forelse ($shares) --}}
                           {{--  // displays the total amount of shares available .implemented in home controller --}}
                           @if ($shares)
                           <p class="text-gray-700 my-2 hover-text-900 ">Available Shares {{ $shares}}ksh</p>
                           @else
                           <p class="text-gray-700 my-2 hover-text-900 ">No Shares Currently</p>

                           @endif



                           {{-- @empty --}}

                           {{-- @endforelse --}}
                        {{-- <p class="text-gray-700 my-2 hover-text-900 ">Notification Panel .<br/> --}}
                        Admin panel</p>
                    </div>
                </div>
                <div class="container max-w-screen-2xl shadow-lg rounded-lg  hover:shadow-2xl transition duration-300">
                    {{-- <img src="images/money.jpg" alt="" class="rounded-t-lg w-full"> --}}
                    <div class="p-6">
                        <h1
                            class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                            News/Admin Panel.</h1>
                        <p class="text-gray-700 my-2 hover-text-900 ">Notification Panel .<br/>
                        Admin panel</p>
                    </div>
                </div>

            </div>
            </div>


        </section>
        </div>
    </main>
@endsection







