<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Shop</title>
        <meta name="description" content="Shop">
        <meta name="author" content="Arden University">

        <!-- W3 CSS for ease of reading. -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div style="width: 50%; padding: 20px;">
            <h1>Shop</h1>
            <h2>Opening times</h2>

            <?php
            /**
             * Updated to include_once
             */

            include_once __DIR__ . '/BaseController.php';
            include_once __DIR__ . '/Model.php';
            /**
             * Fixed incorrect file pathing.
             */
            include_once __DIR__ . '/View.php';
            include_once __DIR__ . '/ShopController.php';
            include_once __DIR__ . '/OpeningTimesModel.php';
            include_once __DIR__ . '/OpeningTimesView.php';
            include_once __DIR__ . '/ItemController.php';
            include_once __DIR__ . '/ItemsModel.php';
            include_once __DIR__ . '/ItemsView.php';
            include_once __DIR__ . '/DB.php';
            include_once __DIR__ . '/FormView.php';

            $controller = new Arden\ShopController();
            $itemsController = new Arden\ItemController();


            /**
             * Data loaded from ardenshop.db by Model files and DB class.
             */
            $openingTimesView = new Arden\OpeningTimesView($controller->getModelData());
            $itemsView = new Arden\ItemsView($itemsController->getModelData());

            $form = new Arden\FormView();

            /**
             * No need to echo, as function echos itself.
             */
            $openingTimesView->render();
            ?>
            <!-- Added closing </div> -->
        </div>
        <div style="width: 50%; padding: 20px;">
            <h2>Top Products</h2>

            <?php
            /**
             * As above - no need to echo, as function echos itself.
             */
            $itemsView->render();

            ?>
        </div>
        <div style="width: 50%; padding: 20px;">
            <h2>Contact Us</h2>

            <?php
            $form->render();
            ?>
        </div>
    </body>
</html>
