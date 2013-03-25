<?php
require_once(LIB_DIR . 'Base_View.class.php');
class NoComponentView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'Sample of no components';
        $this->noComponent = TRUE;
        $this->body = '<div>' . 'this is the content' . '</div>';
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
