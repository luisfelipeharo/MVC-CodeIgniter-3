<?php echo form_open('materia/edit/'.$materia['idMateria'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="idProfesor" class="col-md-4 control-label">Profesor</label>
		<div class="col-md-8">
			<select name="idProfesor" class="form-control">
				<option value="">select profesor</option>
				<?php 
				foreach($all_profesores as $profesor)
				{
					$selected = ($profesor['idProfesor'] == $materia['idProfesor']) ? ' selected="selected"' : "";

					echo '<option value="'.$profesor['idProfesor'].'" '.$selected.'>'.$profesor['idProfesor'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nombreMateria" class="col-md-4 control-label">NombreMateria</label>
		<div class="col-md-8">
			<input type="text" name="nombreMateria" value="<?php echo ($this->input->post('nombreMateria') ? $this->input->post('nombreMateria') : $materia['nombreMateria']); ?>" class="form-control" id="nombreMateria" />
		</div>
	</div>
	<div class="form-group">
		<label for="diaMateria" class="col-md-4 control-label">DiaMateria</label>
		<div class="col-md-8">
			<input type="text" name="diaMateria" value="<?php echo ($this->input->post('diaMateria') ? $this->input->post('diaMateria') : $materia['diaMateria']); ?>" class="form-control" id="diaMateria" />
		</div>
	</div>
	<div class="form-group">
		<label for="horaInicio" class="col-md-4 control-label">HoraInicio</label>
		<div class="col-md-8">
			<input type="text" name="horaInicio" value="<?php echo ($this->input->post('horaInicio') ? $this->input->post('horaInicio') : $materia['horaInicio']); ?>" class="form-control" id="horaInicio" />
		</div>
	</div>
	<div class="form-group">
		<label for="horaFin" class="col-md-4 control-label">HoraFin</label>
		<div class="col-md-8">
			<input type="text" name="horaFin" value="<?php echo ($this->input->post('horaFin') ? $this->input->post('horaFin') : $materia['horaFin']); ?>" class="form-control" id="horaFin" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>