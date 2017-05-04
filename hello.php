<form method="POST">
    <input type="number" name="num1" placeholder="Первое число"/>
    <select name="sign">
        <option>  + </option>
        <option>  - </option>
    </select>
    <input type="number" name="num2" placeholder="Второе число"/>
    <p><input type="submit"></p>
    <p><?= isset($res) ? 'Результат' . $res : '' ?></p>
    <p><?= isset($error) ? 'Ошибка' . $error : '' ?></p>
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['sign']) && isset($_POST['num2'])) {


    switch ($_POST['sign']) {
        case 'plus':
            $res = $_POST['num1'] + (int)$_POST['num2'];
            break;
        case 'minus':
            $res = $_POST['num1'] - (int)$_POST['num2'];
            break;
        default:
            $error = 'Неправельный знак';
    }
}
?>