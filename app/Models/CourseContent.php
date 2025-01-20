<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'course_content', 'video_link_content', 'pdf_content'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
