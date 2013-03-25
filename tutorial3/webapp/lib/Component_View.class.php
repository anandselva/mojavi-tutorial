<?php
class Component_View extends View
{
    var $componentRenderer; // component renderer
    var $componentTemplate;  // the name of the component's template file
    var $componentVars; // array of the variables for the component/template
    
    function execute ($controller, $request, $user)
    {
        $this->componentRenderer = new Renderer($controller, $request, $user); 
        $this->componentRenderer->setMode(RENDER_VAR);
        $this->componentRenderer->setTemplate($this->componentTemplate);
        $this->componentRenderer->setArray($this->componentVars);
        $this->componentRenderer->execute($controller, $request, $user); 
    }
}
?>
