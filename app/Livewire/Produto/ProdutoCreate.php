<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $preco;
    public $descricao;
    public $quantidade;
    public $ativo;

    public function salvar()
    {
        Produto::create([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'descricao' => $this->descricao,
            'quantidade' => $this->quantidade,
            'ativo' => $this->ativo,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
    }
    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
