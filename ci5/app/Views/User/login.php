<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/login.css');?>">
    <title>Login</title>
</head>

<body>
    <section>
        <div class="leaves">
            <div class="set">
                <div><img src="/img/leaf_01.png"></div>
                <div><img src="/img/leaf_02.png"></div>
                <div><img src="/img/leaf_03.png"></div>
                <div><img src="/img/leaf_04.png"></div>
                <div><img src="/img/leaf_01.png"></div>
                <div><img src="/img/leaf_02.png"></div>
                <div><img src="/img/leaf_03.png"></div>
                <div><img src="/img/leaf_04.png"></div>
            </div>
        </div>
        <img src="/img/bg.jpg" class="bg">
        <img src="/img/girl.png" class="girl">
        <div class="login" id="login-wrapper">
            <h2>Sign in</h2>
            <?php if(session()->getFlashdata('flash_msg')):?>
            <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
            <?php endif;?>
            <form action="" method="post">
                <div class="inputBox">
                    <label for="InputForEmail"></label>
                    <input type="email" placeholder="Email" name="email" class="form-control" id="InputForEmail"
                        value="<?= set_value('email') ?>">
                </div>
                <div class="inputBox">
                    <label for="InputForPassword"></label>
                    <input type="password" placeholder="Password" name="password" class="form-control" id="myInput" > 
                    <label class="checkbox-label">
  <input type="checkbox" onclick="myFunction()" class="checkbox-input">
            
                    <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                    </script>
                </div><br/>
                <div class="inputBox">
                    <input type="submit" value="Login" id="btn">
                </div>
                <div class="group">
                    <a href="#">Forget Password</a>
                    <a href="3">Sign Up</a>
                </div>
        </div>
        <img src="/img/trees.png" class="trees">
    </section>

</body>

</html>