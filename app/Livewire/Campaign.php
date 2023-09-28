<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Campaign extends Component
{
    protected $data = [];
    public $search = '';
    public $showCampaign = true;
    public $showCampaignStyle = 'text-[#00100B] border-b-2 border-[#00100B] ';
    // protected $listeners = ['searchItem' => 'searchItem'];

    // public function searchItem($search)
    // {
    //     $this->search =  $search;
    //     $response = Http::get("http://buukmenow.test/api/campaign/search?query=$search")->json();

    //     $this->data = $response['data'];
    // }
    // protected $listeners = ['campShow' => 'campShow'];

    public function showCampaignF()
    {
        $this->showCampaign = true;
        $this->dispatch('campShow', '')->to(CampaignTable::class);
    }

    public function showCustomerLog()
    {
        $this->showCampaign = false;
        $this->showCampaignStyle = " ";
    }

    public function mount()
    {
       $response = Http::get("http://buukmenow.test/api/campaign/")->json();
        $this->data = $response['data']['data'];
    }

    public function render()
    {
        return view('livewire.campaign', [
            'data' => $this->data
        ]);
    }
}
