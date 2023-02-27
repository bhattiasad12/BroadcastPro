<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MailingList extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'list_name',
        'list_description',
        'added_by',
        'created_at',
        'updated_at',
    ];

    public function subscriber()
    {
        return $this->hasMany(Subscriber::class);
    }
}
