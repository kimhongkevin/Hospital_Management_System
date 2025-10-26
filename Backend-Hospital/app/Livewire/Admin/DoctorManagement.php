<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'Doctor Management'])]

class DoctorManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.doctor-management');
    }
}
