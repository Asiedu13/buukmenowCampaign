<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;
use App\Models\Campaign;

class CampaignTable extends Component
{
    use WithPagination;
    // public $data = [ ];
    public $collection = '';

    // public function mount()
    // {
    //     //  $response = Http::get('http://buukmenow.test/api/campaign');
    //     // $collection = json_decode($response);

    //     //  dd($collection->data->data);
    //     // $this->data = $collection->data->data;
    //     // $this->collection = $collection;

    //     $campaigns = Campaign::paginate(10);

    //     // dd(json_decode($campaigns));


    // }

    public function render()
    {
        return view('livewire.campaign-table', 
            [
                'data' => Campaign::paginate(10)
            ]
        );
    }
}
