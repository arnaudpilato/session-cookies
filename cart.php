<?php require 'inc/head.php';
require 'inc/data/products.php';?>
<?php
if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
}?>
    <section class="cookies container-fluid">
        <div class="row"><?php
            if (!isset($_SESSION['carts'])) { ?>
                <p>TODO : Display shopping cart items from $_COOKIES here.</p><?php
            } else {
                foreach ($_SESSION['carts'] as $key) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?= $key; ?>.jpg" alt="<?= "Roger" ?>" class="img-responsive">
                            <figcaption class="caption">
                                <h3><?= $catalog[$key]['name']; ?></h3>
                                <p><?= $catalog[$key]['description']; ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php }}?>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>