<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;

class CampaignTable extends Component
{
    use WithPagination;
    public $collection = '';
    
    public $data = [];
    public $search = '';

    protected $listeners = ['searchItem' => 'searchItem','createdCampaign' => 'searchItem' , 'campShow' => 'searchItem'];


    public function searchItem($search)
    {    
        $this->data = [];
        $this->search =  $search;
        $response = Http::get("http://buukmenow.test/api/campaign/search?query=$search")->json();
        $this->collection = $response;
        
        $this->data = $response['data'];
    }

    public function mount($info)
    {
        $this->data = $info;
    }

    // public function hydrate()
    // {
    //     $this->searchItem('');
    // }

    public function render()
    {
        return view('livewire.campaign-table', 
            
        );
    }
}
