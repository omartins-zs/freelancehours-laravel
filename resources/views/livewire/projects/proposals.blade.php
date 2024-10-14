<x-proposals :proposals="$project->proposals()->orderByDesc('hours')->get()" />
