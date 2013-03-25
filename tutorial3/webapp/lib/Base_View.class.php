<?php
require_once(LIB_DIR . 'Component_View.class.php');
class Base_View extends Component_View
{
    var $title;  // page title
    var $renderer; // main renderer
    var $noComponent; // TRUE if there is no component template (body)
    var $body; // contains body content if there is no component template
    
    function execute ($controller, $request, $user)
    {
// set up component if there is a component template
        if (!$this->noComponent)
            parent::execute($controller, $request, $user);
        if ($request->getParameter('isComponent'))
// return componentRenderer if component            
            $this->renderer =& $this->componentRenderer;
        else
        {
// set up main template if not a component
            $this->renderer = new Renderer($controller, $request, $user);
            $this->renderer->setTemplate('main.php');
            $this->renderer->setAttribute('title', $this->title);
            $errors = $request->getErrors();
            $erroroutput = '';
            foreach ($errors as $k => $v)
                $erroroutput .= "<br>$k: $v";
            $this->renderer->setAttribute('errors', $erroroutput);
            if ($this->noComponent)
                $this->renderer->setAttribute('body', $this->body);
            else
                $this->renderer->setAttribute('body', $this->componentRenderer->fetchResult($controller, $request, $user)); 
// homepage link       
            $this->renderer->setAttribute('homelink', '<a href="?module='.DEFAULT_MODULE.'&action='.DEFAULT_ACTION.'">Homepage</a>');
// user data section       
           if ($user->isAuthenticated())
                $this->renderer->setAttribute('userdata', 'User: ' . $user->getAttribute('username') . ' <a href="?module='.DEFAULT_MODULE.'&action=Logout">Logout</a>');
           else
           {
// set up login sub-template
                $loginRenderer = new Renderer($controller, $request, $user); 
                $loginRenderer->setMode(RENDER_VAR);
                $loginRenderer->setTemplate('login.php');
                $loginRenderer->setAttribute('username', $request->getParameter('username')); 
                $loginRenderer->execute($controller, $request, $user); 
                $this->renderer->setAttribute('userdata', $loginRenderer->fetchResult($controller, $request, $user));
            }
        }
    }
}
?>