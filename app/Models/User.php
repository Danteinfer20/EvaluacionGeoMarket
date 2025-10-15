<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo(Role::class, 'rol_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'fk_User_id');
    }

    public function seller()
    {
        return $this->hasOne(Seller::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'user_id');
    }

    public function chatSupports()
    {
        return $this->hasMany(ChatSupport::class, 'user_id');
    }

    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'publications_users');
    }
}