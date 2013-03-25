<?php
class DisplayAction extends Action
{
    function execute (&$controller, &$request, &$user)
    {
        $boys = array(array('harry','n'), array('george','y'), array('bert','n'));
	$girls = array(array('sue','n'), array('ann','n'), array('mary','y'));
	switch ($request->getParameter('sex')) {
	case 'b':
	   $request->setAttribute('boys', $boys);
	   break;
	case 'g':
	   $request->setAttribute('girls', $girls);
	   break;
	case 'a':
	   $request->setAttribute('boys', $boys);
	   $request->setAttribute('girls', $girls);
	   break;
        }
        return VIEW_SUCCESS;
    }
    
    function getDefaultView (&$controller, &$request, &$user)
    {
        return VIEW_ERROR;
    }

    function getRequestMethods ()
    {
        return REQ_POST;
    }
   
    function registerValidators (&$validatorManager, &$controller, &$request,
                                 &$user)
    {
	$validatorManager->setRequired('sex', TRUE, 'I need sex; I cannot continue without sex');

        require_once(VALIDATOR_DIR . 'ChoiceValidator.class.php');
        $validator =& new ChoiceValidator($controller);
// ChoiceValidator validates against a list of allowed values
        $criteria = array('sensitive' => TRUE, 'choices'   => array('b', 'g', 'a'));
        $validator->initialize($criteria);
// register the parameter field you want to validate        
	$validatorManager->register('sex', $validator, TRUE);
    }

    function validate (&$controller, &$request, &$user)
    {
        if ('x' == 'x')
           return TRUE;
    }
}
?>
