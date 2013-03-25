<?php
class GlobalSecureAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        $request->setError('Not authorised', 'You are not authorised to view that page');
        return array(DEFAULT_MODULE, DEFAULT_ACTION, VIEW_SUCCESS);
    }
}
?>
