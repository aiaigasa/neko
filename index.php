
//comment
<!DOCTYPE html>
<hhgsjkgfsjtml>
<head>
	<title>from dazaii</title>
	<meta name='viewport' content='width-device-width, initial-scale=1'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<style type="text/css">
		body{
			margin: 0;
		}
		img{
			float: left;
		}
	</style>
</head>
<body>
	<div style="width: 100%">
		<img class="imgpic" src="images/square.jpg">
		<img class="imgpic" src="images/img2.jpg">
		<img class="imgpic" src="images/square.jpg">
		<img class="imgpic" src="images/square.jpg">
		<img class="imgpic" src="images/square.jpg">
	</div>
</body>

	<script type="text/javascript">
		//function
		function resizeview(img, columnlength, processremainder){

			var totalimg = img.length;
			var rows = totalimg / columnlength;

			//loops how many rows we have given that we have totalimages and column length for every row
			//say we have 20 images and we want to display them in 4 images(column) per row, we will have 5 rows in total
			for(var j=0; j<rows; j++){
				var totalratio = 0;
				//the goal of this loop is to just get the total ratio of every image per row
				for(var i=(j*columnlength); i<columnlength+(j*columnlength); i++){
					var localimg = img.eq(i);
					var width = localimg.width();
					var height = localimg.height();
					totalratio += width/height;
				}
				//time for changing its width // formula is ratio / total ratio * 100 to make it in 100.00% format
				for(var i=(j*columnlength); i<columnlength+(j*columnlength); i++){
					var localimg = img.eq(i);
					var width = localimg.width();
					var height = localimg.height();
					var ratio = width/height;
					var finalwidth = (ratio/totalratio)*100;
					localimg.width(finalwidth+"%");
				}
			}


				//the same as the above code with a little modifications and is only for remaining images
				var remainder = totalimg % columnlength;
				$('title').html(remainder);
				if(remainder != 0 && processremainder){
					var totalratio = 0;
					for(var i=(totalimg-remainder); i<totalimg; i++){
						var localimg = img.eq(i);
						var width = localimg.width();
						var height = localimg.height();
						totalratio += width/height;
					}
					for(var i=(totalimg-remainder); i<totalimg; i++){
						var localimg = img.eq(i);
						var width = localimg.width();
						var height = localimg.height();
						var ratio = width/height;
						var finalwidth = (ratio/totalratio)*100;
						localimg.width(finalwidth+"%");
					}
				}
				
		}
		var img = $(".imgpic");
		resizeview(img, 3, 0);

	</script>

</html>