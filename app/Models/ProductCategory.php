<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $connection = 'remote_mysql';
    protected $table = 'categories_new';
    protected $hidden = ['pivot'];
}
