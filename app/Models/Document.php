<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $connection = "pgsql";

    protected $fillable = ['title', 'subscription_numbers', 'signature_responsible', 'number_page', 'document_size'];
}
