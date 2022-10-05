<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        return "/storage/" . (($this->image) ? $this->image : "profile/C57xBdj9htIcuoufzAZyPpNPx8T3fD9qB4YKFkDU.png");
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }
}
