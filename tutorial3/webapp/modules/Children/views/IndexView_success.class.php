<?php
require_once(LIB_DIR . 'Base_View.class.php');
class IndexView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'Children Display';
        $this->componentTemplate = 'select.php';
        $module =& $controller->getCurrentModule();
        $this->componentVars['selectAction'] = "?module=$module&amp;action=Display";
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
