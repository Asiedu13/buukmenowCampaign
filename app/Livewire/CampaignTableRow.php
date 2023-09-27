<?php

namespace App\Livewire;

use Livewire\Component;

class CampaignTableRow extends Component
{
    public $campaignTitle = " ";
    public $description = " ";
    public $targetGroup = " ";
    public $campaignStatus = " ";

    public function mount($campaignTitle, $description = ' ', $targetGroup = ' ', $campaignStatus = ' ')
    {
        $this->campaignTitle = $campaignTitle;
        $this->description = $description;
        $this->targetGroup = $targetGroup;
        $this->campaignStatus = $campaignStatus;
    }

    public function render()
    {
        return view('livewire.campaign-table-row');
    }
}
