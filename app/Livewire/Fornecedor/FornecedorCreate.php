<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorCreate extends Component
{
    public $produto_id;
    public $nome_loja;
    public $entrega;
    public $funcionario;
    public $telefone;

    public function salvar()
    {
        Fornecedor::create([
            'produto_id' => $this->produto_id,
            'nome_loja' => $this->nome_loja,
            'entrega' => $this->entrega,
            'funcionario' => $this->funcionario,
            'telefone' => $this->telefone,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
    }
    public function render()
    {
        return view('livewire.fornecedor.fornecedor-create');
    }
}
