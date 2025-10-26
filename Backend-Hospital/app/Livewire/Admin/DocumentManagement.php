<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use Livewire\Attributes\Layout;

#[Layout('layouts.admin', ['header' => 'Document Management'])]

class DocumentManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.document-management');
    }
}
