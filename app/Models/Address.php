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

    use HasFactory;
}
