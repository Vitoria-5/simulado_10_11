<?php

namespace App\Livewire\Usuario;

use App\Models\Usuario;
use Livewire\Component;

class UsuarioEdit extends Component
{
    public $nome;
    public $data_nascimento;
    public $telefone;
    public $email;
    public $senha;

    public function salvar()
    {
        Usuario::find([
            'nome' => $this->nome,
            'data_nascimento' => $this->data_nascimento,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'senha' => $this->senha,
        ]);

        session()->flash(
            'success',
            'Produto editado com sucesso!'
        );
    }

    public function render()
    {
        return view('livewire.usuario.usuario-edit');
    }
}
