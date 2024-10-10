<x-layouts.app>

    {{-- Show --}}

    <livewire:projects.show :project="$project" />

    @dump($project)

    {{-- <pre>

        @dd(request())

    </pre> --}}


</x-layouts.app>
