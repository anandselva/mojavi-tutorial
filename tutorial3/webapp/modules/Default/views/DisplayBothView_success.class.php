<?php
require_once(LIB_DIR . 'Base_View.class.php');
class DisplayBothView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'List of All Children and Teachers';
        $this->componentTemplate = 'both.php';
        $this->componentVars['children'] = $request->getAttribute('children');
        $this->componentVars['teachers'] = $request->getAttribute('teachers');
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
