<?php echo $this->get_web_information();  echo "<h1>".$this->translate('contacto')."</h1>" ;$form = $this->get_form_by_name('cformcontact'); $form->open_form_display();echo "<table class='formtable'>";	echo "<tr>";		echo "<td width='130px'>".$this->translate('name')."</td>"; 		echo "<td> ". $form->get_form_object('nom')->display(true) ." </td>"; 	echo "</tr>"; 	echo "<tr>";		echo "<td width='130px'>".$this->translate('poblacion')."</td>"; 		echo "<td> ". $form->get_form_object('poblacio')->display(true) ." </td>"; 	echo "</tr>"; 	echo "<tr>";		echo "<td width='130px'>".$this->translate('email')."</td>"; 		echo "<td> ". $form->get_form_object('email')->display(true) ." </td>"; 	echo "</tr>"; 	echo "<tr>";		echo "<td width='130px'>".$this->translate('telefono')."</td>"; 		echo "<td> ". $form->get_form_object('telefon')->display(true) ." </td>"; 	echo "</tr>"; 	echo "<tr>";		echo "<td width='130px'>".$this->translate('comentarios')."</td>"; 		echo "<td> ". $form->get_form_object('comentaris')->display(true) ." </td>"; 	echo "</tr>"; 	echo "<tr>"; 		echo "<td>&nbsp;</td>";		echo "<td><br />";			if ($this->get_var('form_type') == 'edit'){ 				echo  $form->get_form_object('item_id')->display(true); 			}  		echo $form->get_form_object('ts')->display(true); 		echo  $form->get_form_object('submit')->display(true);			echo "</td>"; 	echo "</tr>";echo "</table class='formtable'>";$form->close_form_display();?>