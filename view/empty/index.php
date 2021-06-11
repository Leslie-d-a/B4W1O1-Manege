<?php 
	echo $divOpen;
	foreach($horses as $index=>$horse){
		if($index % 2 == 0 && $index != 0){
			echo $divClose.$divOpen;
		}
?>
<div class="col col-lg-6">
	<div class="card m-3 text-white bg-dark border-white">
	<img src="<?= URL?>images/<?= $horse['img']?>" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title text-center"><?= $horse['name']?></h5>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item text-white bg-dark border-white">Ras: <?= $horse['race']?></li>
		<li class="list-group-item text-white bg-dark border-white">Hoogte: <?= $horse['height']?>cm</li>
		<li class="list-group-item text-white bg-dark border-white">Type: <?= $horse['type']?></li>
	</ul>
	<div class="card-body">
		<a href="<?= URL?>createAppointment/<?= $horse['id']?>" class="card-link">Maak afspraak</a>
	</div>
	</div>
</div>
<?php 
	}
	echo $divClose;
?>