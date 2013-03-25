<?php
class DisplayBothAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        $actChain =& new ActionChain; 
        $actChain->register('children', 'Children', 'Display', array('sex' => 'a', 'isComponent' => TRUE));
        $actChain->register('teachers', 'Teachers', 'Index', array('isComponent' => TRUE)); 
        $actChain->execute($controller, $request, $user); 
        $request->setParameter('isComponent', FALSE);
        $request->setAttribute('children', $actChain->fetchResult('children')); 
        $request->setAttribute('teachers', $actChain->fetchResult('teachers')); 
        return VIEW_SUCCESS;
    }

    function getPrivilege (&$controller, &$request, &$user)
    {
        return array('history', 'tutorial');
    }
    
    function isSecure ()
    {
        return TRUE;
    }
}
?>
