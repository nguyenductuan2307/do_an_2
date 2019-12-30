<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	body 
	{
		background-color: #FFFF99;
	}
	ul{
	margin: 0px;
	padding: 0px;
	float: left;
	list-style: none;
	margin-top: 25px;
	margin-right: 10px;
      }
    ul li{
	display: inline-block;
		}
    ul li a {
	text-decoration: none;
	color: white;
	padding: 7px 40px;
	border: 3px solid white;
	display: block;
	font-weight: bolder;
	background-color: blue ;
	}
	ul li a:hover {
	border: 3px solid white;
	background-color: blue ;
	color: white;
	height: 25px;	
		}
</style>

</head>
<body>
	<div id="menu" > 
	<ul>
		<li> <a href="admin"> Thông tin nhân viên </a> </li>
		<li> <a href="sanpham"> Quản lí Sản phảm  </a> </li>
		<li> <a href="ncc"> Quản lí nhà cung cấp  </a></li>
	</ul>
	</div>
	<button style="float: right;" ><a href="logout"> Logout </a></button>
</body>
</html>