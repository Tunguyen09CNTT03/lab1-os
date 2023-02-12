<form method="post">
  <table>
    <tr>
      <td colspan="2"><h3>Chào Theo Giờ</h3></td>
    </tr>
    <tr>
      <td>Nhập Giờ:</td>
      <td><input type="text" name="txtGio"></td>
    </tr>
    <tr>
      <td colspan="2">
        <?php
          if (isset($_POST['txtGio'])) {
            $hour = intval($_POST['txtGio']);
            if ($hour >= 0 && $hour < 12) {
              echo "Chào buổi sáng!";
            } else if ($hour >= 12 && $hour < 18) {
              echo "Chào buổi chiều!";
            } else {
              echo "Chào buổi tối!";
            }
          }
        ?>
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Gửi"></td>
    </tr>
  </table>
</form>
