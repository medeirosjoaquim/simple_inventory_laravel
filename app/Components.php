<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
  protected $fillable = [
    'tipo',
    'quantidade',
    'capacidade',
    'color',
    'descricao',
    'modelo'
  ];

  public function type(){
    return $this->hasOne('App\Types','componentTipo','componentClass');
  }

  public function getTipoAttribute($value)
  {
            return ucfirst($value);
                
  } 
}
