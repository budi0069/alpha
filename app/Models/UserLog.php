<?php

namespace App\Models;

use CodeIgniter\Model;

class UserLog extends Model
{
    protected $table            = 'user_logs';
    protected $primaryKey       = 'id_log';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['users','created_at'];
}
