<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{

    protected $table = "privacy_policy";
    protected $primaryKey = 'id';
    protected $fillable = [
        'privacyPolicy'
    ];
}

