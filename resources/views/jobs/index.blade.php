<x-layout>
    <x-breadcrumbs :links="['Jobs' => '#']" class="mb-4" />
    @foreach ($jobs as $job)
        <x-job-card :$job>
            <div>
                <x-link-button :href="route('jobs.show', $job)">Show</x-link-button>
            </div>
        </x-job-card>
    @endforeach

</x-layout>
