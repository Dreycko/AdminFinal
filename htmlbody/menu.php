<?php 

/**
* 
*/
class Menu
{
	
	
	function mostrar($user)
	{
		$meru="<div class='clear'></div>
		<div class='container_12'>
		<div class='container grid_12'> 
		<ul class='nav main '> 
		<li><a href='index.php?menu=clientList' name ='clientList'><span>Client List</span></a></li>
		<li><a href='index.php?menu=newClientSales' name ='newClientSales'><span>New Client</span></a></li>
		<li><a href='#' name ='newInstallation'><span>New Installation</span></a></li>
		<li><a href='#' name ='modifyClient'><span>Modify Client </span></a></li>
		<li><a href='#' name ='Reports'><span>Reports</span></a></li>
		<li class='secondary'><a href='businessLayer/longOut.php' name ='longOut'>Logout</a></li>
		</ul>
		</div>
		</div>

		";
		return $meru;
	}
}

?>