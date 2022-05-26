<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\RecetaService;
use App\Exports\RecetasExport;
use Maatwebsite\Excel\Facades\Excel;

class BuscadorRecetas extends Component
{

    public $filters;

    public $page = 1;

    public $per_page = 10;

    public $data;

    protected $recetaService;

    protected $rules = [
        'filters.q' => 'required',
    ];

    public function __construct(){
        $this->recetaService = new RecetaService();
        $this->filters=[
            'q'=>'Pasta',
            'from' => $this->per_page * ($this->page - 1),
            'to' => $this->per_page * $this->page,
            'ingr' => 5,
        ];
        $this->search();
    }

    public function updatedPage(){
        $this->touch_pagination();
    }

    public function updatedPerPage(){
        $this->touch_pagination();
    }

    protected function touch_pagination(){
        $this->filters['from'] = $this->per_page * ($this->page - 1);
        $this->filters['to'] = $this->per_page * $this->page;
        $this->search();
    }

    public function prev(){
        if($this->page > 1){
            $this->page -= 1;
            $this->touch_pagination();
        }
    }

    public function sig(){
        if($this->page < (ceil($this->data['count']/$this->per_page))){
            $this->page += 1;
            $this->touch_pagination();
        }
    }

    public function aply(){
        $this->page = 1;
        $this->touch_pagination();
    }

    public function search(){
        $this->validate();
        $this->data = $this->recetaService->search($this->filters)->all();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new RecetasExport(collect($this->data['hits'])), 'recetas-'.\Carbon\Carbon::now()->timestamp.'.xlsx');
    }

    public function render()
    {
        return view('livewire.buscador-recetas');
    }
}
