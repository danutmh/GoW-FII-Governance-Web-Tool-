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
	   <h2>GoW</h2>
       <section class="section-default"> 
           <?php
            if(isset($_SESSION['userId'])){
                echo '<p class="login-status">You are logged in!</p>';
            }
           else {
               echo '<p class="login-status">You are logged out!</p>';
           }
           ?>
        </section>
    </div>
</main>
    

<?php include("includes/footer.php");?>

</body>
</html>