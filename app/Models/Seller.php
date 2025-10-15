<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'fk_Seller_id');
    }

    public function publications()
    {
        return $this->hasMany(Publication::class, 'seller_id');
    }
}