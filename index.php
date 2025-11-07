<!--// <?php

// use BcMathNumber;

// $a = "10";
// $b = 10;
// echo $a === $b;

// function tinhTong() {

// };
/** điều khiển
* if (điều kiện){
*     code logic nếu dk đúng (true)
* } else {
 *    code logic nếu dk sai (fale)
* }
*/

// function checkEvenOdd($number){
//     if($number%9 == 0){
//         echo $number. "là số chẵn";
//     }else {
//         echo $number. "là số lẻ";
//     }
// }
// checkEvenOdd(9);



// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $a = $_POST['a'];
//     $b = $_POST['b'];
//     $c = $_POST['c'];

//     if ($a == 0) {
//         echo "Không phải phương trình bậc hai";
//     } else {
//         $haha = $b*$b - 4*$a*$c;
//         if ($haha < 0) {
//             echo "Phương trình vô nghiệm";
//         } elseif ($haha == 0) {
//             $x = -$b / (2*$a);
//             echo "Phương trình có nghiệm kép x = $x";
//         } else {
//             $x1 = (-$b - sqrt($haha)) / (2*$a);
//             $x2 = (-$b + sqrt($haha)) / (2*$a);
//             echo "Hai nghiệm phân biệt: x1 = $x1, x2 = $x2";
//         }
//     }
// }

// ?>

<form method="post">
  a: <input type="text" name="a"><br>
  b: <input type="text" name="b"><br>
  c: <input type="text" name="c"><br>
  <button type="submit">Giải</button>
</form> -->
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
</head>
<body>
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
