<!-- Connecting -->
<?php
$databaseName = 'MPEISEL_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'mpeisel_writer';
$password = 'yEbL0LSFPQLM';

$pdo = new PDO($dsn, $username, $password);

?>
<!-- Connection complete -->