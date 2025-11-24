<?php
if(isset($_POST["input"])) {
    echo "You entered: " . htmlspecialchars($_POST["input"]);
}
?>
