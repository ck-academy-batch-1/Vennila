<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
  
$_SESSION["Rollnumber"] = "03";
$_SESSION["Name"] = "mani";
echo "Session variables are set.";
?>

</body>
</html>