<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <label for="">Nhập số a</label>
            <input type="number" name="a">
        </div>
        <div>
            <label for="">Nhập số b</label>
            <input type="number" name="b">
        </div>
        <div>
            <label for="">Phép tính</label>
            <select name="operator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select>
        </div>
        <button type="submit">Tính</button>
    </form>
 <?php
    //if(isset($_POST['submit'])){
    //  $a = $_POST['a'];
    //  $b = $_POST['b'];
    //  $op = $_POST['operator'];
    //  $kq = '';

    // switch ($op) {
    //   case '+': $kq = $a + $b; break;
    //   case '-': $kq = $a - $b; break;
    //   case '*': $kq = $a * $b; break;
    //   case '/': $kq = ($b != 0) ? $a / $b : "Không thể chia cho 0!"; break;
    //   default:  $kq = "Phép tính không hợp lệ!";
    // }

    // echo "<h3>Kết quả: $a $op $b = <b>$kq</b></h3>";
    // }
 ?>
</body>
</html>