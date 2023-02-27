<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'mailing_list_id',
        'added_by',
        'created_at',
        'updated_at',
    ];

    public function mailingList()
    {
        return $this->belongsTo(MailingList::class);
    }
}
