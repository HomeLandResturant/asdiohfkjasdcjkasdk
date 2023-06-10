<?php
// Import config.php
require_once("config.php");

if(isset($_POST["content"])){
    // Get ID for paste
    $id = uniqid();

    $sql = "INSERT INTO `pastes`(`id`, `content`) VALUES (?,?)";
            
    if($stmt = mysqli_prepare($mysqli, $sql)){
        mysqli_stmt_bind_param($stmt, "ss", $param_id, $param_content);
        
        $param_id = $id;
        $param_content = $_POST["content"];
        
        if(mysqli_stmt_execute($stmt)){
            header("Location: paste.php?p={$id}");
        } else{
            echo(CREATE_INSERT_FAILED);
        }

        mysqli_stmt_close($stmt);
    }
}else{
    exit(CREATE_CONTENT_NOT_DEFINED);
}

?>