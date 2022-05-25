<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\RecetaService;

class BuscadorRecetas extends Component
{

    public $filters;

    public $data;

    protected $recetaService;

    public function __construct(){
        $this->recetaService = new RecetaService();
        $this->filters=[
            'q'=>'Pasta'
        ];
        $this->data = $this->recetaService->search($this->filters)->all();
    }

    public function search(){
        dd('si');
    }

    public function render()
    {
        return view('livewire.buscador-recetas');
    }
}
