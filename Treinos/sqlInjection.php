<?php
   $autor = addslashes($_POST["Charles"]);

    $sql = "SELECT * FROM POSTS WHERE autor = "$autor" ";

    echo $sql;
?>