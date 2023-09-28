<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BuukMeNow | Campaign</title>
      
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="bg-[#F3F4F6]">
        <nav class="h-[90px] w-[100vw] bg-[white] p-[10px] flex justify-center items-center">
            {{-- Logo goes here --}}
            <section class="logo mx-[110.68px]">
                <img class="h-[24px]" src="../media/buukmenowlogo.png" alt="buukmenow logo">
            </section>

            {{-- Nav items go here --}}
            <ul class="flex justify-around h-[36px] w-[482px] mr-[100.68px] ">
                <li class="w-[120px] mr-[30px] flex items-center text-[#808785] ">
                    <a href="#" class="w-[140px] h-[36px] flex items-center px-[12px] py-[8px] justify-center text-[#808785] hover:bg-[#F3F4F6] hover:text-[#00100B] rounded-3xl focus:bg-[#F3F4F6] focus:text-[#00100B] ">
                    <svg class="mr-[8px] " xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M10.6619 15V12.5" stroke="#808885" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.05359 2.35001L3.27859 6.97501C2.62859 7.49167 2.21192 8.58334 2.35359 9.40001L3.46192 16.0333C3.66192 17.2167 4.79526 18.175 5.99526 18.175H15.3286C16.5203 18.175 17.6619 17.2083 17.8619 16.0333L18.9703 9.40001C19.1036 8.58334 18.6869 7.49167 18.0453 6.97501L12.2703 2.35834C11.3786 1.64167 9.93692 1.64167 9.05359 2.35001Z" stroke="#808885" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Dashboard
                </a>
                </li>
                <li class="w-[120px] h-[36px] px-[12px] mr-[30px] flex items-center text-[#808785]  ">
                    <a href="#" class="w-[140px] h-[36px] flex items-center px-[12px] py-[8px] justify-center text-[#808785] hover:bg-[#F3F4F6] hover:text-[#00100B] rounded-3xl focus:bg-[#F3F4F6] focus:text-[#00100B]">
                    <svg class="mr-[8px]   "  xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M7.32849 1.66666V4.16666" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.9952 1.66666V4.16666" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.57849 7.57501H17.7452" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.1619 7.08332V14.1667C18.1619 16.6667 16.9119 18.3333 13.9952 18.3333H7.32853C4.41187 18.3333 3.16187 16.6667 3.16187 14.1667V7.08332C3.16187 4.58332 4.41187 2.91666 7.32853 2.91666H13.9952C16.9119 2.91666 18.1619 4.58332 18.1619 7.08332Z" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.7408 11.4167H13.7483" stroke="#808885" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.7408 13.9167H13.7483" stroke="#808885" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.6581 11.4167H10.6655" stroke="#808885" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.6581 13.9167H10.6655" stroke="#808885" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.57383 11.4167H7.58132" stroke="#808885" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.57383 13.9167H7.58132" stroke="#808885" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Bookings
                </a>
                </li>

                <li class="w-[140px] mr-[3px] text-[#808785]  ">
                    <a href="#" class="w-[140px] h-[36px] flex items-center px-[12px] py-[8px] justify-center text-[#808785] bg-[#F3F4F6] text-[#00100B] hover:bg-[#F3F4F6] hover:text-[#00100B] rounded-3xl focus:bg-[#F3F4F6] focus:text-[#00100B] ">
                    <svg class="mr-[8px]" xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M15.5682 9.0806C16.7307 8.91726 17.6257 7.9206 17.6282 6.7131C17.6282 5.5231 16.7607 4.53643 15.6232 4.34976" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.1023 11.8753C18.2281 12.0436 19.014 12.4378 19.014 13.2503C19.014 13.8094 18.644 14.1728 18.0456 14.4011" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5674 12.2198C7.88906 12.2198 5.60156 12.6257 5.60156 14.2465C5.60156 15.8665 7.8749 16.284 10.5674 16.284C13.2457 16.284 15.5324 15.8823 15.5324 14.2607C15.5324 12.639 13.2599 12.2198 10.5674 12.2198Z" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5674 9.9066C12.3249 9.9066 13.7499 8.48243 13.7499 6.7241C13.7499 4.9666 12.3249 3.5416 10.5674 3.5416C8.80991 3.5416 7.38491 4.9666 7.38491 6.7241C7.37824 8.47576 8.79241 9.90076 10.5441 9.9066H10.5674Z" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.56586 9.0806C4.40253 8.91726 3.50836 7.9206 3.50586 6.7131C3.50586 5.5231 4.37336 4.53643 5.51086 4.34976" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.03178 11.8753C2.90595 12.0436 2.12012 12.4378 2.12012 13.2503C2.12012 13.8094 2.49012 14.1728 3.08845 14.4011" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Customers
                    </a>
                </li>

                <li class="w-[140px] mr-[36px] text-[#808785]">
                    <a href="#" class="w-[140px] h-[36px] flex items-center px-[12px] py-[8px] justify-center text-[#808785] hover:bg-[#F3F4F6] hover:text-[#00100B] rounded-3xl ">
                    <svg class="mr-[8px]"  xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M14.8285 8.33332H16.4952C18.1618 8.33332 18.9952 7.49999 18.9952 5.83332V4.16666C18.9952 2.49999 18.1618 1.66666 16.4952 1.66666H14.8285C13.1618 1.66666 12.3285 2.49999 12.3285 4.16666V5.83332C12.3285 7.49999 13.1618 8.33332 14.8285 8.33332Z" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.82849 18.3333H6.49516C8.16182 18.3333 8.99516 17.5 8.99516 15.8333V14.1667C8.99516 12.5 8.16182 11.6667 6.49516 11.6667H4.82849C3.16182 11.6667 2.32849 12.5 2.32849 14.1667V15.8333C2.32849 17.5 3.16182 18.3333 4.82849 18.3333Z" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.66182 8.33332C7.50277 8.33332 8.99516 6.84094 8.99516 4.99999C8.99516 3.15904 7.50277 1.66666 5.66182 1.66666C3.82088 1.66666 2.32849 3.15904 2.32849 4.99999C2.32849 6.84094 3.82088 8.33332 5.66182 8.33332Z" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.6618 18.3333C17.5028 18.3333 18.9952 16.8409 18.9952 15C18.9952 13.159 17.5028 11.6667 15.6618 11.6667C13.8209 11.6667 12.3285 13.159 12.3285 15C12.3285 16.8409 13.8209 18.3333 15.6618 18.3333Z" stroke="#808885" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Services
                </a>
                </li>
            </ul>

            {{-- User login status --}}

            <section class="h-[58px] w-[224px] border-solid border-2 border-[#E5E5E4] flex items-center px-[16px] rounded ">
                <div class="mr-[16px] my-[8px]">
                    <h2 class="font-medium text-sm">Buukmenow Demo</h2>
                    <p class="font-medium text-xs text-[#A6A6A5]"">Buukmenow@gmail.com</p>
                </div>
                <div class="h-[16px] w-[16px]">
                    <svg class="h-[16px] w-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                     <path d="M4 6L8 10L12 6" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </section>
        </nav>
        
        <main class="w-[1440px] h-[990px] flex justify-center">
            <section class="w-[1050px] h-[990px] m-[auto] ">
                @yield('main')
            </section>
        </main>

        @livewireScripts
    </body>
</html>
