<?php
class Action
    {
	if(isset($_POST['submit_t']))
		{
			
		public function getName() 
		{
			$n = $_POST['name'];
			return $name = htmlspecialchars(trim($n));
		}
		} else
		{
			return false;
		}	
	} 
	
class All_action extends Action
	{
	if(isset($_POST['submit_k']))
		{
				
		public function getAll() 
		{
			return $v = htmlspecialchars(trim($_POST['v']));
			return $s = htmlspecialchars(trim($_POST['s']));
			return $d = htmlspecialchars(trim($_POST['d']));
			return $m = htmlspecialchars(trim($_POST['m']));
			return $s_gorod = htmlspecialchars(trim($_POST['s_gorod']));
			return $v_gorod = htmlspecialchars(trim($_POST['v_gorod']));
		}			
		} else
		{
			return false;
		}
	}


?>	
