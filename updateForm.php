<?php

  include 'connection.php';
  
  $Id= $_POST['Id'];
  
  $searchedProds = pg_query($pg_conn, "DELETE FROM salesforce.Product2 WHERE Id='$Id'");
  
?>
