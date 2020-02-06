<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    // Table Name
    protected $table = 'subjects';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
