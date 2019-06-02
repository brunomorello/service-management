<? 

$test = "Hello World!"; 

$db = new PDO('mysql:host=database;dbname=smanagement;charset=utf8mb4', 'root', 'docker');

$databaseTest = ($db->query('SELECT * FROM employees'))->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bruno Moreno - Service Management</title>
</head>
<body>

    <h1><?= $test ?></h1>

    <p>Docker + PHP + MYSQL + NGINX</p>

    <? foreach ($databaseTest as $row): ?>
        <p>Hello, <?= $row->first_name ?></p>
    <? endforeach; ?>

</body>
</html>