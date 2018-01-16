<!Doctype html>

<html lang="en">
<?php

include 'head.php'; 
?>

<body>
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle loginform">
            <h2>Login</h2>
            <form class="lform" action="index.php" method="post">
                <div class="row">
                        <input id="username" name="username" placeholder="Username" type="text">
                </div>
                <div class="row">
                        <input id="password" name="password" placeholder="Password" type="password">
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Login<i class="material-icons right">send</i></button>
                </form>     
        </div>
    </div>
</div>
</body>
</html>