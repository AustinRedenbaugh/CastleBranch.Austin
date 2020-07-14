<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //incrementing ids
    public $incrementing = true;
    // Table name
    protected $table = 'states';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
