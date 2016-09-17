<?php
try{
  $dbh = new PDO("mysql:host=localhost; dbname=bazatest", "root", "");
}catch(PDOException $e){
  file_put_contents('log.txt', $e->getMessage());
}
  // $dbh->exec("INSERT INTO testtable(cityname) VALUES ('georgia')");
  // $dbh->exec("DELETE FROM testtable WHERE id=1");
  // $dbh->exec("INSERT INTO testtable(cityname) VALUES ('საქართველო')");
  $dbh->query("SET NAMES 'utf8'");
  $cityname = "სომხეთი";
  $sth = $dbh->prepare("INSERT INTO testtable(cityname) VALUES (:cityname)");
  $sth->bindParam('cityname', $cityname);
  $sth->execute();
?>
