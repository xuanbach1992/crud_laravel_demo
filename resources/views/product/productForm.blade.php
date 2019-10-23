<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border: 1px solid blue;
        }
    </style>
</head>
<body>
<form action="{{route('product')}}" method="post">
    @csrf
    <table>
        <tr>
            <h1>Product Discount Calculator</h1>
            <td>Product Description:</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="text" name="discount">(%)</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Caculator Discount"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>
