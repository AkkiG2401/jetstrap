<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        Update Password
    </x-slot>

    <x-slot name="description">
        Ensure your account is using a long, random password to stay secure.
    </x-slot>

    <x-slot name="form">
        <div class="mb-3">
            <x-jet-label for="current_password" value="Current Password" />
            <x-jet-input id="current_password" type="password" class="{{ $errors->has('current_password') ? 'is-invalid' : '' }}"
                         wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" />
        </div>

        <div class="mb-3">
            <x-jet-label for="password" value="New Password" />
            <x-jet-input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                         wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" />
        </div>

        <div class="mb-3">
            <x-jet-label for="password_confirmation" value="Confirm Password" />
            <x-jet-input id="password_confirmation" type="password" class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                         wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button>
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
