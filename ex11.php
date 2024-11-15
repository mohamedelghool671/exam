<?php
$color=$_POST['color'] ?? '';
if (isset($_POST['submit'])) {
    setcookie('background_color',$color, time() + (86400));
    header("Location:ex11.php");
}
$backgroundColor = $_COOKIE['background_color'] ?? 'white';
if (isset($_POST['reset'])) {
    setcookie('background_color', '', time() - 3600); 
    header("Location:ex11.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            <?php 
                if (isset($backgroundColor)) {
                echo " background-color:$backgroundColor;";
                }
                ?>
          
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Change Background Color</h1>
    <p>Current Background Color: <strong><?= htmlspecialchars($backgroundColor); ?></strong></p>
    <form method="POST" action="">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="white" >White</option>
            <option value="red">Red</option>
            <option value="yellow" >Yellow</option>
            <option value="green" >Green</option>
            <option value="cyan" >Cyan</option>
            <option value="purple" >Purple</option>
        </select>
        <button name="submit" type="submit">Change Background</button>
        <button name="reset" type="submit">reset Background</button>
    </form>
</body>
</html>
