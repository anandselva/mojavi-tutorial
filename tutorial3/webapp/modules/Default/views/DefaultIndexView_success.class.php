<?php
require_once(LIB_DIR . 'Base_View.class.php');
class DefaultIndexView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->componentTemplate = 'select.php';
        $this->title = 'School Display';
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
