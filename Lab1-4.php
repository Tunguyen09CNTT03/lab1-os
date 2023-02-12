<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Bầu chọn cầu thủ xuất sắc</title>
  </head>
  <body>
    <form action="" method="post">
      <label for="players">Chọn cầu thủ:</label>
      <select id="players" name="player">
        <option value="1">Cầu thủ 1</option>
        <option value="2">Cầu thủ 2</option>
        <option value="3">Cầu thủ 3</option>
        <option value="4">Cầu thủ 4</option>
        <option value="5">Cầu thủ 5</option>
        <option value="6">Cầu thủ 6</option>
        <option value="7">Cầu thủ 7</option>
        <option value="8">Cầu thủ 8</option>
        <option value="9">Cầu thủ 9</option>
        <option value="10">Cầu thủ 10</option>
      </select><br><br>
      <input type="submit" value="Bầu chọn">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $player = (int) $_POST["player"];
      // Lưu số phiếu bầu của cầu thủ này vào database
      // ...
      echo "Bạn đã bầu chọn cho cầu thủ $player.<br>";
      // Lấy 3 cầu thủ có số phiếu bầu cao nhất từ database
      // ...
      echo "3 cầu thủ có số phiếu bầu cao nhất là:<br>";
      echo "Cầu thủ X<br>";
      echo "Cầu thủ Y<br>";
      echo "Cầu thủ Z<br>";
    }
    ?>
  </body>
</html>
