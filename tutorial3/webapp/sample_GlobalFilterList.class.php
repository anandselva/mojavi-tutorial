<?php
class GlobalFilterList extends FilterList
{
    function registerFilters (&$filterChain, &$controller, &$request, &$user)
    {
		require_once( BASE_DIR . 'filters/UserFilter.class.php' );
		$filterChain->register(new UserFilter);
    }
}
?>