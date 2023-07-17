<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'id',
        'cate_id',
        'course_id',
        'name',
        'description',
        'popular',
        'image',
        'original_price',
        'selling_price',
        'status',

    ];

    public function category()
    {
        return $this->belongsTo(category::class,'cate_id','id');
    }

    public function SubCategory()
    {
        return $this->belongsTo(SubCategory::class,'course_id');
    }

}
