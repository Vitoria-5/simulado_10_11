<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorIndex extends Component
{
    public function render()
    {
        $fornecedors = Fornecedor::all();
        return view('livewire.fornecedor.fornecedor-index');
    }
}
