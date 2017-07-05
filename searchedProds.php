<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
<title></title>
</head>
<body>

<?php
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1);
}
$varSearchedItem= $_POST['search'];
  $searchTerm= '%'.$varSearchedItem.'%';
  
  $pg_conn = pg_connect(pg_connection_string_from_database_url());
  $searchedProds = pg_query($pg_conn, "SELECT Id, sfid, Name, productcode, isactive, country__c, state__c, description FROM salesforce.Product2 where (Name like '$searchTerm' OR productcode like '$searchTerm')");
  echo"<div class=\"panel panel-default\">";
  
  echo "<div class=\"panel-heading\"><center><h1>Searched Products for: ".$varSearchedItem."</h1></center></div>";
  echo "<div class=\"panel-body\">";
  echo "<div class=\"container\"> <table class=\"table table-striped\">";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>SALESFORCE ID</th>";
  echo "<th>NAME</th>";
  echo "<th>PRODUCT CODE</th>";
  echo "<th>ACTIVE</th>";
  echo "<th>COUNTRY</th>";
  echo "<th>STATE</th>";
  echo "<th>DESCRIPTION</th>";
  echo "</tr>";
  
while ($row = pg_fetch_row($searchedProds)) {
  echo "<tr>";
  echo "<td>$row[0]</td>". "<td>$row[1]</td>". "<td>$row[2]</td>". "<td>$row[3]</td>". "<td>$row[4]</td>". "<td>$row[5]</td>". "<td>$row[6]</td>". "<td>$row[7]</td>";
  echo "</tr>";
}
  echo "</table>";
  echo "</div>";
  echo"</div>";
  echo"</div>";
?>
  
</body>
</html>
