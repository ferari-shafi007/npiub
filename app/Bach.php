<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bach extends Model
{
    // Table Name
    protected $table = 'baches';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
