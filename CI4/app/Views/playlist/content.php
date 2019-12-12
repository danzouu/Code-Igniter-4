<div class="header">
	<div class="logo">
		<a href="<?php echo base_url()?>">
			<img src="images/logo.png" style="width: 280px; height: 63px;">
		</a>
	</div>
</div>
<div class="content" style="margin-top: 130px">
	<form method="">
		<div class="left">
			<a href="<?= site_url('add')?>" 
				onmouseover="this.style.backgroundColor='#32B96A'"
				onmouseout="this.style.backgroundColor='#1D2427';"
				style="
					text-decoration: none; 
					font-family: Gotham;
					color: white;
					margin-left: 32px;
					padding: 7px;
					padding-left: -4px;
					padding-right: -4px;
					border-radius: 50px;
					font-size: 14.5px;
					border-color: #32B96A">
						ADD TRACK +
			</a>
		</div>
		<div class="right">
		<input type="text" name="query" placeholder="Search" class="search">
		<select class="search" style="width: 80px;" name="field">
			<option value="track_title">Title</option>
			<option value="artist">Artist</option>
			<option value="album">Album name</option>
			<option value="year">Year</option>
		</select>		
		</input><input type="submit" name="search" placeholder="GO" class="button"></input>
		</div>
	</form>
	<div class="table-container">
		<table class="table">
			<thead>
				<th style="width: 3%"></th>
				<th>TITLE</th>
				<th>ARTIST</th>
				<th>ALBUM</th>
				<th style="width: 5%">YEAR</th>
				<th style="width: 5%"></th>
				<th style="width: 5%"></th>
			</thead>
			<?php if(!empty($playlist) && is_array($playlist)):?>
				<?php foreach ($playlist as $track_title): ?>
					<tr>
						<td><a href="<?= site_url('info/').$track_title['id']?>"><img src="images/play.png" class="play-btn"><?= $name['id'] ?></a></td>
						<td><?= $track_title['track_title']; ?></td>
						<td><?= $track_title['artist']; ?></td>
						<td><?= $track_title['album']; ?></td>
						<td><?= $track_title['year']; ?></td>
						<td><a href="<?= site_url('edit')."/".$track_title['id']?>"><button class="edit-btn">EDIT</button></a></td>
						<td><a href="<?= site_url('delete/').$track_title['id'] ?>" onClick="return confirm('Are you sure you want to delete this record?')"><button class="delete-btn">DELETE</button></a></td></td>
					</tr> 
				<?php endforeach; ?>
			<?php endif ?>
		</table>
	</div>
</div>