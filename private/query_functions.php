<?php

  function find_all_salamanders() {
    global $db;

    $sql = "SELECT * FROM salamanders ";
    $sql .= "ORDER BY position ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function insert_salamander($salamander) {
    global $db;
    $sql = "INSERT INTO salamanders";
    $sql .="(name, habitat, description) ";
    $sql .="VALUES(";
    $sql .="'" . $salamander['name'] . "',";
    $sql .="'" . $salamander['habitat'] . "',";
    $sql .="'" . $salamander['description'] . "'";
    db_disconnect($db);
     exit;
  }

  function update_salamander($salamander) {
    global $db;

    $sql = "UPDATE salamanders SET ";
    $sql .= "name'" . $salamander['name'] . "', ";
    $sql .= "position='" . $salamander['habitat'] . "', ";
    $sql .= "visible='" . $salamander['description'] . "' ";
    $sql .= "WHERE id='" . $salamander['id'] . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }

  function delete_salamander($id) {
    global $db;

    $sql = "DELETE FROM salamanders ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }


  function find_salamander_by_id($id) {
    global $db;

    $sql = "SELECT * FROM salamanders ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $page = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $page; // returns an assoc. array
  }

  function update_salamanders($salamander) {
    global $db;

    $sql = "UPDATE salamanders SET ";
    $sql .= "salamander_id='" . $salamander['salamander_id'] . "', ";
    $sql .= "name='" . $salamander['name'] . "', ";
    $sql .= "habitat='" . $salamander['habitat'] . "', ";
    $sql .= "description='" . $salamander['description'] . "', ";
    $sql .= "WHERE id='" . $salamander['id'] . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }

?>
