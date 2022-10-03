<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <div class="wrapper">
        <section class="singnup__section">
            <header>Signup</header>
            <form method="post" action="signup.php">
                <div class="signup__field">
                    <label for="#username">
                    <input type="text" name="username" placeholder="Elon Musk" id="username">
                </div>
                <div class="signup__field">
                    <label for="#email">
                    <input type="text" name="email" placeholder="example@gmail.com" id="email">
                </div>
                <div class="signup__field">
                    <label for="#password">
                    <input type="password" name="password" placeholder="qwerty123" id="password">
                </div>
                <div class="signup__field">
                    <label for="#confirmPassword">
                    <input type="password" name="confirmPassoword" placeholder="qwerty123" id="confirmPassword">
                </div>
                <input type="submit" name="submit">
                <div class="signup__error"><?php echo "This is error!";?></div>
            </form>
        </section>
    </div>
</body>
</html>