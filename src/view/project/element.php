
<body>

<span id="inicio"> </span>

<header>
</header>

<div id="sticky-anchor"></div>
<nav>
	<a href="../index"> Volte ao Início </a>
</nav>


<section id="inicio">
    <div class="container">
        <h2 class="text-center text-secondary mb-0">Projetos</h2>
        <hr class=" mb-5">
        <div class="row">
          	<div class="col-lg-8 mx-auto">
			<?php
				
				echo "<h1>".$projeto->getNome()."</h1>";
            	//echo $projeto->getNome() . "<br>";
				$img=base64_encode($projeto->getImagem());
				echo "<img class='displayed' src = \" data:image/JPG;charset=utf8;base64,";
	            echo $img;
	            echo "\"  />";

	            echo "<div style='text-align: justify; line-height: 2em'>";

	            echo "" . $projeto->getDescricao() . "";

	            echo "</div>";
	            echo "<br>";
	            
			?>

			</div>
		</div>
	</div>
</section>