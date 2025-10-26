<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'Department Management'])]

class DepartmentManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.department-management');
    }
}
