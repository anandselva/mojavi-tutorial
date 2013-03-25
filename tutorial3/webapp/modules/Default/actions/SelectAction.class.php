<?php
class SelectAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        if ($request->getParameter('choice') == 'Both')
        {
            $controller->forward(DEFAULT_MODULE, 'DisplayBoth');
        }
        else
        {
            $controller->forward($request->getParameter('choice'), 'Index');
        }
        return VIEW_NONE;
    }
    
    function getDefaultView (&$controller, &$request, &$user)
    {
        return VIEW_NONE;
    }

    function getRequestMethods ()
    {
        return REQ_POST;
    }
   
    function handleError (&$controller, &$request, &$user)
    {
        return array(DEFAULT_MODULE, DEFAULT_ACTION, VIEW_SUCCESS);
    }

    function registerValidators (&$validatorManager, &$controller, &$request,
                                 &$user)
    {
	$validatorManager->setRequired('choice', TRUE, 'I need choice; I cannot continue without choice');

        require_once(VALIDATOR_DIR . 'ChoiceValidator.class.php');
        $validator =& new ChoiceValidator($controller);
// ChoiceValidator validates against a list of allowed values
        $criteria = array('sensitive' => TRUE, 'choices'   => array('Children', 'Teachers', 'Both'));
        $validator->initialize($criteria);
// register the parameter field you want to validate        
	$validatorManager->register('choice', $validator, TRUE);
    }
}
?>
