<?php
require_once ('../models/reservationModel.php');
function deletecours($reservationId){

    if (isset($_POST['delete_reservation'])) {
        $reservationId = $_POST['delete_reservation'];
        deleteResa($reservationId);
        header('Location: ' . $_SERVER['PHP_SELF']);
        ob_end_flush();
        exit();
    }

}