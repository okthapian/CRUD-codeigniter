<?php include_once('header.php') ?>
	<div class="container">
		<h3>Lihat Postingan</h3>
		<h4><?php echo $posts->judul; ?></h4>
		<p><?php echo $posts->deskripsi; ?></p>
		<p><?php echo $posts->tanggal; ?></p>
		<?php echo anchor('welcome','back',['class'=>'btn btn-default']) ?>
	</div>
<?php include_once('footer.php') ?>