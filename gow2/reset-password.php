<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>


        
<main>
    <div class="container" id="main-content">
	   <section class="section-default">
           <h1>Reset your password</h1>
           <p>An e-mail will be sent to you with instructions on how to reset your password.</p>
           <form action="includes/reset-request.inc.php" method="post">
            <input type="text" name="email" placeholder="Enter you e-mail address...">
            <button type="submit" name="reset-request-submit">Receive new password by e-mail.</button>
           </form>
           <?php
            if(isset($_GET['reset'])){
                if($_GET['reset'] == "success"){
                    echo '<p class=signupsuccess>Check your e-mail!</p>';
                }
            }
            ?>
        </section>
    </div>
</main>
    

<?php include("includes/footer.php");?>

</body>
</html>