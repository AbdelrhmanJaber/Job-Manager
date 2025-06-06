<x-layout>
    <x-slot:heading>
        Edit Job : {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit The Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">
                    Enter the new data you want to modify.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2 flex rounded-md shadow-sm">
                            <input type="text" name="title" id="title"
                                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border border-gray-300 bg-white py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600 sm:text-sm"
                                placeholder="Shift Leader" value="{{ $job->title }}">
                        </div>
                        @error('title')
                            <p class="text-ts text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2 flex rounded-md shadow-sm">
                            <input type="text" name="salary" id="salary"
                                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border border-gray-300 bg-white py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600 sm:text-sm"
                                placeholder="$50,000 per year" value="{{ $job->salary }}">
                        </div>
                        @error('title')
                            <p class="text-ts text-red-500 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- </div class="mt-10">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div> -->
                </div>

                <div class="mt-6 flex items-center justify-between gap-x-6">
                    <div class="flex items-center">
                        <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
                    </div>
                    <div class="flex items-center gap-x-6">
                        <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Save
                        </button>
                    </div>
                </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>