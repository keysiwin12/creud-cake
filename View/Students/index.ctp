<h1>Vista de estudiantes</h1>

<?= $this->Html->link('Agregar Estudiante',array('action'=>'agregar'));
?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>



<pre> 
<?php

    foreach($estudiantes as $value) {  ?>
        <tr> 
            <td><?= $value['Student']['id']."<br>"; ?> </td>
            <td><?= $value['Student']['nombre']."<br>"; ?> </td>
            <td><?= $value['Student']['last_name']."<br>"; ?> </td>
            <!-- <td><?= $this->Html->link('editar',array('action'=>'editar',$value['Student']['id'])) ; ?> </td> -->
            <td><?php echo $this->Html->link('Editar', 
						array('action'=>'editar',$value['Student']['id'])); ?>&nbsp;
		<?php echo $this->Form->postLink('Eliminando',
						array('action'=>'eliminar',$value['Student']['id']),
						array('confirm'=>'Realmente lo vas a borrar ?')); ?></td>
        </tr>
                    
<?php  }

?>

</table>
</pre>