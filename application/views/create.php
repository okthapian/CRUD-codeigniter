<?php include_once('header.php') ?>
	<div class="container">
		
		<?php echo form_open('welcome/save',['class'=>'form-horizontal']) ;?>
			<fieldset>
				<legend>Add Post</legend>
				<div class="form-group"> 
					<label for="inputEmail" class="col-md-2 control-label">Judul</label>
					<div class="col-md-5">
						<?php echo form_input(['name'=>'judul','placeholder'=>'Judul','class'=>'form-control']); ?>
					</div>
					<div class="col-md-5">
						<?php echo form_error('input_judul','<div class="text-danger">','</div>') ?>
					</div>
				</div>

				<div class="form-group"> 
					<label for="textArea" class="col-md-2 control-label">Deskripsi</label>
					<div class="col-md-5">
						<?php echo form_textarea(['name'=>'deskripsi','placeholder'=>'Deskripsi','class'=>'form-control']); ?>
						<span class="help-block">masukkan text</span>
					</div>
					<div class="col-md-5">
						<?php echo form_error('input_deskripsi','<div class="text-danger">','</div>') ?>
					</div>
				</div>

				<div class="col-md-10 col-md-offset-2">
					<?php echo form_submit(['name'=>'input_submit','value'=>'submit','class'=>'btn btn-default']) ?>

					<?php echo anchor('welcome','back',['class'=>'btn btn-default']) ?>
				</div>
			</fieldset>
		<?php echo form_close(); ?>
	</div>
<?php include_once('footer.php') ?>