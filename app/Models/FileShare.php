<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileShare extends Model
{
    protected $fillable = [
        'bucket_id',
        'password',
        'code',
        'expired_at'
    ];

    public function bucket(){
        return $this->belongsTo(Bucket::class);
    }
}
