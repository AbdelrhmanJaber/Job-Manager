<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>
    <div>
        <div class="space-y-4">
            @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200">
                    <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per Year.
                </a>
            @endforeach
        </div>
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>