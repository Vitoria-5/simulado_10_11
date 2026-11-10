<?php

namespace App\Livewire\Usuario;

use App\Models\Usuario;
use Livewire\Component;

class UsuarioIndex extends Component
{
    public function render()
    {
        $usuarios = Usuario::all();
        return view('livewire.usuario.usuario-index');
    }
}
