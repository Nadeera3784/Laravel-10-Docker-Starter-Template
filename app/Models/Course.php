<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'url',
        'thumbnail',
        'status'
    ];

    protected $appends = ['completion_rate'];

    public function videoProgresses()
    {
        return $this->hasMany(VideoProgress::class);
    }

    public function getCompletionRateAttribute()
    {
        $totalProgresses = $this->videoProgresses()->count();
        
        if ($totalProgresses === 0) {
            return 0;
        }

        $totalCompletionRate = $this->videoProgresses()->sum('completion_rate');
        
        return $totalCompletionRate / $totalProgresses;
    }
}