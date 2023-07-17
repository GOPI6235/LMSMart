<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'teach_id',
        'title',
        'filename'
    ];

    public function Teacher()
    {
        return $this->belongsTo(Teacher::class,'teach_id','id');
    }
}
