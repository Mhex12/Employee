
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EMPLOYEE MANAGEMENT </h1>

    <?php 
    include_once ("classes.php");


    $employee = new Manager("Angelica", '2000', "IT");
    $newdeveloper = new Developer("Arnie", '1000', "PHP");

    echo $employee->getManager();
    echo "<br>";
    echo $newdeveloper->getMan();
    

    
    ?>
</body>
</html>