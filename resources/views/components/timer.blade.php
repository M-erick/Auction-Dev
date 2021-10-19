<!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->

<div class="flex flex-col items-center m-0">
    <div class="p-3 flex flex-wrap items-center justify-center">
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
        <button value="bid"
            class="border rounded-lg border-gray-200 shadow-lg p-3 mb-3  hover:shadow-2xl outline-none">timer</button>
        <button value="end"
            class="border rounded-lg border-gray-200 shadow-lg p-3 mb-3  hover:shadow-2xl outline-none">bid</button>



    </div>

</div>


<script>
    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minsEl = document.getElementById('mins');
    const secondsEl = document.getElementById('seconds');

    const newYears = "25 Dec 2021";

    function countdown() {
        const newYearDate = new Date(newYears);
        const currentDate = new Date();

        const totalSeconds = (newYearDate - currentDate) / 1000;

        const days = Math.floor(totalSeconds / 3600 / 24);
        const hours = Math.floor(totalSeconds / 3600) % 24;
        const minutes = Math.floor(totalSeconds / 60) % 60;
        const seconds = Math.floor(totalSeconds) % 60;


        minsEl.innerHTML = formatTime(minutes);
        hoursEl.innerHTML = formatTime(hours);
        daysEl.innerHTML = days;
        secondsEl.innerHTML = formatTime(seconds);
        // console.log(newYearDate - currentDate);
    }

    function formatTime(time) {
        return time < 10 ? (`0${time}`) : time;

    }
    countdown();
    setInterval(countdown, 1000);
</script>
