<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'uuid', 'user_id', 'is_public'];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model) {
            $model->uuid = (string) Uuid::generate();
        });
    }

    public function getRootKeyName()
    {
        return 'uuid';
    }

}
