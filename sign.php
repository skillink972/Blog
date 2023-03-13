<?php include "header.php"; ?>
<body>
<div id="container">
    <!-- zone de connexion -->

    <form action="verification.php" method="POST">
        <h1>LOG IN</h1>

        <label><b>Username</b></label>
        <input type="text" placeholder="Choose a username" name="username" required>

        <label><b>First Name</b></label>
        <input type="text" placeholder="what's your first name ?" name="fname" required>

        <label><b>First Name</b></label>
        <input type="text" placeholder="what's your last name ?" name="lname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter your Password" name="password" required>

        <label><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm your Password" name="confpassword" required>

        <input type="submit" id='submit' value='Sign UP' >

    </form>
</div>
</body>