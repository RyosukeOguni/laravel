<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>属性値の更新サンプル</title>
    <style type="text/css">
        .redText {
            color: red;
        }

    </style>
</head>

<body>
    <p id="showText">こんにちは</p>
    <button type="button" onclick="onP2RedButtonClick()">上の文字を赤に</button><br>
    <button type="button" onclick="onP2DefaultButtonClick()">赤文字を元通りに</button><br>
    <script type="text/javascript" src="{{ asset("js/editAttribute.js") }}"></script>
</body>

</html>
