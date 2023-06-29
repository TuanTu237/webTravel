<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gửi mail</title>
</head>
<body>
<h1>{{$title}}</h1>
<h3>Công ty du lịch VIETRIP xin chân thành cám ơn du khách đã đặt tour tại công ty của chúng tôi.</h3>
<h3>Tên khách hàng:{{$customer_name}} </h3>
<p>Chúng tôi mong muốn được nhận phản hồi và đánh giá của Du Khách để giúp dịch vụ của chúng tôi có thể hoàn thiện hơn!</p>
<h4>Để đánh giá chất lượng tour. Xin bạn <a href="{{URL::to('customer-review/'.$booking_code)}}">nhấn vào đây</a></h4>
<h4>{{$body1}}</h4>
</body>
</html>
