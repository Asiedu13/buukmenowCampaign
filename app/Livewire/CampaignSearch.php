<?php

namespace App\Livewire;

use Livewire\Component;

class CampaignSearch extends Component
{   
    public $search = '';

    public function searchItem()
    {
        $this->dispatch("searchItem", $this->search)->to(CampaignTable::class);
    }

    public function create()
    {
        $this->dispatch('create')->to(CreateCampaign::class);
    }

    public function render()
    {
        return view('livewire.campaign-search');
    }
}
