<section class="mt-[40px] rounded-2xl border overflow-hidden ">
    @if($data)
        <table class="max-h-[480px] w-[1050px] ">
            <tr class="h-[64px] bg-[#F3F3F4] rounded-lg ">
                <th class="w-[200px] h-[40px] text-sm font-medium bg-[#F3F3F4] text-left pl-[24px] rounded-3xl">
                    Campaign Title
                </th>
                <th class="w-[413px] h-[40px] text-sm font-medium text-left bg-[#F3F3F4]text-ellipsis">Description</th>
                <th class="w-[169px] h-[40px] text-sm font-medium bg-[#F3F3F4]">Target Group</th>
                <th class="w-[190px] h-[40px] text-left pl-[24px] text-sm font-medium bg-[#F3F3F4]">Campaign Status</th>
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