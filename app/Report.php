<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = "user-report";

    protected $fillable = [
        'date', 'technology', 'mentor','report','status'
    ];
}
