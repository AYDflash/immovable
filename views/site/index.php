<?php include ROOT.'/views/layouts/header.php'; ?>

<h1 class="text-center">Агенство недвижимости "КАПИТАЛ"</h1>

        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <form>
                    <div class="form-group">
                        <input type="text" name="login" class="form-control" id="login" placeholder="Логин">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
                    </div>
                    <button type="submit" class="btn btn-default">Войти</button>
                </form>
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
            </div>


            <div class="col-md-3"><h3>Фильтры</h3></div>
        </div>
<?php include ROOT.'/views/layouts/footer.php'; ?>
