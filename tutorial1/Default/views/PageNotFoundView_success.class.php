<?php
class PageNotFoundView extends View
{
    function & execute (&$controller, &$request, &$user)
    {
        $renderer =& new Renderer($controller, $request, $user);
        $renderer->setTemplate('template.php');
       $renderer->setAttribute('message', 'Page Not Found');
        return $renderer;
    }
}
?>
