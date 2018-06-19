<?php
session_start();
?>

<html>
<body>
    <h1>Hello, <?php echo $_SESSION["user"]."!"; ?></h1>
    <h2>Welcome!</h2>
</body>
</html>