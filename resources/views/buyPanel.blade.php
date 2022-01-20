@extends('layouts.app')
@section('content')
    <!-- component -->
    <div class="bg-gray-50 min-h-screen pb-3   m-auto mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 md:m-2 md:gap-x-10 xl-grid-cols-4 gap-y-3 gap-x-6 ">

            <div class="container bg-white  w-full border-b  border-gray-300 ">
                {{-- bid success message --}}
                @if (session()->has('message'))
                    <div class="w-full m-auto mt-10 p-auto">
                        <p class="w-full mb-4 text-gray-50 bg-gray-500 rounded-2xl py-4">
                            {{ session()->get('message') }}

                        </p>

                    </div>

                @endif


                {{-- display error messages if any --}}
                @if ($errors->any())
                    <div class="w-4/5 self-center m-auto p-6">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="w-full mb-4 text-gray-50 bg-red-700 rounded-2xl  p-4">

                                    {{ $error }}
                                </li>

                            @endforeach
                        </ul>

                    </div>

                @endif

                <div class="p-6">


                    <x-buy-form />
                </div>

            </div>
            {{-- card two --}}

            <div class="container   bg-white w-full   border-t border-b border-gray-300 ">
                {{-- <img src="images/dollars.webp" alt="" class=" w-full"> --}}

                <div class="p-6">
                    {{-- pseoudocode .display currently
                        placed bid.Apply JS vuejs code to  computed properties --}}
                    {{-- <h1 class="md:text-1xl text-xl   font-bold text-gray-900 ">
                            currently bought shares history in table Form.</h1> --}}
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        currently bought shares history</h1><!-- ignore the concept of displaying the values in tabular form -->

                    @foreach ($usersData as $data)


                        @if ($data->name == auth()->user()->name)



                            {{-- <p>Days :{{ ucwords($data->name) }}</p> --}}
                            <p>Days :{{ date('jS M Y', strtotime($data->created_at)) }}</p>


                            <p>Days :{{ $data->days }}</p>



                            <p>Amount placed :{{ $data->amount }}</p>
                            {{-- <p>Date  placed :{{ $temp[0] }}</p>
                            <p>Date  placed :{{ $temp[1] }}</p> --}}



                            {{-- <p>Amount  placed :{{ $data->created_at }}</p> --}}


                        @endif


                    @endforeach






                </div>
            </div>

            <div class="container w-full   bg-white border-t border-b border-gray-300 ">
                {{-- <img src="images/dollars.webp" alt="" class=" w-full"> --}}
                <x-buysharestable/>
                {{-- <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        DIsplay currently plus history  bought shares in tabular form .Maximum inputs to be 10.Table should auto itself .</h1>
                    <p class="text-gray-700 my-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                    <p class="text-gray-700 my-2 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        deserunt, culpa mollitia quisquam minus
                        vel architecto pariatur maiores eligendi aperiam nobis numquam consequuntur sint modi, eaque
                        adipisci animi distinctio iusto.</p>
                </div> --}}
            </div>








        </div>
    </div>

@endsection
