<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tes_table extends Model
{
    // use HasFactory;
    public $table = 'tes';
    // public $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamp = false;
}
