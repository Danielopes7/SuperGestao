<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;
    use SoftDeletes;


    
    protected $table = 'fornecedores';
    protected $fillable = [
            'nome', 
            'site', 
            'uf', 
            'email'
    ];
    
    public function produtos() {

        //deixando os parametros do relacionamento hasMany explicitos
        //poderia ser representado da mesma forma: return $this->hasMany('App\Models\Produto');
        return $this->hasMany('App\Models\Produto','fornecedor_id','id');
    }
}
