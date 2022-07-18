<!-- Main Container -->
<div class="bg-[#EEEDDE] w-full z-50 shadow">
    <!-- Header Container -->
    <nav x-data="{ open: false }" class="max-w-[1366px] px-[30px] md:px-[100px] transition-all ease-in-out duration-500 md:flex md:justify-between md:items-center">
        <!-- Left -->
        <div class="flex justify-between items-center">
            <!-- Logo  -->
            <div class="flex mt-4 md:mt-[57px] transition-all ease-in-out duration-500">
                <img class="max-w-[72px] max-h-[42px] " src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <!-- Mobile Menu Button -->
            <div class="flex md:hidden">
                <button type="button" aria-label="toggle menu" @click='open = !open'
                class="text-[#203239] hover:text-orange-400 mt-4 md:mt-[63px] cursor-pointer text-2xl focus:outline-none focus:text-orange-400 transition-all ease-in-out duration-300">
                    <i class="fa-solid fa-bars "></i>
                </button>
            </div>
        </div>
        <!-- Right -->
        <!-- Menu, if mobile set to hidden -->
        <div :class="{'flex': open, 'hidden': !open}" class="hidden relative  md:flex items-center max-w-[1366px]  text-[#203239]/50 font-semibold md:text-[#203239]">
            <ul class="md:flex flex-col  absolute p-4 rounded-lg md:rounded-none md:p-0 mt-[10rem] md:mt-[63px] transition-all ease-in-out duration-500 bg-[#FFFFFF] md:bg-[#EEEDDE] right-0   md:flex-row xl:ml-[100px] ">
                <li class="group mb-2 md:mb-0 md:ml-[20px] lg:ml-[100px]  hover:text-[#FF7527] ">
                    <a href="">Home</a>
                </li>
                <li class="group mb-2 md:mb-0  md:ml-[60px] lg:ml-[100px] hover:text-[#FF7527] ">
                    <a href="">About</a>
                </li>
                <li x-data="{isOpen: false" class="group relative mb-2 md:mb-0 cursor-pointer whitespace-nowrap  md:ml-[60px] lg:ml-[100px] hover:text-[#FF7527] ">
                    <a @click='isOpen = !isOpen' href="">Properties</a>
                    <i class="fa-solid fa-angle-down cursor-pointer md:ml-[11px]"></i>
                    <div :class="" class="hidden border-green-400 rounded-md border-4 p-1 text-center mt-2">Hey</div>
                </li>
                <li class="group0 md:ml-[60px] lg:ml-[100px] hover:text-[#FF7527] ">
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    @include('livewire.home.section1')
</div>

