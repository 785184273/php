<html>
	<head>
		<meta charset = "utf-8">
	</head>
		<body>
			<?php
			var_dump($_GET);
			?>
		</body>
</html>
<!--
	数据的post传递和get传递
					get								post
	外观上：在地址栏上看到传递的参数和值		地址栏上看不到数据
	提交数据大小：提交少量的数据，不同的		提交大量数据，可以通过更改
				  浏览器最大值不一样，ie是2k	配置文件来设置post提交数据的大小
	安全性：安全性低							安全性高
	提交的原理:提交的数据之间是独立的			将所有提交的数据变成一个整体，一起提交，将提交的数据变成xml格式
	灵活性:很灵活								不灵活，post提交必须要有表单的参与才能用post提交
	数据的get传递
		在url后面通过？来传递参数
		可以传递多个参数，没个参数之间用&连接
-->