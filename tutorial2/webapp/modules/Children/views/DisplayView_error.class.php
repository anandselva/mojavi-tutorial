<?php
require_once(LIB_DIR . 'Base_View.class.php');
class DisplayView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'Invalid Input';
        $this->sub_template = 'message.php';
        $this->sub_vars['message'] = implode('<br>', $request->getErrors());
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
