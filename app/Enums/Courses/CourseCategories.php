<?php

namespace App\Enums\Courses;

use App\Enums\Enumable;

class CourseCategories
{
      use Enumable;

      public const COMMON = 'common';
      public const PHP = 'php';
      public const PYTHON = 'python';
      public const OTHER = 'other';
      public const DATABASE = 'database';
      public const JAVASCRIPT_COMMON = 'javascript_common';
      public const JAVASCRIPT_SERVER = 'javascript_server';
      public const JAVASCRIPT_FRONT = 'javascript_front';
      public const GOLANG = 'golang';
}
