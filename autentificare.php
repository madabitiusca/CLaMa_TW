<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="ro">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8"/>
        <meta itemprop="name" content="ClaMa (Class Manager)">
        <meta itemprop="description" content="Website for college and schools, to see grades and announcements.">
        <title>Autentificare</title>
    </head>
<body>
    <header>
        <a href="" class="logo">ClaMa (Class Manager)</a>
    </header>
    <br>
    <h3>Autentificare</h3>
    <div class="card">
        <form action="includes/signup.inc.php" method="post">
            <table>
                <tr>
                    <td>Username (Contul de pe serverul fenrir):</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password" required></td>
                </tr>
                <tr>
                    <td>Confirm password:</td>
                    <td><input type="password" name="confirm_password" id="confirm_password" required></td>
                </tr>
                <tr>
                    <td colspan="1"><input type="submit" name="submit"  value="Sign in"></td>
                    <td>Ai cont creat? <a href="index.php">Login</a></td>
                </tr>
            </table>
            <?php
      if (isset($_GET["error"])) {
    if($_GET["error"]=="lipsa_input"){
        echo "<p> Contul fenrir sau parola lipseste!</p>";
    }
    else if ($_GET["error"]=="emil_invalid") {
        echo "<p>Contul fenrir nu este valid</p>";
    } else if ($_GET["error"]=="parolanuseportiveste"){
        echo "<p>Parola nu se portiveste</p>";
    } else if ($_GET["error"]=="emil_exista") {
        echo "<p>Cont fenrir utilizat</p>";
    }
}
?>
        </form>
      </div>



<script>

function validatePassword(){
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
}

</script>
</body>

</html>