<div>  </br> </br></br>
       <div class="logout" id="login-wrapper">  
            <?php if(session()->getFlashdata('flash_msg')):?>
            <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
            <?php endif;?> 
        <form action="/user/logout" method="post">
            <div class="file-input-container">
        <div class="inputBox">
                    <input type="submit" value="Logout" id="btn">
                </div>
        </form></div></div></div>
<footer>
        <p>&copy; 2023 - Universitas Pelita Bangsa</p>
    </footer>
    </div>
</body>
</html>