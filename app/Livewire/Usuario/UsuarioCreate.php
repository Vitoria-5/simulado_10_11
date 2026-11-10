<?php

namespace App\Livewire\Usuario;

use App\Models\Usuario;
use Livewire\Component;

class UsuarioCreate extends Component
{
    public $nome;
    public $data_nascimento;
    public $telefone;
    public $email;
    public $senha;

    public function salvar()
    {
        Usuario::create([
            'nome' => $this->nome,
            'data_nascimento' => $this->data_nascimento,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'senha' => $this->senha,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
    }
    public function render()
    {
        return view('livewire.usuario.usuario-create');
    }
}
