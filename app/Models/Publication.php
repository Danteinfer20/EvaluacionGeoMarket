<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';
    public $timestamps = false;

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'publication_id');
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'publication_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'publications_users');
    }
}