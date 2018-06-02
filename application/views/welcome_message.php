<?php include_once('header.php') ?>
	<div class="container">
		<h3>View All Post</h3>
		<?php if($msg=$this->session->flashdata('msg')):
			echo($msg) ;
		endif; ?>
		<?php echo anchor('Welcome/create','Add Post',['class'=>'label label-primary']); ?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>judul</th>
					<th>des</th>
					<th>tanggal</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<tbody>
			<?php if(count($post)): ?>
				<?php foreach ($post as $post):?>
					<tr>
						<td><?php echo $post->judul; ?></td>
						<td><?php echo $post->deskripsi; ?></td>
						<td><?php echo $post->tanggal; ?></td>
						<td>
							<?php echo anchor("Welcome/view/{$post->id}",'View',['class'=>'label label-primary']); ?>
							<?php echo anchor("Welcome/update/{$post->id}",'Update',['class'=>'label label-success']); ?>
							<?php echo anchor("Welcome/delete/{$post->id}",'Delete',['class'=>'label label-danger']); ?>
						</td>
					</tr>
				<?php endforeach ?>
			<?php else:?>
				<tr>
					<td>Tidak ada data</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
<?php include_once('footer.php') ?>