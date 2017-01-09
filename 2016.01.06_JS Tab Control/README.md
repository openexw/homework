<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>

</head>
```css
<style>
	*{
		font-family:微软雅黑;
		list-style: none;
	}
	#ul{
		height: 50px;
		padding:0;
		margin:0;
		width: 1000px;
		border-bottom:1px solid #ccc;
	}
	#ul>li{
		list-style: none;
		height: 50px;
		text-align: center;
		line-height:50px;
		float:left;
		border-top-left-radius:7px;
		border-top-right-radius:7px;
		padding:0 20px;
	}
	#ul .active{
		border:1px solid #e6e6e6;
		border-bottom:none;
		margin-bottom:2cm;
		background-color: #fff;
	}
	a{
		text-decoration: none;
	}
	div{
		display: none;
	}
	div.active{
		display: block;
		margin-top:100px;
	}
	img{
		width: 80%;
	}
</style>
```
<body>
	<ul id="ul">
		<li class="active"><a href="">Jquery 特效</a></li>
		<li><a href="">JavaScript 特效</a></li>
		<li><a href="">Div+Css 教程</a></li>
		<li><a href="">HTML5 特效</a></li>
	</ul>

	<div class="active">
		<ul class="ul1">
			<li>
				<img src="./img/benbenla-04b.jpg" alt="">
			</li>
		</ul>
	</div>
	<div>
		<ul class="ul1">
			<li>
				<img src="./img/benbenla-08c.jpg" alt="">
			</li>
		</ul>
	</div>
	<div>
		<ul class="ul1">
			<li>
				<img src="./img/Redocn_2010011602474339.jpg" alt="">
			</li>
		</ul>
	</div>
	<div>
		<ul class="ul1">
			<li>
				<img src="./img/u=818364293,1273402639&fm=214&gp=0.jpg" alt="">
			</li>
		</ul>
	</div>
```js
<script>
	var ul = document.getElementById("ul");
	var li = ul.getElementsByTagName("li");
	var div = document.getElementsByTagName("div");

	for(var i=0;i<li.length;i++){
	    li[i].index=i;
	    li[i].onmouseover = function () {
			for(var i=0;i<li.length;i++){
				li[i].className = "";
				div[i].className = "";
			}
			this.className ="active";
			var n=this.index;
			div[n].className = "active";
        }
	}

</script>
```
</body>
</html>