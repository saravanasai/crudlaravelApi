<?php

namespace App\Http\Resources\User;

use App\Models\User\Wallet;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "user_id"=>$this->id,
            "user"=>$this->username,
            "current_balance"=>$this->user_wallet->balance,
            "token"=>$this->remember_token,
        ];
    }
}
