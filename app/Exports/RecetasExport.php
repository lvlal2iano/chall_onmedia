<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RecetasExport implements FromArray, WithHeadings
{

    protected $recetas;

    public function __construct($recetas){
        $this->recetas = $recetas;
    }

    public function array(): array
    {
        $data = [];
        foreach($this->recetas as $receta){
            $data[] = [
                'Nombre' => $receta['recipe']['label'],
                'Cant.Ingr.' => count($receta['recipe']['ingredients']),
                'Calorias' => ceil($receta['recipe']['calories']),
                'URL' => $receta['recipe']['url']
            ];
        }

        return $data;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Nombre", "Cant.Ingr.", "Calorias", "URL"];
    }
}
