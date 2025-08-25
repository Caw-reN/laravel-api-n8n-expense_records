<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseRecord extends Model
{
    //

    protected $fillable = [
        'toko',
        'total',
        'item',
        'tanggal_struk'
    ];
}
