<?php echo form_open('profesores/edit/'.$profesor['idProfesor'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nombreProfesor" class="col-md-4 control-label">NombreProfesor</label>
		<div class="col-md-8">
			<input type="text" name="nombreProfesor" value="<?php echo ($this->input->post('nombreProfesor') ? $this->input->post('nombreProfesor') : $profesor['nombreProfesor']); ?>" class="form-control" id="nombreProfesor" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>