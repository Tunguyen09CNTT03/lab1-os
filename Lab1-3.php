<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Giải phương trình bậc hai</title>
  </head>
  <body>
    <form action="" method="post">
      <label for="a">Nhập giá trị a:</label>
      <input type="text" id="a" name="a"><br><br>
      <label for="b">Nhập giá trị b:</label>
      <input type="text" id="b" name="b"><br><br>
      <label for="c">Nhập giá trị c:</label>
      <input type="text" id="c" name="c"><br><br>
      <input type="submit" value="Giải phương trình">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $a = (float) $_POST["a"];
      $b = (float) $_POST["b"];
      $c = (float) $_POST["c"];
      $delta = $b * $b - 4 * $a * $c;
      if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "x1 = $x1, x2 = $x2";
      } elseif ($delta === 0) {
        $x = -$b / (2 * $a);
        echo "x = $x";
      } else {
        echo "Phương trình vô nghiệm";
      }
    }
    ?>
  </body>
</html>
