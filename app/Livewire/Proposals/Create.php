<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public bool $modal = true;

    public string $email;
    public int $hours;

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
