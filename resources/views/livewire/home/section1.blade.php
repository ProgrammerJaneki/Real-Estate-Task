<div class="bg-[#EEEDDE] w-full shadow">
    <div class="md:flex pb-8  md:pb-[100px] text-[16px] text-[#203239] max-w-[1366px] px-[30px]  md:px-[100px]">
        <!-- Split into 2 cols -->
        <!-- Left Col -->
        <div class="bg-transparent z-50">
            <!-- First Row -->
            <div class="z-50">
                <!-- Will show once the same picture from medium screen above is hidden -->
                <div class="flex justify-center lg:hidden">
                    <img src="{{ asset('images/house.png') }}" alt="img" class="mt-4 w-full max-h-[300px] ">
                </div>
                <div class="font-semibold text-3xl lg:text-[50px] xl:text-[56px] mt-[100px] lg:mt-[100px] max-w-[477px] lg:max-w-[777px] max-h-[168px] transition-all ease-in-out duration-500">
                    <span class="leading-none lg:leading-normal whitespace-nowrap ">Temukan Hunian Keluarga <br>  Sesuai Keinginanmu</span>
                </div>
                <div class="font-light text-xs lg:text-[1rem] text-[#203239]/50 mt-[24px]  max-w-[556px]  max-h-[60px] transition-all ease-in-out duration-500">
                    <span class="leading-[1.85rem]">Menyediakan hunian bagi keluarga anda dengan varian pilihan dan <br> lokasi yang strategis di kota anda dengan cara yang lebih mudah.</span>
                </div>

            </div>
            <!-- Search Box -->
            <div class="bg-white rounded-[15px] px-[24px] md:pr-3 mt-[56px] md:mr-auto lg:w-[600px] xl:w-[675px] max-w-none md:max-w-none ">
                <div class="search grid grid-rows-2 grid-col-1 md:flex md:justify-between  items-center py-[10px] transiition ease-in-out duration-500">
                    <div class="flex items-center">
                        <img src="{{ asset('images/location.png') }}" alt="img" class="row-start-1 col-start-1">
                        <input type="text" placeholder="Search location, properties, residential group"
                            class="w-[361px]  ml-[12px] border-none resize-none outline-none row-start-1 col-start-1
                                transition-all ease-in-out duration-500">
                    </div>
                    <button class="bg-[#203239] hover:bg-[#203239]/90 rounded-[10px] py-[13px] px-[41px] mt-2 md:mt-0 w-full md:max-w-[140px]
                                transition ease-in-out duration-500 shadow-2xl">
                        <span class="font-semibold text-white">Search</span>
                    </button>
                </div>
            </div>
            <!-- Third Row -->
            <div class="grid grid-cols-3 gap-[60px] md:gap-[75px] mt-[3.5rem] max-w-[590px] max-h-[144px]">
                <!-- Div 1 -->
                <div class="max-w-[149px]">
                    <!-- First Row -->
                    <div class="font-semibold text-[#203239] p-0 whitespace-nowrap">
                        <span class="text-[2.5rem] md:text-[3.5rem] text-[#203239]">200</span>
                        <span class="text-[2.5rem] md:text-[3.5rem] text-[#FF7527]">+</span>
                    </div>
                    <!-- Second Row -->
                    <span class="text-[0.7rem] md:text-[1rem] text-[#203239]/50 leading-7">Residential grup <br> telah bergabung</span>
                </div>
                <!-- Div 2 -->
                <div class="max-w-[149px]">
                    <!-- First Row -->
                    <div class="font-semibold text-[#203239] p-0 whitespace-nowrap">
                        <span class="text-[2.5rem] md:text-[3.5rem] text-[#203239]">10</span>
                        <span class="text-[0.8rem] md:text-[1rem] text-[#FF7527]">Tahun</span>
                    </div>
                    <!-- Second Row -->
                    <span class="text-[0.7rem] md:text-[1rem] text-[#203239]/50 leading-7">Sudah <br> berpengalaman</span>

                </div>
                <!-- Div 3 -->
                <div class="max-w-[149px]">
                    <!-- First Row -->
                    <div class="font-semibold text-[#203239] p-0 whitespace-nowrap">
                        <span class="text-[2.5rem] md:text-[3.5rem] text-[#203239]">999</span>
                        <span class="text-[2.5rem] md:text-[3.5rem] text-[#FF7527]">+</span>
                    </div>
                    <!-- Second Row -->
                    <span class="text-[0.7rem] md:text-[1rem] text-[#203239]/50 leading-7">Properti tersedia <br> di berbagai Kota</span>

                </div>
            </div>
        </div>
        <!-- Right Col -->
        <div class="hidden lg:flex ml-auto max-w-[401px] md:mt-[39px]">
            <img src="{{ asset('images/house.png') }}" alt="img" class="max-w-[401px] ">
        </div>
    </div>

    <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class=" w-[100px] h-[100px]" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M12 2a8 8 0 0 0-8 8c0 1.892.402 3.13 1.5 4.5L12 22l6.5-7.5c1.098-1.37 1.5-2.608 1.5-4.5a8 8 0 0 0-8-8Z"/></g></svg> -->

</div>
