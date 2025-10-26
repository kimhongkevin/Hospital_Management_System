<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'Patient Management'])]

class PatientManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.patient-management');
    }
}
