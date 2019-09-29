
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card" style="background-color: gray">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container" style="color: purple">
                    <img src="<?php echo IMAGES; ?>logo1.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form action="login/loginDo" method="POST">

                    <input type="text" name="userid" class="form-control input_user" value="" placeholder="username">

                    <input type="password" name="pass" class="form-control input_pass" value="" placeholder="password">
                    <button type="submit" name="button" class="btn login_btn">Login</button>
                </form>
            </div>


        </div>

    </div>
</div>

</body>
</html>
