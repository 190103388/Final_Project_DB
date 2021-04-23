<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, innitial scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ALSAI</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}

<style type="text/css">
body{
	font-family: 'Poppins', sans-serif;
}
.navbar{
	padding:0px; 
	display: flex;
	align-items: center;
	padding-right: 10px;
	padding-left: 10px;
}
nav{
	flex: 1;
	text-align: right;
}
nav ul{
	padding-top: 12px;
	display: inline-block;
	list-style-type: none;
}
nav ul li{
	display: inline-block;
	margin-right: 20px;

}
a{
	text-decoration: none;
	color: #555;
}
p{
	color: #555;
}
.container{
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;

}
.row{
	display: flex;
	align-items: center;
	flex-wrap:wrap;
	justify-content: space-around;

}
.col-2{
	flex-basis: 50%;
	max-width: 500px;

}
.col-2 img{
	padding: 0px 0;
	padding-bottom: 30px;
	width: 100%;
	
}
.col-2 h1{
	font-size: 45px;
	line-height: 60px;
	margin: 25px 0;
	font-weight: 700;
}

img.imgItem{
	width:100%;
	/*height: 300px;*/
}
.categories{
	margin: 70px 0;
}
.col-3{
	flex-basis: 30%;
	min-width: 100px;
	margin-bottom: 30px;
}
.col-3 img{
	width: 100%;
}
.small-container{
	max-width: 1080px;
	margin: auto;
	padding-left: 25px;
	/*padding-right: 25px;*/


}
.tittle{
	text-align: center;
	margin: 0 auto 80px;
	position: relative;
	line-height: 60px;
	color: #555;
}
/*.tittle::after{
	content: '';
	background: #ff523b;
	width: 100px;
	height: 5px;
	border-radius: 5px;
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
}*/
.col-4{
	flex-basis: 25%;
	padding: 10px;
	min-width: 200px;
	min-height:  200px;
	margin-bottom: 50px;
	transition: transform 0.5s;
	cursor: pointer;
}
.col-4 img{
	width: 100%;
}
.social-icons ul{
            list-style: none;
            display: flex;
            justify-content: center;
        }
        .social-icons ul li a span {
        color: #000;
        width: 34px;
        background: #fff;
        height: 34px;
        text-align: center;
        line-height: 34px;
        border-radius: 20px;
        font-size: 13px;
        margin: 0px 2px;
        border-radius: 20px;
        font-size: 14px;
        margin: 0px 2px;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        transition: 0.5s all;
        -moz-transition: 0.5s all;
        }
</style>
</body>
</html>