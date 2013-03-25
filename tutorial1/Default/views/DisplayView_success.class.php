<?php
class DisplayView extends View
{
    function & execute (&$controller, &$request, &$user)
    {
        $renderer =& new Renderer($controller, $request, $user);
        $renderer->setTemplate('children.php');
// set up array of children
// process each boy in array, adding 'boy' to end of array
	if ($request->getAttribute('boys'))
		foreach ($request->getAttribute('boys') as $boy)
		{
			array_push($boy, 'boy');
			$children[] = $boy;
		}
// process each girl in array, adding 'girl' to end of array
	if ($request->getAttribute('girls'))
		foreach ($request->getAttribute('girls') as $girl)
		{
			array_push($girl, 'girl');
			$children[] = $girl;
		}
// children in alpha sequence
	sort($children);
	$output = '';
// process each child in array
	foreach ($children as $child)
	{
// if second element is 'y', child is a prize-winner; display as '*'
		$prize = '';
		if ($child[1] == 'y')
			$prize = '*';
// add each child's name to output
		$output .= "<div class=\"$child[2]\">$child[0] $prize</div>";
	}
        $renderer->setAttribute('children', $output);
        return $renderer;
    }
}
?>
