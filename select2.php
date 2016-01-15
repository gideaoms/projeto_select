<!DOCTYPE html>
<html>
	<head>
		<title>Projeto Select</title>
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,latin-ext,cyrillic" rel="stylesheet" type="text/css">
		<style type="text/css">
			html {
				font-family: "Open Sans","Helvetica Neue",Arial,Helvetica,sans-serif
			}

			.box {
				float: left;
			    width: 250px;
			    height: 30px;
			    background-color: #A93C40;
			    -webkit-border-radius: 4px;
			    -moz-border-radius: 4px;
			    border-radius: 4px;
			    position: relative;
			    background-image: url(select-arrow.png);
			    background-repeat: no-repeat;
			    background-size: auto 13px;
			    background-position: right center;
			}

			.box span {
				color: #fff;
			    position: absolute;
			    left: 10px;
			    top: 5px;
			}

			.input-select {
				opacity: 0;
			    float: left;
			    width: 100%;
			    height: 100%;
			    cursor: pointer;
			}
		</style>
	</head>
	<body>
		<div class="box">
		<span>Selecione...</span>
			<select class="input-select">
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
				<option>Option 4</option>
				<option>Option 5</option>
			</select>
		</div>
	</body>
</html>
