<h1>Editar estudiante</h1>

<?php
    echo $this->Form->Create('Student');
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('nombre');
    echo $this->Form->input('last_name');
    echo $this->Form->end('Guardar estudiantes');
?>