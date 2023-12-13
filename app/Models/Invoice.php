<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $table = 'invoices';

    protected $fillable = [
        'description',
        'amount',
        'address_id',
        'user_id'
    ];

    // propriedades que ficarão escondidas e não serão retornadas na requisição
    protected $hidden = [
        'address_id',
        'user_id',
        'deleted_at',
    ];

    // Função que define o relacionamento hasOne
    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    use HasFactory;
}
