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
                if($_SESSION['userId']==1){
                    echo '<p class="admin">Logged in as admin!</p>';
                    echo '<form action="upload_file_fii.php" method="post" enctype="multipart/form-data">
                          <input type="file" name="file" size="50" />
                          <br />
                          <input type="submit" value="Upload" />
                          </form>';
                }
            }
           else {
               echo '<p class="login-status">You are logged out!</p>';
           }
           ?>
           <div class="table-responsive">
               <table class="table table-striped table-bordered">
                   <thead>
                   <tr>
                       <th>Filename</th>
                   </tr>
                   </thead>
                   <tbody>

                   <?php
                   $files = scandir('./uploads/fii/');
                   rsort($files);
                   foreach($files as $file)
                   {
                       $ext = pathinfo($file, PATHINFO_EXTENSION);
                       if($ext == 'pdf' || $ext == 'word'){
                           echo'<tr><td><a href="/gow2/uploads/fii/'.$file.'" target="_blank">'.$file.'</a></td></tr>';
                       }
                   }
                   ?>
                   </tbody>
               </table>
           </div>
        </section>
    </div>
</main>
    

<?php include("includes/footer.php");?>

</body>
</html>