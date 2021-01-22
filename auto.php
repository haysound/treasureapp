<?php

    if (isset($_POST['other_payment'])){
        $other_payment = $_POST['other_payment'];
        include 'Model.php';
        $model = new Model();
        $rows = $model->fetch_Subband($other_payment);
         echo json_encode($rows);
    }