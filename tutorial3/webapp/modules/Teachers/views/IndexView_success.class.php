<?php
require_once(LIB_DIR . 'Base_View.class.php');
class IndexView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->componentTemplate = 'teachers.php';
        $this->title = 'List of Teachers';
        $teachers = $request->getAttribute('teachers');
        $output = '';
        foreach ($teachers as $teacher)
        {
            $output .= "<div class=\"teacher\">$teacher[0] $teacher[1]</div>";
        }
        $this->componentVars['teachers'] = $output;
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
