<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{
    use SoftDeletes;
 
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id', 'placa', 'renavam', 'modelo','marca', 'ano'
    ];
  
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    } 
    
}
