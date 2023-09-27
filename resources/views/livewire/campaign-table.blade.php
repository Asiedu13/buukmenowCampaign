<section class="mt-[40px]">
        <table class="bg-[white] max-h-[480px] rounded-xl border border-[#F2F2F2]">
            <tr class=" h-[64px] border-b-2 border-[#F2F2F2] ">
                <th class="w-[217px] h-[64px] text-sm font-medium bg-[#ECECEB] text-left pl-[24px]">Campaign Title</th>
                <th class="w-[473px] h-[64px] text-sm font-medium text-left bg-[#ECECEB] text-ellipsis">Description</th>
                <th class="w-[169px] h-[64px] text-sm font-medium bg-[#ECECEB]">Target Group</th>
                <th class="w-[190px] h-[64px] text-left pl-[24px] text-sm font-medium bg-[#ECECEB]">Campaign Status</th>
            </tr>

            {{-- Rows with data from campaign-table-row --}}
            @foreach($data as $dataItem)
                @livewire('campaign-table-row', [
                    'campaignTitle' => $dataItem->title,
                    'description' => $dataItem->description,
                    'targetGroup' => $dataItem->target_group,
                    'campaignStatus' => $dataItem->status
                ] )

                 {{$data->links()}}
            @endforeach
        </table>

        {{-- Pagination --}}
        <section>
           
        </section>

</section>