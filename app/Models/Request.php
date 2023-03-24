<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'quality_id',
        'category_id',
        'url',
        'message',
        'status_id',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function quality()
    {
        return $this->belongsTo(Qualities::class, 'quality_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
