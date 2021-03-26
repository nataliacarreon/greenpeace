<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="animate.css">

    <link rel="stylesheet" href="board.css">

    <title>Greenpeace</title>
</head>
<body>
    <header></header>
    <div class="container-one">
        <div id="scene">
            <div data-depth="0.2"><img class="banner" id="d1" src="images/dibujitos1.png"></div>
            <div data-depth="0.4"><img class="banner" id="d2" src="images/dibujitos2.png"></div>
            <div data-depth="0.6"><img class="banner" id="d3" src="images/dibujitos3.png"></div>
            <div><div data-depth="0.3" ><div class="titulo tlt" id="title">Less Trends</div></div>
            <div data-depth="0.3" ><div class="titulo tlt" id="title">More Awareness</div></div></div>
            

          </div>
    </div>
    <div class="container-two">
        <div>Infografía</div>
    </div>

    <div class="container-tree">
        <div class="titulo3"><h3>Firma Online</h3></div>
        <div id ="group">
			<header id ="header">
      	<div class = "blocking" id = "blocking"></div>
				<h4> Draw with mouse inside the blackboard</h4>
			</header>
				<nav id ="menu">
				 	<ul id ="buttons">
						<li  class = "buttonMenu" id ="delete">Clean</li>
						<li  class = "buttonMenu" id ="change">Color Swift</li>
						<!-- <li  class = "buttonMenu" id ="stroke">Paint-mode</li> -->
			    	</ul>
					<ul id = "question">
				 		<span>Do you want to erase your draw?</span>
				 		<li  class = "buttonMenu" id ="Yes">Yes</li>
				 		<li  class = "buttonMenu" id ="No">No</li>
			 		</ul>
					<table id = "colors">
						<tr>
							<td><div class = "color" name = "#0000FF" id = "blue"></div></td>
							<td><div class = "color"  name = "#01DFD7" id = "turquoise"></div></td>
							<td><div class = "color"  name = "#FFFF00" id = "yellow"></div></td>
							<td><div class = "color"  name = "#DF0101" id = "red"></div></td>
							<td><div class = "color"  name = "#FE2EF7" id = "pink"></div></td>
						</tr>
						<tr>
							<td><div class = "color" name = "#0174DF" id = "cobalt"></div></td>
							<td><div class = "color" name = "#00FF40" id = "lemon"></div></td>
							<td><div class = "color" name = "#FF8000" id = "orange"></div></td>
							<td><div class = "color" name = "#FA8258" id = "salmon"></div></td>
							<td><div class = "color" name = "#642EFE" id = "purple"></div></td>
						</tr>
						<tr>
							<td><div class = "color" name = "#58D3F7" id = "cyan"></div></td>
							<td><div class = "color" name = "#298A08" id = "green"></div></td>
							<td><div class = "color" name = "#F5BCA9" id = "cream"></div></td>
							<td><div class = "color" name = "#F5A9F2" id = "bubblegum"></div></td>
							<td><div class = "color" name = "#9A2EFE" id = "lavander"></div></td>
						</tr>
				 	</table>
		  	</nav>
		 <section id = "section">
				<span class = 'instruction' id = 'instruction'>-If you want to delete some areas, press "d" inside the blackboard to use the eraser instead.-</span>
				<canvas id = "backGround" height = "600px" width = "800px"></canvas>
				<canvas class = "canvas" id = "zone" height = "600px" width = "800px"></canvas>
				<canvas class = "canvas" id = "zoneAux" height = "600px" width = "800px"></canvas>
				<div id = "star"></div>
 		 </section>
		 <aside id = "aside"></aside>
	 </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/jschr/textillate/master/assets/jquery.lettering.js"></script>
    <script src="https://cdn.rawgit.com/jschr/textillate/master/jquery.textillate.js"></script>

    <script>var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene, {
  relativeInput: true,
  invertX: false,
  invertY: false
}); 
        </script>
        <script>$('.tlt').textillate({ loop: false, in: {
            // set the effect name
          effect: 'fadeIn',
          delayScale: 14.5,
          delay: 3.5,
          sync: false,
          shuffle: true,
          reverse: false,
        }, 
        // out: {
            
        //   effect: 'fadeOut',
        //   delayScale: 7.5,
        //   delay: 3.5,
        //   sync: false,
        //   shuffle: true,
        // } 
        });
        </script>
        <script type="text/javascript" src="./board.js"></script>


</body>
</html>