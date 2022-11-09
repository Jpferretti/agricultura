<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeDespesas extends Model
{
    use HasFactory;

    public function calculaValor() {
        
        $resultado = 0;
        foreach($this->valores as $valor) {
            $resultado += $valor;
        } 
        return $resultado;
    }
}
