<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Campaign extends Component
{
    protected $data = [];
    public $search = '';
    // protected $listeners = ['searchItem' => 'searchItem'];

    // public function searchItem($search)
    // {
    //     $this->search =  $search;
    //     $response = Http::get("http://buukmenow.test/api/campaign/search?query=$search")->json();

    //     $this->data = $response['data'];
    // }

    public function mount()
    {
       $response = Http::get("http://buukmenow.test/api/campaign/")->json();
        // dd($response['data']['data']);
        $this->data = $response['data']['data'];
    }

    

    public function render()
    {
        return view('livewire.campaign', [
            'data' => $this->data
        ]);
    }
}
