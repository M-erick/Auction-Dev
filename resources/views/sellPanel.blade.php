@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="bg-gray-50 min-h-screen pb-3  mt-28 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 md:m-2 md:gap-x-10 xl-grid-cols-4 gap-y-3 gap-x-6 ">

            <div class="container bg-white  w-full border-b border-gray-300 ">
                {{-- <img src="images/dollars.webp" alt="" class=" w-full"> --}}
                <div class="p-6">
                    {{-- Display if share is succcessful --}}
                    @foreach ($timer as $data)
                    @if ($data->name == auth()->user()->name)



                    <p>Days :{{ ucwords($data->name) }}</p>
                    <p>Days :{{ date('jS M Y', strtotime($data->created_at)) }}</p>


                    <p>Days :{{ $data->days }}</p>



                    <p>Amount placed :{{ $data->amount }}</p>
                    {{-- <p>Date  placed :{{ $temp[0] }}</p>
                    <p>Date  placed :{{ $temp[1] }}</p> --}}



                    {{-- <p>Amount  placed :{{ $data->created_at }}</p> --}}


                @endif

                    @endforeach
                    {{-- <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                    <p class="text-gray-700 my-2 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        deserunt, culpa mollitia quisquam minus
                        vel architecto pariatur maiores eligendi aperiam nobis numquam consequuntur sint modi, eaque
                        adipisci animi distinctio iusto.</p> --}}
                </div>
            </div>
            {{-- card two --}}

            <div class="container w-full   bg-white border-t border-b border-gray-300 ">
                {{-- <img src="images/dollars.webp" alt="" class=" w-full"> --}}
                <div class="p-6">
                    <div class="flex flex-col items-center m-0">
                        <div class="p-3 flex flex-wrap items-center justify-center">

                            {{-- days should vary --}}

                            <div class="items-center m-2 ">
                                <p class="bold leading-4 text-7xl mx-1 my-5" id="days">0</p>
                                <span class="text-2xl  text-center">days</span>


                            </div>
                            <div class="items-center m-2 ">
                                <p class="bold leading-4 text-7xl mx-1 my-5" id="hours">0</p>
                                <span class="text-2xl"> hours</span>
                            </div>

                            <div class="items-center m-2 ">
                                <p class="bold leading-4 text-7xl mx-1 my-5" id="mins">0</p>
                                <span class="text-2xl"> mins</span>


                            </div>
                            <div class="items-center m-2 ">
                                <p class="bold leading-4 text-7xl mx-1 my-5" id="seconds">0</p>
                                <span class="text-2xl "> seconds</span>


                            </div>


                        </div>
                        <div>

                            <button onclick="window.location ='{{ route('sell') }}'"
                                class="p-2 pl-5 pr-5 transition-colors duration-700 transform bg-indigo-500 hover:bg-blue-400 text-gray-100 text-lg rounded-lg fouce:border-4  border-indigo-300  hidden"
                                id="bid">Bid</button>

                        </div>

                    </div>


                </div>
            </div>

            <div class="container   bg-white min-h-full w-full   border-t border-b border-gray-300 ">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        This is Amazing for people to visit.</h1>
                    <p class="text-gray-700 my-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                    <p class="text-gray-700 my-2 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        deserunt, culpa mollitia quisquam minus
                        vel architecto pariatur maiores eligendi aperiam nobis numquam consequuntur sint modi, eaque
                        adipisci animi distinctio iusto.</p>
                </div>
            </div>
            {{-- last card --}}
            <div class="container   min-h-full w-full   bg-white border-t border-b border-gray-300 ">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        DIsplay currently bought shares</h1>
                    <p class="text-gray-700 my-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                    <p class="text-gray-700 my-2 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        deserunt, culpa mollitia quisquam minus
                        vel architecto pariatur maiores eligendi aperiam nobis numquam consequuntur sint modi, eaque
                        adipisci animi distinctio iusto.</p>
                </div>
            </div>

        </div>


    </div>

    <script>
        //const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minsEl = document.getElementById('mins');
        const secondsEl = document.getElementById('seconds');
        const bidBtn = document.getElementById('bid');

        function countdown() {
            const currentDate = new Date();

            const currentHours = currentDate.getHours();
            const currentMinute = currentDate.getMinutes();
            const currentSeconds = currentDate.getSeconds();

            let start = new Date();
            //timer to be
            // 9Am 1pm 7pm


            //Create a logic to loop through  9hrs

            if (currentHours >= 21 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(24, 0, 0); //12mn
            } else if (currentHours >= 18 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(21, 0, 0); //9pm
            } else if (currentHours >= 15 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(18, 0, 0); //6pm
            } else if (currentHours >= 12 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(15, 0, 0); //3pm
            } else if (currentHours >= 9 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(12, 0, 0); //12nn
            } else if (currentHours >= 6 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(9, 0, 0); //9am
            } else if (currentHours >= 3 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(6, 0, 0); //6am
            } else if (currentHours >= 0 && currentMinute > 0 && currentSeconds > 0) {
                start.setHours(3, 0, 0); //3am
            }

            let now = new Date();
            let remain = ((start - now) / 1000);
            let hh = Math.floor((remain / 60 / 60) % 60);
            let mm = Math.floor((remain / 60) % 60);
            let ss = Math.floor(remain % 60);

            minsEl.innerHTML = formatTime(mm);
            hoursEl.innerHTML = formatTime(hh);
            secondsEl.innerHTML = formatTime(ss);


            //toggle bewteen displaying the button when timer reaches  0 0 0
            if (hh == 0 && mm == 0 && ss == 0) {
                //     if (bidBtn.style.display === "none") {
                //     bidBtn.style.display = "block";


                // } else {
                //     bidBtn.style.display = "none";

                // }
                start.setHours(start.getHours() + 3);
            }
            // bidBtn.addEventListener

            //display button if timer  is set


        }

        function formatTime(time) {
            return time < 10 ? (`0${time}`) : time;

        }
        countdown();
        setInterval(countdown, 1000);
    </script>


@endsection
