<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'user_id',
        'bucket_id',
        'file_id',
        'messageId',
        'fileName',
        'fileType',
        'thumbnail',
        'fileUrl'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bucket(){
        return $this->belongsTo(Bucket::class);
    }
}
