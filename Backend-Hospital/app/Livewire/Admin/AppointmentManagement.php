<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'Appointment Management'])]

class AppointmentManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.appointment-management');
    }
}
