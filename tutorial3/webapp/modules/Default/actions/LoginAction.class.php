<?php
require_once(LIB_DIR . 'DBAction.class.php');
class LoginAction extends DBAction
{
    function execute (&$controller, &$request, &$user)
    {
        $username = $request->getParameter('username');
        if ($username)
        {
            require_once(DB_DIR . 'Teachers.class.php');
            $teachersDB = new teachers;
            $teachers = $teachersDB->getTeachers();
//            $teachers = array(array('smith','maths'), array('jones','science'), array('miller','history'));
            foreach($teachers as $teacher)
              if ($username == $teacher[0])
              {
// valid username
              $user->setAuthenticated(TRUE);
// if this is a history teacher, add privilege           
              if ($teacher[1] == 'history')
                     $user->addPrivilege('history', 'tutorial');
              $user->setAttribute('username', $username);
              }
        }

// invalid        
        if (!$user->isAuthenticated())
            $request->setError('login', 'Invalid username');

// in all cases go to homepage                        
        return array(DEFAULT_MODULE, DEFAULT_ACTION, VIEW_SUCCESS);
    }
}
?>
