<div>

    @foreach ($this->projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}">

                <x-project-card :$project />

            </a>
        </li>
    @endforeach

</div>
