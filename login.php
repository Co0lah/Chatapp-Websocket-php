<?php
include_once 'header.php';
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat App - Login</header>
            <form action="POST"> <!--  autocomplete="off" ??? -->
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">
                Not registered yet? <a href="index.php">Register now</a>
            </div>
        </section>
    </div>

    <script src="assets/javascript/show-hide.js"></script>
    <script src="assets/javascript/login.js"></script>

</body>

</html>