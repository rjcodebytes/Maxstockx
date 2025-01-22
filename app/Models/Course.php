<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';
    protected $fillable = ['course_name', 'course_description', 'course_pricing','course_thumbnail'];

    public function contents()
    {
        return $this->hasMany(CourseContent::class, 'course_id');
    }
}
