<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'Invoice Management'])]

class InvoiceManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.invoice-management');
    }
}
