<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
	//or using this script
	/*$(document).ready(function(){
		resizeDiv();
	});

	window.onresize = function(event) {
		resizeDiv();
	}

	function resizeDiv() {
		vpw = $(window).width();
		vph = $(window).height();
		$('.bg').css({'height': vph + 'px'});
	}*/
  </script>
  <style>
	@media(min-width: 768px){
		.bg{
			min-height: 100%;
		}
	}
	.bg{
		position: relative;
		background-image: url("http://vitaxel.beedotest.info/wp-content/uploads/2015/11/3-step.png");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center top;
		background-attachment: fixed;
		position:fixed !important;
		position:absolute;
		top:0;
		right:0;
		bottom:0;
		left:0;
	}
  </style>
</head>
<body>

<div class="bg">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
