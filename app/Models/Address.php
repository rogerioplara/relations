<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // depois da criação do model, é interessante definir alguns dados, a tabela primeiro
    public $table = 'addresses';

    protected $fillable = [
        'address',
    ];

    protected $hidden = [
        'deleted_at',
        'user_id',
    ];

    public function user()
    {
        // se utilizar o padrão do laravel, não precisa inserir a coluna e o nome
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
