<?php
class Base_View extends View
{
    var $sub_template;  // the name of the sub-template
    var $title;  // page title
    var $sub_vars; // array of the variables for the sub template
    var $renderer; // main renderer
    
    function execute ($controller, $request, $user)
    {
// set up sub-template
        $subrenderer = new Renderer($controller, $request, $user); 
        $subrenderer->setMode(RENDER_VAR);
        $subrenderer->setTemplate($this->sub_template);
        $subrenderer->setArray($this->sub_vars);
        $subrenderer->execute($controller, $request, $user); 
// set up main template
        $this->renderer = new Renderer($controller, $request, $user);
        $this->renderer->setTemplate('main.php');
        $this->renderer->setAttribute('title', $this->title);
        $this->renderer->setAttribute('body', $subrenderer->fetchResult($controller, $request, $user)); 
// homepage link       
        $this->renderer->setAttribute('homelink', '<a href="?module='.DEFAULT_MODULE.'&action='.DEFAULT_ACTION.'">Homepage</a>');
// user data section       
       if ($user->isAuthenticated())
            $this->renderer->setAttribute('userdata', 'User: ' . $user->getAttribute('username') . ' <a href="?module='.DEFAULT_MODULE.'&action=Logout">Logout</a>');
       else
            $this->renderer->setAttribute('userdata', '<a href="?module='.DEFAULT_MODULE.'&action=Login">Login</a>');
    }
}
?>