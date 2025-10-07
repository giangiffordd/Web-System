<?php

namespace App\Models;

use CodeIgniter\Model;

class PuihahaModel extends Model
{
    protected $table      = 'puihaha_teas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'desc', 'img', 'created_at', 'updated_at'];
}
