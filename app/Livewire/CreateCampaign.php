<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CreateCampaign extends Component
{   
    protected $listeners = ['create' => 'displayForm'];

    public $title = '';
    public $description = '';
    public $targetGroup = 'All Customers';
    public $show = 'hidden';

    public function displayForm()
    {
        if ($this->show == 'hidden')
        {
            $this->show = 'flex';
        }else {
            $this->show = 'hidden';
        }

    }
    public function stayOnScreen(){
        $this->show = "flex";
    }
    public function addCampaign()
    {
       
        $response = Http::post('http://buukmenow.test/api/campaign', [
        'title' => $this->title,
        'description' => $this->description,
        'target_group' => $this->targetGroup,
        'status' => 'Active'
    ]);
        $e = $response->json();
        $this->displayForm();

        $this->dispatch('createdCampaign', '')->to(CampaignTable::class);

    }

    public function render()
    {
            return view('livewire.create-campaign');
    }
}
