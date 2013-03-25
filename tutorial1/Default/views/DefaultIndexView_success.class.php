<?php
class DefaultIndexView extends View
{
    function & execute (&$controller, &$request, &$user)
    {
        $renderer =& new Renderer($controller, $request, $user);
        $renderer->setTemplate('select.php');
        return $renderer;
    }
}
?>
