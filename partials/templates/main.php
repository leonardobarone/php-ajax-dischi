<!-- MAIN -->
<main>
            <div class="container">
                <div class="row">
                    <?php foreach($database as $song) { ?>
                    <div class="column-12 column-md-5">
                        <div class="card">
                            <img class="poster" src="<?= $song["poster"]?>" alt="<?= $song["title"]?>">
                            <div class="title"><?= strtoupper($song["title"])?></div>
                            <div class="author"><?= $song["author"]?></div>
                            <div class="year"><?= $song["year"]?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>