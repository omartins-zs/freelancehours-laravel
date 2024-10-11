<?php

namespace App\Livewire\Proposals;

use Livewire\Component;

class Create extends Component
{
    public bool $modal = true;

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
