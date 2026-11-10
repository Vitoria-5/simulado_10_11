<?php

namespace App\Livewire\Estoque;

use App\Models\Estoque;
use Livewire\Component;

class EstoqueIndex extends Component
{
    public function render()
    {
        $estoques = Estoque::all();
        return view('livewire.estoque.estoque-index');
    }
}
