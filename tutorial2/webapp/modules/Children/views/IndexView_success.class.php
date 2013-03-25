<?php
require_once(LIB_DIR . 'Base_View.class.php');
class IndexView extends Base_View
{
    function & execute (&$controller, &$request, &$user)
    {
        $this->title = 'Children Display';
        $this->sub_template = 'select.php';
        $module =& $controller->getCurrentModule();
        $this->sub_vars['selectAction'] = "?module=$module&amp;action=Display";
        parent::execute($controller, $request, $user);
        return $this->renderer;
    }
}
?>
