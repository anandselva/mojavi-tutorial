<?php
require_once(LIB_DIR . 'DBAction.class.php');
class IndexAction extends DBAction
{
    function execute (&$controller, &$request, &$user)
    {
        require_once(DB_DIR . 'Teachers.class.php');
        $teachersDB = new teachers;
        $teachers = $teachersDB->getTeachers();
//        $teachers = array(array('smith','maths'), array('jones','science'), array('miller','history'));
        $request->setAttribute('teachers', $teachers);
        return VIEW_SUCCESS;
    }
    
    function getDefaultView (&$controller, &$request, &$user)
    {
        return VIEW_ERROR;
    }

    function getPrivilege (&$controller, &$request, &$user)
    {
        return array('history', 'tutorial');
    }
    
    function getRequestMethods ()
    {
        return REQ_POST;
    }
    
    function isSecure ()
    {
        return TRUE;
    }
}
?>
