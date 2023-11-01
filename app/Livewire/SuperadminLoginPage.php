<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.login')]
#[Title('Halaman Login Superadmin')]
class SuperadminLoginPage extends Component
{
    public function render()
    {
        return view('livewire.superadmin-login-page');
    }
}
