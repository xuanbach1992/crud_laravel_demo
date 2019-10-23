<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span>{{$productDes}}</span><br>
    <label>Price: </label>
    <span>{{$price}}$</span><br>
    <label>Discount Percent: </label>
    <span>{{$discount}}%</span><br>
    <label>Discount Amount: </label>
    <span>${{$result}}</span><br>
    <label>Discount Price: </label>
    <span>${{$discountPrice}}</span><br>
</div>
</body>
</html>
