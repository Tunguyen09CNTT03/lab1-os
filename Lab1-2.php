<html>
  <head>
    <title>Guestbook</title>
  </head>
  <body>
    <h3>Guestbook</h3>
    <form action="" method="post">
      Name: <input type="text" name="name"><br>
      Email: <input type="email" name="email"><br>
      Comment: <textarea name="comment"></textarea><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <hr>
    <?php
      if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $time = date("Y-m-d H:i:s");

        $file = fopen("comments.txt", "a") or die("Unable to open file!");
        fwrite($file, "$name|$email|$comment|$time\n");
        fclose($file);
      }

      $file = fopen("comments.txt", "r") or die("Unable to open file!");
      while(!feof($file)) {
        $line = fgets($file);
        $line = trim($line);
        if(!empty($line)) {
          list($name, $email, $comment, $time) = explode("|", $line);
          echo "<b>$name</b> ($time)<br>$comment<br>Email: $email<hr>";
        }
      }
      fclose($file);
    ?>
  </body>
</html>
