<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use App\Models\Proposal;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public bool $modal = true;

    public string $email = '';
    public int $hours = 0;

    public function save()
    {
        // Metodo sem alterar o protected $fillable do Proposal
        // $proposal = new Proposal();
        // $proposal->project_id = $this->project->id;
        // $proposal->email = $this->email;
        // $proposal->hours = $this->hours;
        // $proposal->save();

        // Melhor opção
        $this->project->proposals()->create([
            'email' => $this->email,
            'hours' => $this->hours
        ]);
    }
    public function render()
    {
        return view('livewire.proposals.create');
    }
}
