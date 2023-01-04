<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class returns extends Model
{
    use HasFactory;

    protected $fillable = ['loan_id', 'librarian_id', 'in_date', 'fine_amount'];
}
