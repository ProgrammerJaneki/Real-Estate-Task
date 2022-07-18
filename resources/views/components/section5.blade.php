<div class="bg-[#EEEDDE] w-full">
    <div class="flex flex-col text-[#203239] md:flex-row md:justify-between px-[30px] md:px-[100px] py-12">
        <!-- First Col -->
        <div class="flex flex-col ml-[80px] md:ml-0 ">
            <span class="font-semibold text-4xl">Hubungi Kami</span>
            <!-- 2 Box -->
            <div class="flex flex-col sm:flex-row gap-[2rem]  sm:flex-wrap  ">
                <!-- Box 1 -->
                <div class="border-2 border-[#FF7527]/50 rounded-[10px] px-6 max-w-[243px] py-6 mt-6 md:mt-[63px]">
                    <div class="flex justify-between items-center ">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42a18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        <div class="flex flex-col">
                            <span>Call</span>
                            <span>+6281232936733</span>
                        </div>
                    </div>
                    <button class="bg-[#FF7527]/20 rounded-[10px] max-w-[195px] py-[13px] px-[62px]">
                        <span class="font-semibold text-[#FF7527] whitespace-nowrap">Call Now</span>
                    </button>
                </div>
                <!-- Box 2 -->
                <div class="border-2 border-[#FF7527]/50 rounded-[10px] px-6 max-w-[243px]   py-6 mt-6 md:mt-[63px]">
                    <div class="flex justify-between items-center ">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42a18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        <div class="flex flex-col">
                            <span>email</span>
                            <span>+6281232936733</span>
                        </div>
                    </div>
                    <button class="bg-[#FF7527] rounded-[10px] max-w-[195px] py-[13px] px-[62px]">
                        <span class="font-semibold text-[#FFFF] whitespace-nowrap">Enroll Now</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Second Col -->
        <div class=" mt-[30px] md:mt-0">
            <span class="font-semibold text-4xl ml-[80px] md:ml-0">Pengharagaan</span>
            <div class="flex items-center mt-4">
                <img class="max-w-[156px] max-h-[104px]" src="{{ asset('images/indonesia.png') }}" alt="img">
                <img class="max-w-[212px] max-h-[152px]" src="{{ asset('images/international.png') }}" alt="img">
            </div>
        </div>
    </div>
    @include('components.footer')
</div>