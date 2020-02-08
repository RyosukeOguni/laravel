<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>速習Laravel</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 id="headTitle">idによる要素取得</h1>
    <button type="button" onclick="onH1ButtonClick()">h1要素の取得</button>
    <button type="button" onclick="onH1TextButtonClick()">h1テキストの取得</button>
    <button type="button" onclick="onH1TextAltButtonClick()">h1テキストの書換</button>
    <script type="text/javascript" src="{{ asset('js/variables.js') }}"> </script>

    <table class="table">
        <thead>
            <tr>
                <th>署名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
            <tr>
                <td>{{ $record->title }}</td>
                <td>{{ $record->price }}</td>
                <td>{{ $record->publisher }}</td>
                <td>{{ $record->published }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
