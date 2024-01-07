<?php

function get_courses()
{
    include("./data.php");
    // global $course;
    return array_values($course);
}

function find_by_semester($semester)
{
    include("./data.php");
    // global $course;
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid course');
}
