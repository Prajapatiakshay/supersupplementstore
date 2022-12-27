<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_model extends Model
{
    use HasFactory;
    protected $table = "tbl_order";
    protected $primaryKey = "ord_id";
}
