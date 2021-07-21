<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use App\Models\User;

class Profile extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'profiles';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
