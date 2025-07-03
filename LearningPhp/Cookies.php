<?php
echo"HEllo";
setcookie("fruit","Apple", time()+(86400));   
echo "Cookie added Successfully";

echo "<br><br>";

if (isset($_COOKIE["fruit"])) {
    echo "Cookie is set!<br>";
    echo "Value is: " . $_COOKIE["fruit"];
    echo "<br>";
    echo "Cookie expires in 1 day";
}else{
    echo "Cookie is not set";
}

?>