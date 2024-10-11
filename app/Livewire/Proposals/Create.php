<?php

namespace App\Livewire\Proposals;

use Livewire\Component;

class Create extends Component
{
    public bool $modal = false;

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
