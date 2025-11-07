
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Tính toán PHP</title>
</head>
<body>
  <h2>Máy tính đơn giản (PHP + switch case)</h2>

  <form method="post">
    <div>
      <label>Nhập số a:</label>
      <input type="number" name="a" required>
    </div>
    <div>
      <label>Nhập số b:</label>
      <input type="number" name="b" required>
    </div>
    <div>
      <label>Phép tính:</label>
      <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">x</option>
        <option value="/">/</option>
      </select>
    </div>
    <button type="submit" name="submit">Tính</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['operator'];
    $kq = '';

    switch ($op) {
      case '+': $kq = $a + $b; break;
      case '-': $kq = $a - $b; break;
      case '*': $kq = $a * $b; break;
      case '/': $kq = ($b != 0) ? $a / $b : "Không thể chia cho 0!"; break;
      default:  $kq = "Phép tính không hợp lệ!";
    }

    echo "<h3>Kết quả: $a $op $b = <b>$kq</b></h3>";
  }
  ?>
</body>
</html>
