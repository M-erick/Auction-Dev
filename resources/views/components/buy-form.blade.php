<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

<!-- component -->
<div class="container">
    <div class="mt-5">
        <div class="w-1/2 mx-auto bg-white rounded-md">
            <!-- first -->
            <div class="flex flex-col justify-center items-center">
                <h6 class="text-black font-medium my-4">BUY SHARES</h6>
                <form action="" method="POST">
                    @csrf
                    <div class="  flex  justify-between items-center  w-full  py-5  border-b-2 border-gray-200 ">

                        {{-- <p class="text-gray-400 ml-4">Days</p> --}}
                        <label for="" class="text-gray-400 ml-4  outline-none">Days:</label>
                        {{-- <p class="text-black mr-4">$2,650</p> --}}
                        <input type="text" class="text-black mr-4" name="days" placeholder="4 days">

                    </div>
                    <div class="  flex justify-between items-center  w-full  py-5  border-b-2 border-gray-200  ">


                        {{-- <p class="text-gray-400 ml-4">Shipping</p> --}}
                        <label for="" class="text-gray-400 ml-4 mr-2 outline-none">Amount:</label>
                        <input type="text" class="text-black mr-4" name="days" placeholder="1200">


                        {{-- <p class="text-black mr-4">$15</p> --}}
                    </div>
                    <div class="   flex justify-between items-center   w-full py-5 border-b-2 border-gray-200 ">



                        <label for="" class="text-gray-400 ml-4 mr-2 outline-none">Amount:</label>
                        <input type="text" class="text-black mr-4" name="days" placeholder="1200">

                    </div>


                    <div class="  flex flex-col  justify-between items-center  px-3 py-5 w-full    ">


                        <button class="w-full bg-indigo-600 text-white px-2 py-2 rounded-md">
                            Bid
                        </button>

                    </div>

                    <div class="px-3 py-5 border-b-2 border-gray-200">
                        <button class=" min-w-full bg-gray-400 font-semibold  text-white px-2  py-2 rounded-md  ">
                           Abort
                        </button>

                    </div>
                </form>
            </div>
            <!-- end -->
        </div>
    </div>
</div>
