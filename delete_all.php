<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "users_db");

if(isset($_POST["id"])) {
    $ids = $_POST['id'];
    foreach($ids as $id) {
        $query = "DELETE FROM users WHERE id = $id";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            echo $return = "Successfully deleted";
            exit();
        } else {
            echo $return = "Something went wrong";
        }
    }
}