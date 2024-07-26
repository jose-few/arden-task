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
    </head>
    <body>
        <h1>Shop</h1>

        <div>
            <h2>Opening times</h2>

            <?php
            /**
             * Updated to include_once
             */

            include_once __DIR__ . '/BaseController.php';
            include_once __DIR__ . '/Model.php';
            //Fixed incorrect file path.
            include_once __DIR__ . '/View.php';
            include_once __DIR__ . '/ShopController.php';
            include_once __DIR__ . '/OpeningTimesModel.php';
            include_once __DIR__ . '/OpeningTimesView.php';
            include_once __DIR__ . '/ItemController.php';
            include_once __DIR__ . '/ItemsModel.php';
            include_once __DIR__ . '/ItemsView.php';

            $controller = new Arden\ShopController();
            $itemsController = new Arden\ItemController();

            $openingTimesView = new Arden\OpeningTimesView($controller->getModelData());
            $itemsView = new Arden\ItemsView($itemsController->getModelData());

            echo $openingTimesView->render();
            ?>
        <div>
            <h2>Top Products</h2>
            <p>( Coming Soon )</p>
        </div>
    </body>
</html>
