<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $table = 'links';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title'
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'user_links');
    }
}
