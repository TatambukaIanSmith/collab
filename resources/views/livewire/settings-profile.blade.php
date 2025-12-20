<div>
    <x-layouts.settings title="Profile" description="Update your name and email address">
        <div wire:target="updateProfile" class="mb-6">
            @if (session('status'))
                <x-ui.alert variant="success" :message="session('status')" />
            @endif
        </div>

        <form wire:submit="updateProfile" class="space-y-6">
            <!-- Name Input -->
            <div>
                <x-forms.input
                    wire:model="name"
                    name="name"
                    label="Name"
                    type="text"
                    required
                    autofocus
                />
                @error('name')
                    <p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Input -->
            <div>
                <x-forms.input
                    wire:model="email"
                    name="email"
                    label="Email"
                    type="email"
                    required
                />
                @error('email')
                    <p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Save Button -->
            <div>
                <x-ui.button type="submit" variant="primary" wire:loading.attr="disabled">
                    <span wire:loading.remove>Save</span>
                    <span wire:loading>Saving...</span>
                </x-ui.button>
            </div>
        </form>

        <!-- Delete Account Section -->
        <div class="mt-8 border-t border-gray-200 pt-8 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Delete account</h3>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Delete your account and all of its resources</p>

            <form wire:submit="deleteAccount" class="mt-4"
                  onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                <x-ui.button
                    type="submit"
                    variant="primary"
                    className="bg-red-600 hover:bg-red-700 dark:bg-red-700 dark:hover:bg-red-800"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove>Delete account</span>
                    <span wire:loading>Deleting...</span>
                </x-ui.button>
            </form>
        </div>
    </x-layouts.settings>
</div>
