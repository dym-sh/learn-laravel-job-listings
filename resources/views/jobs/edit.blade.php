<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

<form method="post" action="/jobs/{{ $job->id }}">
  @csrf
  @method('PATCH')

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job: {{ $job->title }}</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-2">
              <input type="text"
                name="title"
                id="title"
                autocomplete="title"
                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                placeholder="Web-Developer"
                value="{{ $job->title }}"
                required
                >
          </div>
          @error('title')
            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
          <div class="mt-2">
              <input type="text"
                name="salary"
                id="salary"
                autocomplete="salary"
                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                placeholder="40.000 € per year"
                value="{{ $job->salary }}"
                required>
          </div>
          @error('salary')
            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-between gap-x-6">
    <div class="flex items-center">
      <button class="text-red-500 text-small font-bold"
        form="delete-form"
        >Delete</button>
    </div>

    <div>
      <x-button href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-100">Cancel</x-button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
  </div>
</form>

<form method="post" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
  @csrf
  @method('delete')
</form>

</x-layout>
