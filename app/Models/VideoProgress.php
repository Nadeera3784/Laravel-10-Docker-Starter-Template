<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoProgress extends Model
{
    use HasFactory;

    protected $table = 'video_progresses';
    
    protected $fillable = [
        'user_id',
        'course_id',
        'completion_rate',
        'last_watched'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}