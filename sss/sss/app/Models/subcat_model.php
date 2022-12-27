<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcat_model extends Model
{
    use HasFactory;
    protected $table = "tbl_subcat";
    protected $primaryKey = "subcat_id";
}

class maincat_data extends Model
{
    use HasFactory;
    protected $table = "tbl_maincat";
    protected $primaryKey = "maincat_id";
}

