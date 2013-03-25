<?php
class UserFilter extends Filter
{
    function execute (&$filterChain, &$controller, &$request, &$user)
    {
        static $registered;

        if ($registered == NULL)
        {
            $registered = TRUE;
// pre-filter goes here
             print ' before ';
// execute the next filter in the chain
             $filterChain->execute($controller, $request, $user);
// post-filter goes here
             print ' after ';
      } else
        {
            $filterChain->execute($controller, $request, $user);
        }
    }
}
?>