<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand_model extends Model
{
    use HasFactory;
    protected $table = "tbl_brand";
    protected $primaryKey = "brand_id";
}
