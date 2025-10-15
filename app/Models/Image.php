<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_User_id');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'fk_Seller_id');
    }
}
