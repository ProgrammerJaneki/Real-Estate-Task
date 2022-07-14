<style>
    .logo, .logo span {
        font-family: 'Roboto', sans-serif;
        /* font-family: 'Poppins', sans-serif; */
    }
    .sec-logo {
        font-family: 'Poppins', sans-serif;
    }
</style>

<section class="bg-[#EEEDDE] max-w-[1366px] max-h-[830px] h-[830px]">
    <header class="flex items-center justify-between ml-[100px] mr-[100px] ">
        <div class="max-w-[72px] max-h-[42] mt-[50px] ">
            <div class="logo flex">
                <img class="w-[36px] h-[36px]" src="{{ asset('images/zero.png') }}" alt="">
                <span class="font-semibold mt-[8px] text-[24px] text-[#203239]">mah</span>
            </div>
        </div>
        <div class="mt-[63px] ">
            <ul class="text-[16px] font-light text-[#203239] ">
                <li class="inline-block font-semibold  mr-[100px]  border-[#F6762E]"><a href="">Home</a>
                    <div class="bg-[#F6762E] w-[20px] h-[0.15rem] ml-3 "></div>
                </li>
                <li class="inline-block mr-[100px]"><a href="">About</a></li>
                <li class="inline-block mr-[100px]"><a href="" class="pr-[4px]">Properties</a>
                    <span><i class="fa-solid fa-angle-down"></i></span>
                </li>
                <li class="inline-block "><a href="">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- Frame 1 Body -->
    <div class="flex ml-[100px] mr-[100px] mt-[100px] ">
        <!-- Left Part Body -->
        <div class="">
            <!-- Row 1 -->
            <div class="font-semibold max-w-[777px] max-h-[168px] text-[56px]">
                <span>Temukan Hunian Keluarga Sesuai Keinginanmu</span>
            </div>
            <!-- Row 2 -->
            <div class="max-w-[544px] max-h-[60px] mt-[24px] font-light text-[#203239]/50 text-left text-[16px]">
                <span>Menyediakan hunian bagi keluarga anda dengan varian pilihan dan lokasi
                    yang strategis di kota anda dengan cara yang lebih mudah.</span>
            </div>
            <!-- Row 3 -->
            <div class="bg-white flex justify-between items-center mt-[56px] pt-[10px] pb-[10px]
                rounded-[15px] pr-[14px] pl-[20px] max-w-[675px] max-h-[70px] ">
                <div class="search text-[16px] ">
                    <i class="fa-solid fa-location-dot text-[#203239] mr-[12px] "></i>
                    <span class="font-light text-[#203239]/50">Search location, properties, residental group</span>
                </div>
                <button class="bg-[#203239] text-white max-w-[140px] max-h-[50px] pt-[13px] pb-[13px] pl-[41px] pr-[41px]
                    rounded-[10px] ">
                    <span class="font-semibold text-[16px]">Search</span>
                </button>
            </div>
            <!-- Row 4 -->
            <div class="grid grid-cols-3 gap-[72px] max-w-[590px] max-h-[144px] mt-[56px]">
                <!-- Col 1 -->
                <div class="max-w-[149px] ">
                    <div class="font-semibold text-[#203239] p-0 whitespace-nowrap">
                        <span class="text-[56px] text-[#203239]">200</span>
                        <span class="text-[56px] text-[#FF7527]">+</span>
                    </div>
                    <span class="font-light font-[16px] text-[#203239]/50">Residental grup telah bergabung</span>
                </div>
                <div class="max-w-[148px]">
                    <div class="flex  font-semibold text-[#203239] text-[56px] whitespace-nowrap">
                        <span class="">10</span>
                        <span class="text-[#FF7527] mt-[2.7rem] text-[16px]">Tahun</span>
                    </div>
                    <span class="font-light font-[16px] text-[#203239]/50">Sudah berpengalaman</span>
                </div>
                <div class="max-w-[149px]">
                    <div class="font-semibold text-[#203239] p-0 whitespace-nowrap">
                        <span class="text-[56px] text-[#203239]">900</span>
                        <span class="text-[56px] text-[#FF7527]">+</span>
                    </div>
                    <span class="font-light font-[16px] text-[#203239]/50">Properti tersedia di berbagai Kota</span>
                </div>
            </div>
        </div>
        <!-- Right Part Body -->
        <div class="max-w-[402p1] max-h-[522.5px]">
            <img src=" {{ asset('images/house.png') }}" alt="">
        </div>
    </div>
</section>
