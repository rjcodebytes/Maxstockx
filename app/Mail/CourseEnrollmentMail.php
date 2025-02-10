<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Course;

class CourseEnrollmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $course;

    public function __construct(User $user, Course $course)
    {
        $this->user = $user;
        $this->course = $course;
    }

    public function build()
    {
        return $this->subject('Course Enrollment Successful')
                    ->view('emails.course_enrollment')
                    ->with([
                        'userName' => $this->user->name,
                        'courseName' => $this->course->course_name,
                        'courseDescription' => $this->course->course_description,
                        'whatsappLink' => $this->course->whatsapp_link,
                    ]);
    }
}
