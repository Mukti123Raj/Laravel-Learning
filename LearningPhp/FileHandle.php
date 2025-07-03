<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file =  fopen("NewFile.txt", "w");
    $text = "This is a dummy data lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam blanditiis obcaecati dolorem eligendi. Dicta eius nostrum, nobis nihil hic veritatis, alias dolor adipisci in, est commodi aut! Veniam iste omnis expedita accusamus nam! Consectetur dolor rem ab aspernatur, adipisci commodi consequuntur consequatur, aliquid reprehenderit animi dolorem sit odio ullam cum!" ;
    fwrite($file,"To start php server: php -S 127.0.0.1:8000 \n");
    fwrite($file,$text);
    ?>
    
    <?php
    $readFile = fopen("NewFile.txt", "r");
    while(!feof($readFile)){
        echo fgetc($readFile);
    }
    fclose($readFile); 
    $readFile = fopen("NewFile.txt", "r");
    
    echo "<br><br>";
    echo fread($readFile, filesize("NewFile.txt"));
    fclose($readFile);

    echo "<br><br>";
    echo readfile("NewFile.txt");

    ?>
</body>
</html>