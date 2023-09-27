 <section class="flex mt-[24px] items-center">
        <section class="w-[565px] h-[64px] bg-[white] pl-4 flex items-center space-between rounded mr-[8px] ">
            <svg class="ml-[10px] mr-[25px]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <circle cx="9.80553" cy="9.8055" r="7.49047" stroke="#808885" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15.0153 15.4043L17.9519 18.3333" stroke="#808885" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            {{-- Searcb input --}}
            <input wire:model.lazy="search" class="w-[478px] h-[48px] outline-none text-sm rounded-md" type="text" placeholder="Search customer log by customer name, email address & phone number">
        </section>
        <button wire:click="searchItem" class="w-[92px] h-[64px] border-solid border-2 border-[#004741] rounded-md bg-[white] mr-[226px]">Search</button>
        <button class="bg-[#004741] text-[white] h-[64px] w-[248px] flex items-center space-between rounded-md">
            <svg class="ml-[16px] mr-[10px]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <g id="Iconly/Light/Document">
            <g id="Document">
            <path id="Stroke 1" d="M13.0969 13.5195H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path id="Stroke 2" d="M13.0969 10.0308H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path id="Stroke 3" d="M9.37603 6.55009H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path id="Stroke 4" fill-rule="evenodd" clip-rule="evenodd" d="M13.2572 2.2915C13.2572 2.2915 6.85965 2.29484 6.84965 2.29484C4.54965 2.309 3.12549 3.82234 3.12549 6.13067V13.794C3.12549 16.114 4.56049 17.6332 6.88049 17.6332C6.88049 17.6332 13.2772 17.6307 13.288 17.6307C15.588 17.6165 17.013 16.1023 17.013 13.794V6.13067C17.013 3.81067 15.5772 2.2915 13.2572 2.2915Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            </g>
            </svg>
            Create a campaign
        </button>
    </section>
