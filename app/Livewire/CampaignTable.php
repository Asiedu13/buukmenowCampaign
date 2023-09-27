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
    protected $data = [];

    public function mount()
    {
      $this->data = Campaign::paginate(10);
    }

    public function render()
    {
        return view('livewire.campaign-table', 
            [
                'data' => $this->data
            ]
        );
    }
}
