<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = 'complaints';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'publication_id');
    }
}