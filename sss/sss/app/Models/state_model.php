<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state_model extends Model
{
    use HasFactory;
    protected $table = "tbl_state";
    protected $primaryKey = "state_id";
}
