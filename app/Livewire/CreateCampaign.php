<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CreateCampaign extends Component
{   
    public $title = '';
    public $description = '';
    public $targetGroup = '';


    public function addCampaign()
    {
        $response = Http::post('http://buukmenow.test/api/campaign', [
        'title' => $this->title,
        'description' => $this->description,
        'target_group' => $this->targetGroup,
        'status' => 'Active'
    ]);
    }
    public function render()
    {
        return view('livewire.create-campaign');
    }
}
