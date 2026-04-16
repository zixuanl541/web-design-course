<?php
setcookie("uName", "", time() - 3600);

echo "<h2>Cookie has been deleted.</h2>";
echo "<a href='index.php'>Back to Login</a>";
?>