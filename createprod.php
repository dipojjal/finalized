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
  $name= $_POST['name'];
  $productCode= $_POST['prodcode'];
  $productFamily= $_POST['family'];
  $isActive= $_POST['isActive'];
  $productCountry= $_POST['country'];
  $productState= $_POST['state'];
  $productDescription= $_POST['description'];
  
  $pg_conn = pg_connect(pg_connection_string_from_database_url());
  $query= "Insert into salesforce.Product2 (Name, productcode, family, isactive, country__c, state__c, description) Values ($name, $productCode, $productFamily, $isActive, $productCountry, $productState, $productDescription)";
  
  $createProd = pg_query($pg_conn, $query);
  
  if(!createProd){
    echo"could not create the product";
  }
  
  else{
  echo"Product record has been created in Heroku and Salesforce";
  }
  
?>
  
</body>
</html>
