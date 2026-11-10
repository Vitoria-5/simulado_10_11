<?php

namespace App\Livewire\Estoque;

use App\Models\Fornecedor;
use Livewire\Component;

class EstoqueEdit extends Component
{
    public $quantidade;
    public $entrada;
    public $saida;
    public $produto_id;
    public $quantidade_minima;
    public $status;

    public function salvar()
    {
        Fornecedor::find([
            'quantidade' => $this->quantidade,
            'entrada' => $this->entrada,
            'saida' => $this->saida,
            'produto_id' => $this->produto_id,
            'quantidade_minima' => $this->quantidade_minima,
            'status' => $this->status,
        ]);

        session()->flash(
            'success',
            'Produto editado com sucesso!'
        );
    }
    public function render()
    {
        return view('livewire.estoque.estoque-edit');
    }
}
