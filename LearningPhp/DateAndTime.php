<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $date = date("Y-m-d");
    echo "Today's date is: " . $date;
    echo "<br>";
    $day = date("l");
    echo "Today's day is: ". $day;
    echo "<br>";
    $time = date("h:i:s A");
    echo "Current time is: " . $time;
    ?>

    <?php
    echo "<br>";
date_default_timezone_set("asia/kolkata");
echo "The time is " . date("h:i:sa");
?>
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>";
?>

<?php
echo "<br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>";
?>
<br><br>
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br><br>
    
    <div>&copy; 2010-<?php echo date("Y");?></div>
</body>
</html>