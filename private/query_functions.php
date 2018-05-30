<?php

  //SQL query functions

  function find_by_id($x) {
    global $db;

    $sql = "SELECT * FROM xs ";
    $sql .= "WHERE id='" . db_escape($db, $x) . "' ";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $account = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $account;
  }

?>
