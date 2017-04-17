<?php include ROOT.'/views/layouts/header.php'; ?>

<h1 class="text-center">Агенство недвижимости "КАПИТАЛ"</h1>

        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <a href="/client/login">Войти</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-9">
                <h3>Доступная недижимость</h3>
                <?php foreach ($estatesList as $estate): ?>
                <div class="estate-block bg-info">
                    <div class="row">
                        <div class="col-md-6">
                            <span>Тип: <?= $estate['re_type']; ?></span>
                            <ul>
                                <li><?= $estate['service']; ?></li>
                                <li><?= $estate['service_state']; ?></li>
                                <li><?= $estate['district']; ?></li>
                                <li><?= $estate['address']; ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Состояние: <?=$estate['state']; ?></li>
                                <li>Площадь: <?=$estate['area']; ?> кв.м.</li>
                            </ul>
                            <span class="text-success pull-right position"><b>Цена: <?=$estate['price']; ?> $</b></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php echo $pagination->get(); ?>
            </div>


            <div class="col-md-3"><h3>Фильтры</h3></div>
        </div>
<?php include ROOT.'/views/layouts/footer.php'; ?>
