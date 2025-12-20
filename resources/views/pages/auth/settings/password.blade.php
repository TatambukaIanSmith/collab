<x-layouts.app>
    <x-common.page-breadcrumb pageTitle="Password">
        <x-slot:breadcrumbs>
            <li>
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-brand-600 dark:text-gray-400 dark:hover:text-brand-500">Dashboard</a>
            </li>
            <li>
                <span class="text-gray-700 dark:text-gray-400">Password</span>
            </li>
        </x-slot:breadcrumbs>
    </x-common.page-breadcrumb>

    <livewire:settings-password />
</x-layouts.app>
