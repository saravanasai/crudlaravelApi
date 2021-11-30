<?php

namespace App\Models\User;
use App\Models\User\Wallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table="users";
     protected $fillable=[
         "username",
         "password",
         "remember_token",
        ];


    public function user_wallet()
    {
        return $this->hasOne(Wallet::class,'user_wallet','id');
    }
}
