<?php

namespace App\Services;
use App\Models\VideoProgress;

class VideoProgressService
{
 
    public function update($data) : void
    {
        $completionRate = min(100, max(0, $data->completion_rate));

        VideoProgress::updateOrCreate(
            [
                'user_id' => $data->user_id,
                'course_id' => $data->course_id,
            ],
            [
                'completion_rate' => $completionRate,
                'last_watched' => now(),
            ]
        );
    }

}