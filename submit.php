<!DOCTYPE html>
<html>
<head>
    <title>Customer Info</title>
</head>
<body>
<div class="info-box">
    <h2>Customer Information</h2>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "<p><b>Name:</b> ".$_POST['name']."</p>";
        echo "<p><b>Pincode:</b> ".$_POST['pincode']."</p>";
        echo "<p><b>Shipping Address:</b> ".$_POST['address']."</p>";
        echo "<p><b>Mobile No:</b> ".$_POST['mobile']."</p>";
        echo "<p><b>Email ID:</b> ".$_POST['email']."</p>";
    }
    ?>
    <a href="index.php" class="back-btn">Back to Home</a>
</div>
</body>
</html>
