<div class="h-[900px] ">
    <header class="w-[234px] h-[56px] mt-[32px]">
        <h2 class="font-medium text-xl">Customers</h2>
        <p class="text-sm font-normal pt-[16px] text-[#808785]
]">See all your customers in one place</p>
    </header>


    <nav class="h-[50px] w-[939px] mt-[45px] flex  border-b-2 ">
        <button class="w-[106px] h-[50px] text-sm text-[#808785]  flex justify-center mr-[12px] hover:border-b-2 border-[#00100B] 
        hover:text-[#00100B] focus:border-b-2 border-[#00100B] focus:text-[#00100B]
">Customer Log</button>
        <button class="w-[106px] h-[50px] text-sm text-[#808785]  flex justify-center mr-[12px] hover:border-b-2 border-[#00100B] 
        hover:text-[#00100B] focus:border-b-2 border-[#00100B] focus:text-[#00100B]
">Campaigns</button>
    </nav>

    {{-- Campaign search --}}
    @livewire('campaign-search')
    {{-- Campaign table --}}
    @livewire('campaign-table', [$data])
    
    @livewire('create-campaign')
</div>



