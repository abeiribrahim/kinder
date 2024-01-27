<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Teacher;
class kclass extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'teacherId',
        'kcname',
        'age',
        'time',
        'capacity',
        'price',
        'active',
        'class_image',
        
        ];
        public function teacher(){
            return $this->belongsTo(Teacher::class,'teacherId');
        }
}
