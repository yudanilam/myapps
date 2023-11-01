<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layout.app')]
#[Title('Halaman Utama')]
class SuperadminPageHome extends Component
{
    public function render()
    {
        return view('livewire.superadmin-page-home');
    }
}
