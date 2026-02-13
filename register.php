<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Customer Registration</h2>
    <form action="submit.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="pincode" placeholder="Pincode" required>
        <textarea name="address" placeholder="Shipping Address" required></textarea>
        <input type="text" name="mobile" placeholder="Mobile Number" required>
        <input type="email" name="email" placeholder="Email ID" required>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
