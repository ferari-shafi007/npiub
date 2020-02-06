<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    // Table Name
    protected $table = 'semesters';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
