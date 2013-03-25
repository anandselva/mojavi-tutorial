<?php
class Teachers
{
    function getTeachers ()
    {
        $teacherFile = file(BASE_DIR . 'teachers');
        foreach ($teacherFile as $teacherRec)
            $teachers[] = explode(',', $teacherRec);
        return $teachers;
    }
}
?>
