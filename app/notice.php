<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    // Table Name
    protected $table = 'notices';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

}
