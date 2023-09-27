<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;

class CampaignTable extends Component
{
    // use WithPagination;
    public $collection = '';
    
    public $data = [];
    public $search = '';

    protected $listeners = ['searchItem' => 'searchItem'];

    public function searchItem($search)
    {   
        $this->data = [];
        $this->search =  $search;
        $response = Http::get("http://buukmenow.test/api/campaign/search?query=$search")->json();
        
        $this->data = $response['data'];
    }

    public function mount($info)
    {
      $this->data = $info;
    }

    public function updated()
    {
        $this->data = [];
        $response = Http::get("http://buukmenow.test/api/campaign/search?query=$this->search")->json();
            
        $this->data = $response['data'];
    }

    public function render()
    {
        return view('livewire.campaign-table', 
            
        );
    }
}
