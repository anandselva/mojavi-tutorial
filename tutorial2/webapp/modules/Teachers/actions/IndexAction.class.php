<?php
class IndexAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        $teachers = array(array('smith','maths'), array('jones','science'), array('miller','history'));
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
