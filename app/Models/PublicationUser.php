<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PublicationUser extends Pivot
{
    protected $table = 'publications_users';
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