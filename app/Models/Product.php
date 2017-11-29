<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 11/15/2017
 * Time: 11:02 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Product extends Model
{
    public $timestamps = false;

    public function major(){
        return $this->belongsTo(Major::class);
    }
}