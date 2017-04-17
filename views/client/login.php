<?php include ROOT.'/views/layouts/header.php'; ?>

<h1 class="text-center">Агенство недвижимости "КАПИТАЛ"</h1>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
            <li> -- <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <div class="sign-up-form">
            <form action="#" method="POST">
                <input type="text" name="phone" placeholder="+380671948742" value="<?php echo $phone; ?>">
                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                <input type="submit" name="submit">
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?php include ROOT.'/views/layouts/footer.php'; ?>
