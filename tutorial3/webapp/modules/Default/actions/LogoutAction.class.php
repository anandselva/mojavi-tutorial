<?php
class LogoutAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        $user->setAuthenticated(FALSE);
        $user->removePrivileges('tutorial');
        $controller->forward(DEFAULT_MODULE, DEFAULT_ACTION);
        return VIEW_NONE;
    }
}
?>