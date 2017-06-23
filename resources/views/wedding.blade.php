<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="{{URL::to('css/wedding.css')}}">
<link href="https://fonts.googleapis.com/css?family=Ruge+Boogie" rel="stylesheet">
 <style>
 body{
   height: 100%;
 }
 .image-container {

}
p{
  margin: 0px;
}
 .wedding-bg{
   background-image: url('{{URL::to('images/marriage2.jpg')}}');
   height: 100%;
   position: relative;
   opacity: 0.65;
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   position: absolute;
   left: 0;
   right: 0;
   top: 0;
   bottom: 0;
   padding: 0;
   filter: grayscale(20%);
 }
 .wedding-box {
 	position: absolute;
 	left: 2%;
 	top: 16px;
 	right: 2%;
 	bottom: 16px;
 	background-color: rgba(0,0,0,0.3);
  text-align: center;
 }
 .wedding-box h1{
   font-size: 60px;
   font-weight: 600;
   color: #ffffff;
   font-family: 'Ruge Boogie', cursive;
 }
 .box-header,.box-footer{
   padding: 20px;
   background-color: #b76043b3;
 }
 .box-footer{
   position: absolute;
left: 0;
right: 0;
bottom: 0;
padding: 0px;
 }
 </style>
</head>
<body>

<div class="container-fluid image-container">
  <div class="wedding-bg"></div>
  <div class="wedding-box">
    <div class="box-header">
      <span>About</span>
      <span>Galary</span>
      <span>Ceremony</span>
      <span>Blog</span>
    </div>
    <div class="box-body">
          <h1>Ankit weds Parul</h1>
    </div>
    <div class="box-footer">
      <p>"When I saw you I fell in love and you smiled because you knew. "</p>
      <p>William Shakespear</p>
    </div>


  </div>
</div>

</body>
</html>
