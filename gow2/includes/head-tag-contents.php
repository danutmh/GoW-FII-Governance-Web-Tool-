<?php
    session_start();
?>
<title><?php print $PAGE_TITLE;?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
	<meta name="description" content="" />
	<meta name="keywords" content="" /> 
<?php } ?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GoW</title>
        <meta name="description" content="Gow">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="header-login">
                    <?php
                        if(isset($_SESSION['userId'])){
                            echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit">Logout</button>
                            </form>';
                        }
                        else {
                            echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/E-mail" size="25">
                            <input type="password" name="pwd" placeholder="Password" size="25">
                            <button type="submit" name="login-submit">Login</button>
                            </form>
                            <a class="content_box" href="signup.php">Signup</a>';
                        }
                    ?>
                </div>
            </nav>
        </header>
    </body>
</html>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
	#main-content {
		margin-top:20px;
	}
	.footer {
		font-size: 14px;
		text-align: center;
	}
</style>