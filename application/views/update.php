<?php include_once('header.php') ?>
	<div class="container">
		
		<?php echo form_open("welcome/ubah/{$posts->id}",['class'=>'form-horizontal']) ;?>
			<fieldset>
				<legend>Tambah Data</legend>
				<div class="form-group"> 
					<label for="inputEmail" class="col-md-2 control-label">Judul</label>
					<div class="col-md-5">
						<?php echo form_input(['name'=>'judul','placeholder'=>'Judul','class'=>'form-control','value'=>set_value('judul',$posts->judul)]); ?>
					</div>
					<div class="col-md-5">
						<?php echo form_error('input_judul','<div class="text-danger">','</div>') ?>
					</div>
				</div>

				<div class="form-group"> 
					<label for="textArea" class="col-md-2 control-label">Deskripsi</label>
					<div class="col-md-5">
						<?php echo form_textarea(['name'=>'deskripsi','placeholder'=>'Deskripsi','class'=>'form-control','value'=>set_value('deskripsi',$posts->deskripsi)]); ?>
						<span class="help-block">masukkan text</span>
					</div>
					<div class="col-md-5">
						<?php echo form_error('input_deskripsi','<div class="text-danger">','</div>') ?>
					</div>
				</div>

				<div class="col-md-10 col-md-offset-2">
					<?php echo form_submit(['name'=>'input_submit','value'=>'Update','class'=>'btn btn-default']) ?>

					<?php echo anchor('welcome','back',['class'=>'btn btn-default']) ?>
				</div>
			</fieldset>
		<?php echo form_close(); ?>
	</div>
<?php include_once ('footer.php') ?>