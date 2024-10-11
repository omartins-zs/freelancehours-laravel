<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Timer extends Component
{
    public Project $project;
    public function render()
    {
        return view('livewire.projects.timer');
    }
}
