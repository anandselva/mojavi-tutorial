<?php
class LoginAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        $username = $request->getParameter('username');
        if (!$username)
           return VIEW_INPUT;
        $teachers = array(array('smith','maths'), array('jones','science'), array('miller','history'));
        foreach($teachers as $teacher)
          if ($username == $teacher[0])
          {
// valid username
            $user->setAuthenticated(TRUE);
// if this is a history teacher, add privilege           
            if ($teacher[1] == 'history')
                 $user->addPrivilege('history', 'tutorial');
            $user->setAttribute('username', $username);
            $controller->forward('Teachers', 'Index');
            return VIEW_NONE;
          }

        $request->setError('login', 'Invalid username');
        return VIEW_INPUT;
    }

    function getDefaultView (&$controller, &$request, &$user)
    {
        return VIEW_INPUT;
    }

    function getRequestMethods ()
    {
        return REQ_POST;
    }
}
?>
