<!DOCTYPE html>
<html lang="en">
<head>
 <title>Wedding Boss</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="{{URL::to('css/wedding.css')}}">
<link href="https://fonts.googleapis.com/css?family=Ruge+Boogie" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">

 <link rel="shortcut icon" href="url('{{URL::to('images/heart.ico')}})" type="image/x-icon">
 <link rel="icon" href="url('{{URL::to('images/heart.ico')}}" type="image/x-icon">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
<style>
 body{
   height: 100%;
   color: #ffffff;
 }
div:hover{
  cursor: default;
}
p{
  margin: 0px;
}
.indie{
  font-family: 'Indie Flower', cursive;
  font-size: 18px;
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
.couple-name{
  font-weight: 600;
  color: #ffffff;
  font-family: 'Ruge Boogie', cursive;
  /*text-shadow: 2px 2px #000000;*/
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
.logo{
  font-size: 18px;
letter-spacing: 2px;

}
 .wedding-box h1{
   font-size: 60px;

 }
 .box-header,.box-footer{
   padding: 20px;
   background-color: #b76043b3;
   text-shadow: 1px 1px #000000;
 }
 .box-footer{
   position: absolute;
left: 0;
right: 0;
bottom: 0;
padding: 2px;
 }

 .count-down > div {
 	display: inline-block;
 	border: 1px solid #ffffff;
 	width: 120px;
 	height: 120px;
 	margin: 10px;
  box-shadow: inset 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  position: relative;
  font-family: 'Dancing Script', cursive;
  text-shadow: 1px 1px #000000;
 }
 .count-down .number {
 	font-size: 40px;
 	line-height: 100px;
 	text-shadow: 1px 1px #000000;
 }
.count-down .lable {
	position: absolute;
	bottom: 4px;
	width: 100%;
  font-size: 18px
}
.count-down {
	position: absolute;
	bottom: 120px;
	width: 100%;
}
.box-header{
  display: flex;
  justify-content: space-between;

}
.nav>div{
  display: inline-block;
  width: 80px;
}
.info{
  padding: 10px;
  font-family: 'Spectral', serif;
}
.info>div{
  margin-top: 6px;
}
.info>div>i {
	font-size: 18px;
	text-shadow: 1px 1px #fff;
}
.tag{
  position: absolute;
bottom: 90px;
width: 100%;
font-family: 'Dancing Script', cursive;
text-shadow: 1px 1px #000000;

}
@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    .wedding-box h1{
      font-size: 40px;
    }
    .count-down > div{
      width: 60px;
      height: 60px;
      margin: 2px;

    }
    .count-down .number{
      font-size: 26px;
      line-height: normal;
    }
    .count-down .lable{
      font-size: 14px;
    }
    .box-footer{
      font-size: 12px;
    }
    .nav{
      display: none;
    }
}
 </style>
</head>
<body>

<div class="container-fluid image-container">
  <div class="wedding-bg"></div>
  <div class="wedding-box">
    <div class="box-header">
      <div class="logo couple-name">Ankit weds Parul</div>
      <div class="nav">
        <div>About</div>
        <div>Galary</div>
        <div>Ceremony</div>
        <div>Blog</div>
      </div>
    </div>
    <div class="box-body">
          <h1 class="couple-name">Ankit weds Parul</h1>
          <div class="info">
            <div><i class="fa fa-heart-o" aria-hidden="true"></i></div>
            <div>
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <span>JULY 1, 2017 IN DELHI, INDIA</span>
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
          </div>
          <div class='count-down'>
            <div>
              <div id="days" class="number"></div>
              <div class="lable">Days</div>
            </div>
            <div>
              <div id="hours" class="number"></div>
              <div class="lable">Hours</div>
            </div>
            <div>
              <div id="minutes" class="number"></div>
              <div class="lable">Minutes</div>
            </div>
            <div>
              <div id="seconds" class="number"></div>
              <div class="lable">Seconds</div>
            </div>
          </div>
          <div class='tag'>Untill we get married.</div>
    </div>
    <div class="box-footer indie">
      <p>"When I saw you I fell in love and you smiled because you knew. "</p>
      <p>William Shakespear</p>
    </div>


  </div>
</div>
<script>
// Set the date we're counting down to
var countDownDate = new Date("July 1, 2017 17:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    $('#days').text(days);
    $('#hours').text(hours);
    $('#minutes').text(minutes);
    $('#seconds').text(seconds);
    // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    // + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</body>
</html>
