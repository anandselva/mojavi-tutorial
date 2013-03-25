<?php
class DefaultIndexAction extends Action
{
    function getDefaultView (&$controller, &$request, &$user)
    {
        return VIEW_SUCCESS;
    }

    function getRequestMethods ()
    {
        return REQ_NONE;
    }
}
?>
