<?php
class DBAction extends Action
{
    function initialize (&$controller, &$request, &$user)
    {
        if (!$request->hasAttribute('initialized'))
        {
            $request->setAttribute('initialized', TRUE);
            print 'connecting to db . . .';
        }
        return TRUE;
    }
}
?>
