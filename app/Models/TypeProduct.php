<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class TypeProduct extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'type_product';
    public $primaryKey = 'type_id';
    public $timestamps = false;
}
