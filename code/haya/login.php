<html>
<head><title>Login</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<script type="text/javascript">
	jQuery(function($){
		$("p.Question").css({cursor:"pointer"}).click(function(){
		$(this).next().toggle("normal");
		});
	});
	</script>
	
	<style type="text/css">
	#QandA .Question{ /*標題的CSS定義*/
		width: 100%;
		border-bottom: 1px #aaa dotted;
	}

	#QandA .Answer{ /*內文的CSS定義*/
		display: none;
		width: 100%;
		padding: 10px 0px;
		background: #efefef;
		border-bottom: 1px #aaa dotted;
	}

	#QandA:hover{ /*滑鼠移至區塊變色*/
		background: #ebf6f7;
	}

	</style>
</head>
<body>


<br> 
  <a href="register.html">註冊</a> 

  <div id="QandA">
	<p class="Question">Question - 1</p>
	<div class="Answer">
		<form action="index.php" method="POST">
帳號:<br />
<input type="text" name="user">
<br />
密碼:<br />
<input type="password" name="password">
<br />
<input type="button" style="font-size:24px; right:0px; float:right;" value="X" onClick="javascript:window.location.reload()" />
<input type="submit" name="submit" value="Login">
<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
</form>
	</div>
</div>

<div id="QandA">
	<p class="Question">Question - 2</p>
	<div class="Answer">
	<p>Answer - 2</p>
</div>

</div>
</body>
</html>