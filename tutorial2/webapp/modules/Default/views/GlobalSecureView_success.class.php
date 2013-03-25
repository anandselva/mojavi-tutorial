<?php
require_once(LIB_DIR . 'Base_View.class.php');
class GlobalSecureView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'No Authorisation';
        $this->sub_template = 'message.php';
        $this->sub_vars['message'] = 'You are not authorised to view this page';
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
