<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    // Table Name
    protected $table = 'lectures';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

}

// $table->string('lectureType');
// $table->string('semester');
// $table->string('subject');
// $table->string('lecture');
// $table->string('fileUrl');
