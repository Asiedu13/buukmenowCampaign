<section class="mt-[40px] ">
    @if($data)
        <table class="  max-h-[480px] w-[1050px]  rounded-t-2xl ">
            <tr class="h-[64px] border-t-4 border-b-2 border-[#F2F2F2] bg-[#F3F3F4] rounded-3xl">
                <th class="w-[217px] h-[64px] text-sm font-medium bg-[#F3F3F4] text-left pl-[24px] rounded-tl-3xl">Campaign Title</th>
                <th class="w-[413px] h-[64px] text-sm font-medium text-left bg-[#F3F3F4]text-ellipsis">Description</th>
                <th class="w-[169px] h-[64px] text-sm font-medium bg-[#F3F3F4]">Target Group</th>
                <th class="w-[190px] h-[64px] text-left pl-[24px] text-sm font-medium bg-[#F3F3F4]">Campaign Status</th>
            </tr>

            {{-- Rows with data from campaign-table-row --}}
            @foreach($data as $dataItem)
                    @livewire('campaign-table-row', [
                    'campaignTitle' => $dataItem['title'],
                    'description' => $dataItem['description'],
                    'targetGroup' => $dataItem['target_group'],
                    'campaignStatus' => $dataItem['status']
        ], key($dataItem['id']) )


            @endforeach
            </table>
            
            {{-- Pagination --}}
            <section> 
                {{-- {{$collection->('links')}} --}}
            </section>

            <section>

            </section>

        @else
            <section>
                Nothing found
            </section>
    @endif
</section>