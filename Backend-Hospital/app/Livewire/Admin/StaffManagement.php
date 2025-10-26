<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'Staff Management'])]

class StaffManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.staff-management');
    }
}
