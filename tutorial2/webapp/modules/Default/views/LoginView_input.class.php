<?php
require_once(LIB_DIR . 'Base_View.class.php');
class LoginView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'School Display Login';
        $this->sub_template = 'login.php';
        $this->sub_vars['username'] = $request->getParameter('username');
        $this->sub_vars['error'] = $request->getError('login');
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
