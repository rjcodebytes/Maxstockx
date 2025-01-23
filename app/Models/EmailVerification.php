<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailVerification extends Model
{
    use HasFactory;

    // Define the table name (optional if naming conventions are followed)
    protected $table = 'email_verifications';

    // Specify the primary key (optional if using `id`)
    protected $primaryKey = 'id';

    // Enable or disable timestamps
    public $timestamps = true;

    // Mass assignable attributes
    protected $fillable = [
        'user_id',
        'old_email',
        'new_email',
        'token',
        'otp',
        'expires_at',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
