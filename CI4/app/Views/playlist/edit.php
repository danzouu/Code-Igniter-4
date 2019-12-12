<div class="header">
	<div class="logo">
		<a href="<?php echo base_url()?>">
			<img src="<?php echo base_url('images/logo.png')?>" style="width: 280px; height: 63px;">
		</a>
	</div>
	<div class="tabs">
		
	</div>
</div>
<div class="content">
	<div class="card">
		<form name="addform" action="<?= site_url('edit')?>" method="POST">
			<h2>EDIT TRACK</h2>	
			<input type="text" id="track_title" name="track_title" value="<?= $playlist['track_title']?>" class="search" style="margin-bottom: 20px">
			<input type="text" name="artist" value="<?= $playlist['artist']?>" class="search" style="margin-bottom: 20px">
			<input type="text" name="album" value="<?= $playlist['album']?>" class="search" style="margin-bottom: 20px">
			<input type="text" name="year" value="<?= $playlist['year']?>" class="search" style="margin-bottom: 30px; width: 75px; text-align: center; padding-right: 10px;">
			<br>
			<input type="hidden" id="id" value="<?= $playlist['id'];?>" name="id">
			<button type="submit" class="button">Update</button>
		</form>
	</div>
</div>

