<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    

    protected $fillable = [
        'user_id', 'placa', 'renavam', 'modelo','marca', 'ano'
    ];
  
    public function category()
    {
        return $this->belongsTo(User::class);
    } 
    
}
