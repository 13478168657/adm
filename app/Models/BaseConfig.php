<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BaseConfig extends Model
{
    use SoftDeletes;
    protected $table = 'base_config';
    public function __construct(){

    }

}
