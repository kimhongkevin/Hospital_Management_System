<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'User Management'])]

class UserManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.user-management');
    }
}
