<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreConfigData extends Model
{
    protected $connection = 'remote_mysql';
    protected $table = 'core_config_data';
    protected $primaryKey = 'id_config';
}
