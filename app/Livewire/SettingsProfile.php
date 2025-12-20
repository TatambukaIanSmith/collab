<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class SettingsProfile extends Component
{
    public string $name;

    public string $email;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updateProfile()
    {
        /** @var User $user */
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($user->id),
            ],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', message: __('Profile updated successfully'));
    }

    public function deleteAccount(): \Illuminate\Http\RedirectResponse
    {
        /** @var User|null $user */
        $user = Auth::user();

        // ensure the current user is an instance of our User model before calling model methods
        if (! $user instanceof User) {
            Auth::logout();

            session()->invalidate();
            session()->regenerateToken();

            return redirect('/');
        }

        Auth::logout();

        $user->delete();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.settings-profile');
    }
}
