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
		<form name="addform" action="<?= site_url('add')?>" method="POST">
			<h2>ADD DJENT TRACK</h2>
			<input type="text" name="track_title" placeholder="Title" class="search" style="margin-bottom: 20px">
			<input type="text" name="artist" placeholder="Artist" class="search" style="margin-bottom: 20px">
			<input type="text" name="album" placeholder="Album" class="search" style="margin-bottom: 20px">
			<input type="text" name="year" placeholder="Year" class="search" style="margin-bottom: 30px; width: 75px; text-align: center; padding-right: 10px;"><br>
			</input><input type="submit" name="search" placeholder="GO" class="button"></input>
		</form>
	</div>
</div>

