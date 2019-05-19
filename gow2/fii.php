<?php include("includes/a_config.php");?>
<?php include("includes/dbh.inc.php");?>
<?php include("comments.inc.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE);?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
        
<main>
    <div class="container" id="main-content">
	   <h2>Faculty related documents and news</h2>
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

                    echo "<form method='post' action='".setComments($conn)."'>
                          <input type='hidden' name='uid' value='".$_SESSION['userId']."'>
                          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                          <textarea name='message'></textarea><br>
                          <button name='commentSubmit' type='submit'>Comment</button>
                          </form>";
                    getComments($conn);
                }
            }
           else {
               echo '<p class="login-status">You are logged out!</p>';
               getComments($conn);
           }
           ?>
           <?php
           $query = $_GET['query'];
           $query = $query.".pdf";
           search_file('.',$query);

           function search_file($dir,$file_to_search){
               $files = scandir($dir);
               foreach($files as $key => $value){
                   $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
                   if(!is_dir($path)) {
                       if($file_to_search == $value){
                           echo'<tr><td><a href="'.$path.'" target="_blank">'.$file_to_search.'</a></td></tr>';
                           break;
                       }
                   } else if($value != "." && $value != "..") {
                       search_file($path, $file_to_search);
                   }
               }
           }
           ?>
           <body>
           <form action="" method="GET">
               <input type="text" name="query" />
               <input type="submit" name="submit" value="Search" />
           </form>
           </body>
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