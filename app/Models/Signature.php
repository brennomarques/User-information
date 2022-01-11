<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;
    protected $connection = "pgsql";

    protected $fillable = ['q_signature_characters', 'default_subscription', 'subscription_usage'];
}
