<?php   	$session = $this->get_session();  		if( $session->check(true) ){	   echo "<div id='rfloat'>";	     echo "[".$this->get_session()->get_var_session('name')." ".$this->get_session()->get_var_session('lastname')."] <a href='/logout/'>Salir</a>";	   echo "</div>";   	 }else{   	   if ($this->getMain() != "vlogin"){   			    echo "<div class='rfloat'>";		      echo "<a href='/login/'>login</a>";		    echo "</div>";   	   }	 }	  ?>