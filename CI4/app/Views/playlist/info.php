<div class="header">
	<div class="logo">
		<a href="<?php echo base_url()?>">
			<img src="images/logo.png" style="width: 280px; height: 63px;">
		</a>
	</div>
</div>
<div class="content" style="margin-top: 130px">	
	</form>
	<div class="table-container">
		<div class="card">
			
			<h3><?= $track_title['track_title']?></h3>
			<img src="<?= site_url('images/p5.jpg')?>">

			<table class="table">
				<?php if(!empty($playlist)) : ?>
					<tr>
						<td><?= $track_title['track_title']; ?></td>
					</tr>
					<tr>
						<td><?= $track_title['artist']; ?></td>
					</tr>
					<tr>
						<td><?= $track_title['album']; ?></td>
					</tr>
					<tr>
						<td><?= $track_title['year']; ?></td>
					</tr>
				<?php else :?>
					<tr>
						<td style="color: #eb4d4b;">Unknown track title</td>
					</tr>
					<tr>
						<td style="color: #eb4d4b;">Unknown artist</td>
					</tr>
					<tr>
						<td style="color: #eb4d4b;">Unknown album</td>
					</tr>
					<tr>
						<td style="color: #eb4d4b;">Unknown publish year</td>
					</tr>
				<?php endif; ?>
			</table>

			<div class="social-buttons">

			</div>

		</div>
		
	</div>
</div>