<?php include "header.php"; ?>
<body>
<div id="container">
    <!-- zone de connexion -->

    <form action="verification.php" method="POST">
        <h1>LOG IN</h1>

        <label><b>Username</b></label>
        <input type="text" placeholder="Enter your username" name="username" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter your Password" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
</body>