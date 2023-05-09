<?php
    require_once '../config/connection.php';

    if(isset($_POST['add_category_form'])){ //category
        
        $filters = array(
            'name' => FILTER_SANITIZE_SPECIAL_CHARS
        );

        $insert = filter_input_array(INPUT_POST, $filters);

        $query = "insert into category (Name) values (?)";
        $stmt = $db -> prepare($query);
        $stmt -> execute([$insert['name']]);
        header("Location:../dboard/category.php");
    }