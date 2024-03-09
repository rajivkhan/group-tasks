<?php

namespace App\Models;

use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupMember extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
