<?php
require_once(LIB_DIR . 'Base_View.class.php');
class PageNotFoundView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'Page Not Found';
        $this->sub_template = 'message.php';
        $this->sub_vars['message'] = 'Page Not Found';
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
