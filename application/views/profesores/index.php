<div class="pull-right">
	<a href="<?php echo site_url('profesores/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdProfesor</th>
		<th>NombreProfesor</th>
		<th>Actions</th>
    </tr>
	<?php foreach($profesores as $p){ ?>
    <tr>
		<td><?php echo $p['idProfesor']; ?></td>
		<td><?php echo $p['nombreProfesor']; ?></td>
		<td>
            <a href="<?php echo site_url('profesores/edit/'.$p['idProfesor']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('profesores/remove/'.$p['idProfesor']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
