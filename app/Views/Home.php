<?php

helper('form');

echo form_open('bhaskara/frmInserir');
echo '<pre>';
echo form_label('Digite o valor de A ', 'valorA');
echo form_input('A', '');
echo form_label('Digite o valor de B ', 'valorB');
echo form_input('B', '');
echo form_label('Digite o valor de C ', 'valorC');
echo form_input('C', '');
echo form_submit('mysubmit', 'Calcular');
echo form_close(); 

?>