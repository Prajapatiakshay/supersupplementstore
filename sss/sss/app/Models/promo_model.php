<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo_model extends Model
{
    use HasFactory;
    protected $table = "tbl_promo";
    protected $primaryKey = "promo_id";
}
