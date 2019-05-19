<?php

function setComments($conn){

    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments ORDER BY date desc ";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $id = $row['uid'];
        $sql2 = "SELECT * FROM users WHERE uidUsers='$id'";
        $result2 = $conn->query($sql2);
        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box'><p>";
            echo $row2['uidUsers']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
            echo "</p>
              <form method='post' action='".deleteComments($conn)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button name='commentDelete' type='submit'>Delete</button>
              </form>
              <form method='post' action='editcomment.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <input type='hidden' name='uid' value='".$row['uid']."'>
                <input type='hidden' name='date' value='".$row['date']."'>
                <input type='hidden' name='message' value='".$row['message']."'>
                <button>Edit</button>
              </form>
              </div>";
        }
    }
}

function editComments($conn){
    if(isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: fii.php");
    }
}

function deleteComments($conn){
    if(isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: fii.php");
    }
}