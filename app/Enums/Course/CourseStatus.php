<?php

namespace App\Enums\Course;

use BenSampo\Enum\Enum;

final class CourseStatus extends Enum
{
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
}