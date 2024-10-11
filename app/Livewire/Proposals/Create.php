<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use App\Models\Proposal;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public bool $modal = true;

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric', 'gt:0'])]
    public int $hours = 0;

    public function save()
    {
        $this->validate();
        // Metodo sem alterar o protected $fillable do Proposal
        // $proposal = new Proposal();
        // $proposal->project_id = $this->project->id;
        // $proposal->email = $this->email;
        // $proposal->hours = $this->hours;
        // $proposal->save();

        // Melhor opção
        $this->project->proposals()->updateOrCreate([
            ['email' => $this->email],
            ['hours' => $this->hours]
        ]);
    }
    public function render()
    {
        return view('livewire.proposals.create');
    }
}
