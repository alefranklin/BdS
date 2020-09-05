<div id="admin-panel">
    <?php
    if(!isset($_GET["action"]) || $_GET["action"] > 4 || $_GET["action"] < 0){
            include("select-admin-action.php");
    } else {
        switch ($_GET["action"]) {
            case 0:
                include("bookings.php");
                break;
            case 1:
                include("add_service_form.html");
                break;
            case 2:
                include("remove_service_form.php");
                break;
            case 3:
                include("add_product_form.html");
                break;
            case 4:
                include("remove_product_form.php");
                break;
        }
        echo "<a href=\"admin.php\">Torna indietro</a>";
    }
    ?>
    <a href="logout.php">Log out</a>
</div>
