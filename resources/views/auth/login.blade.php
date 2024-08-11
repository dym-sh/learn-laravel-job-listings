<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

<form method="post" action="/login">
  @csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <x-form-field>
          <x-form-label for="email">E-Mail</x-form-label>
          <x-form-input
            name="email"
            id="email"
            type="email"
            required
            />
          <x-form-error name="email" />
        </x-form-field>

        <x-form-field>
          <x-form-label for="password">Password</x-form-label>
          <x-form-input
            name="password"
            id="password"
            type="password"
            required
            />
          <x-form-error name="password" />
        </x-form-field>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <x-form-button>Login</x-form-button>
  </div>
</form>

</x-layout>