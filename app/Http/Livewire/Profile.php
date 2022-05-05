<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $success = false;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
//        $this->success = false;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|min:3',
        ]);

        auth()->user()->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->success = true;
    }

    public function render()
    {
        return view('livewire.profile');
    }


}
