<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class variation_model extends Model
{
    use HasFactory;
    protected $table = "tbl_variation";
    protected $primaryKey = "var_id";
}
