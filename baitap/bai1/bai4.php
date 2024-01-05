<!-- Bài 4 : Bài tập về Form và Xử lý dữ liệu nhập:
Tạo một form đơn gồm hai ô input để nhập vào chiều dài và chiều rộng của hình chữ nhật.
Viết một script PHP để xử lý dữ liệu nhập và tính diện tích của hình chữ nhật, sau đó hiển thị kết quả. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 4</title>
</head>

<body>
    <form action="" method="post">
        <label for="x">nhap chieu dai</label>
        <input type="number" name="x" id="x">
        <label for="y">nhap chieu rong</label>
        <input type="number" name="y" id="y">
        <button type="button" onclick="getData()">Tinh</button>
    </form>
    <div id="output"></div>
</body>

</html>
<script>
    function getData() {
        var x = document.getElementById('x').value;
        var y = document.getElementById('y').value;
        console.log(x, y);
        var s = x * y;
        var message = "Diện tích của hình chữ nhật là:";
        document.getElementById('output').innerHTML = "<p>" + message + s;
    }
</script>

<!-- Bài 4 : Bài tập về Form và Xử lý dữ liệu nhập:
Tạo một form đơn gồm hai ô input để nhập vào chiều dài và chiều rộng của hình chữ nhật.
Viết một script PHP để xử lý dữ liệu nhập và tính diện tích của hình chữ nhật, sau đó hiển thị kết quả.
 -->