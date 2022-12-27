<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maincat_model extends Model
{
    use HasFactory;
    protected $table = "tbl_maincat";
    protected $primaryKey = "maincat_id";
}
