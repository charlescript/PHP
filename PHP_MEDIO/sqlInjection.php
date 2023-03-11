<?php
    $autor = addslashes($_POST["autor"]); // * or 1=1

    $sql = "SELECT * FROM posts WHERE autor = '' or 1=1'";

    $sql = "SELECT * FROM posts WHERE autor = '$autor'"; 

?>