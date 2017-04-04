<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $fillable = ['FirstName','LastName'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}