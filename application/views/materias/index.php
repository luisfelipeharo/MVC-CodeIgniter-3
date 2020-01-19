<div class="pull-right">
	<a href="<?php echo site_url('materia/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdMateria</th>
		<th>Nombre profesor</th>
		<th>Nombre Materia</th>
		<th>Dia Materia</th>
		<th>Hora Inicio</th>
		<th>Hora Fin</th>
		<th>Actions</th>
    </tr>
	<?php foreach($materias as $m){ ?>
    <tr>
		<td><?php echo $m['idMateria']; ?></td>
		<td><?php echo $m['nombreProfesor']; ?></td>
		<td><?php echo $m['nombreMateria']; ?></td>
		<td><?php echo $m['diaMateria']; ?></td>
		<td><?php echo $m['horaInicio']; ?></td>
		<td><?php echo $m['horaFin']; ?></td>
		<td>
            <a href="<?php echo site_url('materia/edit/'.$m['idMateria']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('materia/remove/'.$m['idMateria']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
