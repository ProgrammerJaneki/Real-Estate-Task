<div class="bg-white w-full">
    <div class="text-[#203239]px-6 md:px-[100px] py-10 md:py-[68px]">
        <div class="flex flex-col ">
            <div class="flex md:block justify-center w-full">
                <span class="text-[#FF7527] ">
                    Pilihan Auditor
                </span>
            </div>
            <div class="flex flex-col md:flex-row md:justify-between items-center">
                <span class="font-semibold text-4xl leading-normal ">Residen Berbagai Kota</span>
                <!-- Slider button -->
                <div class="flex">
                    <button class="flex items-center bg-[#D6D5C7]/30 rounded-[4px] py-[7.5px] px-[0.5rem]">
                        <svg class="w-[1rem] h-[1rem] text-[#FF7527]/50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><g fill="currentColor"><path
                            d="M6.732 10.64a1 1 0 1 1 1.536-1.28l5 6a1 1 0 1 1-1.536 1.28l-5-6Z"/><path d="M8.268 10.64a1 1 0 1 1-1.536-1.28l5-6a1 1 0 1 1 1.536 1.28l-5 6Z"/></g>
                        </svg>
                    </button>
                    <button class="flex items-center bg-[#FFFFFF] border-2 rounded-[4px] py-[7.5px] px-[9px] ml-2 md:ml-7">
                        <svg class="w-[1rem] h-[1rem] text-[#FF7527]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 608 1280"><g transform="translate(608 0) scale(-1 1)"><path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></g>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Box Container -->
        <div id="controls-carousel" data-carousel="static" class="flex relative flex-col lg:flex-row justify-center  gap-0 max-w-[1169px] md:gap-[49px] md:justify-start w-full">
            <!-- Box Card 1 -->
            <div class="flex flex-col max-w-[356px] mt-10 md:mt-16 ml-[60px] md:ml-0">
                <img class="max-w-[357px]" src="{{ asset('images/frame4-left.png') }}" alt="">
                <span class="font-medium text-2xl mt-4">Magnolia Surabaya</span>
                <span class="font-light leading-8 mt-2">
                    Jl. Gatot Subroto No.KM.6,8, RT.001/RW.008,
                    Jatake, Kec. Jatiuwung, Kota Tangerang,
                    Banten 15136
                </span>
            </div>
            <!-- Box Card 2 -->
            <div class="flex flex-col max-w-[356px] mt-10 md:mt-16 ml-[60px] md:ml-0">
                <img class="max-w-[357px]" src="{{ asset('images/frame4-left.png') }}" alt="">
                <span class="font-medium text-2xl mt-4">Pinang Residences</span>
                <span class="font-light leading-8 mt-2">
                    Jl. Deplu Raya No.16 RT.5, RW.003 Bintaro,
                    Pesanggrahan, Jakarta Selatan 12330
                </span>
            </div>
            <!-- Box Card 3 -->
            <div class="flex flex-col max-w-[356px] mt-10 md:mt-16 ml-[60px] md:ml-0">
                <img class="max-w-[357px]" src="{{ asset('images/frame4-left.png') }}" alt="">
                <span class="font-medium text-2xl mt-4">South Grove</span>
                <span class="font-light leading-8 mt-2">
                    1 No.1, RT.1/RW.1, Lb. Bulus, Kec. Cilandak, Kota
                    Jakarta Selatan, Daerah Khusus Ibukota
                    Jakarta 12440
                </span>
            </div>
        </div>
    </div>

<div id="controls-carousel" class="relative hidden" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-[600px] rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <img src="{{ asset('images/house.png') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
            <img src="{{ asset('images/right.png') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="{{ asset('images/indonesia.png') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{ asset('images/modern.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{ asset('images/frame4-left.png') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-red-400 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-red-400 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
</div>