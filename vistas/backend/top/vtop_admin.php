<?php   $session = $this->get_session();  	echo "<div id='menuadmin'>";				echo "<div id='menutitle'>";			echo DOMAIN;		echo "</div>";						echo "<ul id='menuadminul'>";						$class = ($_SERVER['SCRIPT_NAME'] == '/admin/index.php')  ? 		"class='menuadminulactive'" 		: 		"";			echo "<li><a href='/admin/' $class>Inicio</a></li>";						$class = ($_SERVER['SCRIPT_NAME'] == '/admin/users_list.php')  ? 		"class='menuadminulactive'" 		: 		"";			echo "<li><a href='/admin/users/list/' $class>Usuarios</a></li>";									$class = ($_SERVER['SCRIPT_NAME'] == '/admin/categoria_list.php'  OR $_SERVER['SCRIPT_NAME'] == '/admin/categoria_create.php'  OR  $_SERVER['SCRIPT_NAME'] == '/admin/categoria_edit.php'  OR $_SERVER['SCRIPT_NAME'] == '/admin/categoria.php')  ? 		"class='menuadminulactive'" 		: 		"";   	 	 	 echo "<li><a href='/admin/categoria/list/' $class>Categoria</a></li>";//#NO-BORRAR#//					echo "</ul>";				  if( $session->check(true) ){    			    echo "<div id='adminlogout'>";			      echo "[".$this->get_session()->get_var_session('name')." ".$this->get_session()->get_var_session('lastname')."] <a href='/logout/'>Salir</a>";			    echo "</div>";			    			  }else{			    			    if ($this->getMain() != "vlogin"){			    						    echo "<div class='adminlogout'>";					      echo "<a href='/login/'>login</a>";					    echo "</div>";			    			    }			  }		echo "</div>";  ?>