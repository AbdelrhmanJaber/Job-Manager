<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per Year.
            </a>
        </li>
    @endforeach
</x-layout>