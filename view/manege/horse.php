<div class="text-white bg-dark m-3">
	<div class="row m-0">
        <div class="col-lg-4 border border-white">
            <img class="img-fluid m-0" src="<?= URL?>images/<?= $horse['img']?>" alt="">
        </div>
        <div class="text-white bg-dark col-lg-8 border border-white">
            <ul class="list-group list-group-flush fs-2">
                <li class="list-group-item text-white bg-dark border-bottom border-white lh-md">Naam: <?= $horse['name']?></li>
                <li class="list-group-item text-white bg-dark border-bottom border-white lh-md">Ras: <?= $horse['race']?></li>
                <li class="list-group-item text-white bg-dark border-bottom border-white lh-md">Hoogte: <?= $horse['height']?>cm</li>
                <li class="list-group-item text-white bg-dark border-bottom border-white lh-md">Type: <?= $horse['type']?></li>
            </ul>
        </div>
    </div>
    <div class="row border border-white m-0">
        <form method="POST" class="p-0">
            <div class="row border-bottom border-white m-0">
                <div class="col-lg-6 border-right border-white d-flex justify-content-around align-items-center p-0 border-bottom border-white">
                    <label class="w-50 text-center " for="date">Datum van: </label>
                    <input class="w-50" type="datetime-local" name="date">
                </div>
                <div class="col-lg-6 border-right border-white d-flex justify-content-around align-items-center p-0 border-bottom border-white">
                    <label class="w-50 text-center " for="date">Tot: </label>
                    <input class="w-50" type="datetime-local" name="date">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-lg-6 border-right border-white d-flex justify-content-around align-items-center p-0 border-bottom border-white">
                    <label class="w-50 text-center " for="name">Naam: </label>
                    <input class="w-50" type="text" name="name">
                </div>
                <div class="col-lg-6 border-right border-white d-flex justify-content-around align-items-center p-0 border-bottom border-white">
                    <label>Spring sport: </label><br>
                    <input type="radio" id="yes" name="gender" value="yes">
                    <label for="Yes">Ja</label><br>
                    <input type="radio" id="no" name="gender" value="no">
                    <label for="No">Nee</label><br>
                </div>
            </div>
            <div class="row m-0">
                <input type="submit" value="Maak afspraak">
            </div>
        </form>
    </div>
</div>