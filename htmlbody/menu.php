<?php 

/**
* 
*/
class Menu
{
	
	
	function mostrar($user)
	{
		



		$meru="
		<div class='grid_11'style='text-decoration: none; color: #708491;'><p>{$titleMenu}</p></div>
		<a href='businessLayer/longOut.php' name ='longOut' class='grid_1'><span>long out</span></a>

		<div class='container grid_12'> 
		<ul id='nav'> 
		<li><a href='index.php?menu=newClient' name ='newClient'><span>New</span></a></li>
		<li><a href='index.php?menu=modifyClient' name ='modifyClient'><span>Modify</span></a></li>
		<li><a href='index.php?menu=addModule' name ='addModule'><span>Add Module</span></a></li>
		<li><a href='index.php?menu=message' name ='message'><span>Message</span></a></li>
		

		</ul>
		</div>
		";
		return $meru;
	}
}

?>