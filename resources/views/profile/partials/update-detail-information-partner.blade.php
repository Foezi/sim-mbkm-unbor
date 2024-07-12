<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Detail Information Partner') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update information Institute.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form
        method="post"
        action="{{ url('/institute/update') }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('patch')

        <div class="space-y-2">
            <x-form.label
                for="name"
                :value="__('Name of institution')"
            />

            <x-form.input
                id="partnerName"
                name="partnerName"
                type="text"
                class="block w-full"
                :value="@$user->partner->partnerName"
                required
                autofocus
                autocomplete="partnerName"
            />

            <x-form.error :messages="$errors->get('name')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="partnerType"
                :value="__('Partner Type')"
            />

            <x-form.input
                type="text"
                class="block w-full"
                :value="$user->partnerType"
                readonly
                required
                autofocus
                autocomplete="partnerType"
            />

            <x-form.error :messages="$errors->get('name')" />
        </div>

        {{-- <div class="space-y-2">
            <x-form.label
                for="address"
                :value="__('Address')"
            />

            <x-form.input
                id="address"
                name="address"
                type="text"
                class="block w-full"
                required
                autofocus
                autocomplete="address"
            />

            <x-form.error :messages="$errors->get('address')" />
        </div> --}}

        <div class="space-y-2">
            {{-- <x-form.label
                for="user_id"
                :value="__('ID User')"
            /> --}}

            <x-form.input
                id="user_id"
                name="user_id"
                type="hidden"
                class="block w-full"
                :value="$user->id"
                readonly
                required
                autofocus
                autocomplete="user_id"
            />

            <x-form.error :messages="$errors->get('name')" />
        </div>


        <div class="flex items-center gap-4">
            <x-button>
                {{ __('Save') }}
            </x-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
