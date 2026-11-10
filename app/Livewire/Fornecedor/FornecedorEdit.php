<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorEdit extends Component
{
    public $produto_id;
    public $nome_loja;
    public $entrega;
    public $funcionario;
    public $telefone;

    public function salvar()
    {
        Fornecedor::find([
            'produto_id' => $this->produto_id,
            'nome_loja' => $this->nome_loja,
            'entrega' => $this->entrega,
            'funcionario' => $this->funcionario,
            'telefone' => $this->telefone,
        ]);

        session()->flash(
            'success',
            'Produto editado com sucesso!'
        );
    }
    public function render()
    {
        return view('livewire.fornecedor.fornecedor-edit');
    }
}
