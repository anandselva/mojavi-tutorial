<?php
class DisplayView extends View
{
    function & execute (&$controller, &$request, &$user)
    {
        $renderer =& new Renderer($controller, $request, $user);
        $renderer->setTemplate('template.php');
	$errors = implode('<br>', $request->getErrors());
	$message = "Invalid input<br>$errors";
        $renderer->setAttribute('message', $message);
        return $renderer;
    }
}
?>
