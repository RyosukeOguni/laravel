<!DOCTYPE html>
<html lang="js">

<head>
    <meta charset="UTF-8">
    <title>属性取得サンプル</title>
</head>

<body>
    <p>
        <input type="text" id="freewordInput" name="freeword">
        <button type="button" onclick="onFreewordButtonClick()">入力値の表示</button>
    </p>
    <p id="showInput">未入力</p>
    <script type="text/javascript" src="{{ asset('js/getAttribute.js') }}"></script>
</body>

</html>
