<section wire:click.self="displayForm" wire:keydown.escape="displayForm" class="w-[100vw] h-[100vh] bg-transparent-rgba fixed top-0 left-0 flex justify-center items-center rounded-md {{$show}} ">
        <div class="w-[502px] h-[756px] bg-[white] p-[32px] ">
        <header class="flex items-center mb-[40px]" >
            <svg class="mr-[8px]" xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
            <path d="M11.0968 12.5195H5.08017" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.0968 9.03076H5.08017" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.37609 5.55009H5.08026" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2572 1.2915C11.2572 1.2915 4.85967 1.29484 4.84967 1.29484C2.54967 1.309 1.1255 2.82234 1.1255 5.13067V12.794C1.1255 15.114 2.5605 16.6332 4.8805 16.6332C4.8805 16.6332 11.2772 16.6307 11.288 16.6307C13.588 16.6165 15.013 15.1023 15.013 12.794V5.13067C15.013 2.81067 13.5772 1.2915 11.2572 1.2915Z" stroke="#00100B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h2 class="text-xl font-medium">Create a campaign</h2>
        </header>

        <form action="#" wire:submit="addCampaign">
            <div class="flex flex-col mb-[32px]">
                <label class="text-sm text-[#2B3834] mb-[16px]" for="title">Campaign Title</label>
                <input wire:model.lazy="title" class='w-[432px] h-[64px] pl-[16px] text-sm border rounded-md outline-none placeholder:text-[#CCCFCE]' type="text" id='title' placeholder="Write your campaign title here">
            </div>

            <div class="flex flex-col mb-[32px]">
                <label class="text-sm mb-[16px] text-[#2B3834]" for="description">Description</label>

                <textarea wire:model.lazy="description" class='w-[432px] h-[240px] text-sm border rounded-md outline-none p-[16px] placeholder:text-[#CCCFCE]' id='description' placeholder="Write your message here" maxlength="100">
                
                </textarea>
                <p class="text-[#CCCFCE] text-sm text-right mt-[16px] font-normal relative right-[5px]">Max: 100 words</p>
            </div>

             <div class="flex flex-col mb-[32px]">
                <label class="text-sm text-[#2B3834] mb-[16px]" for="target_group">Target group</label>
                <select wire.model.lazy="targetGroup" class='w-[432px] h-[48px] pl-[16px] text-sm border rounded-md outline-none' id='target_group'>
                    <option disabled value="">Select your target group</option>
                    <option value="All Customers">All Customers</option>
                </select>
            </div>

            <div class="flex flex-col mb-[32px]">
               <button class="bg-[#004741] h-[48px] w-[416px] text-[white] rounded-md text-base">Submit your campaign</button>
            </div>
        </form>
    </div>
    
</section>
