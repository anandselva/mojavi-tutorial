<?php
class PageNotFoundAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        $request->setError('Page not found', $request->getParameter(MODULE_ACCESSOR) . '/' .  $request->getParameter(ACTION_ACCESSOR));
        return array(DEFAULT_MODULE, DEFAULT_ACTION, VIEW_SUCCESS);
    }
}
?>
