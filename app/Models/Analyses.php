<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyses extends Model
{
    use HasFactory;
    protected $connection = "pgsql";

    protected $fillable = ['status', 'viewers', 'id_document', 'id_signature'];
}
