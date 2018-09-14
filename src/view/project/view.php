
<body>

<span id="inicio"> </span>

<header>
</header>

<div id="sticky-anchor"></div>
<nav>
	<a href="../"> Volte ao Início </a>
</nav>

<section id="inicio">
      <div class="container">
        <h2 class="text-center text-secondary mb-0">Projetos</h2>
        <hr class=" mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">

				<?php

					foreach ($projetos as $projeto) {
						echo "<div style='text-align: justify; line-height: 2em'>";
			            $img=base64_encode($projeto->getImagem());






			            ?>
			            <div class="row featurette">
				            <div class="col-md-7">
								<h2 class="featurette-heading">

									<?php
										echo "<a href=\"index/". $projeto->getId() ."\">". $projeto->getNome() ."</a></h3>";
									?>
									<!-- <span class="text-muted">It'll blow your mind.</span> -->
								</h2>
								<p class="lead">
									<?= $projeto->getDescricaoCurta() ?>
								</p>
							</div>

			            	<div class="col-md-5">
			            <?php
            				echo "<img class='featurette-image img-fluid mx-auto' src = \" data:image/JPG;charset=utf8;base64,";
            	            echo $img;
            	            echo "\"  alt=\"imagem do projeto\" />";
			            ?>
			            		
			            	</div>
			            <?php

						
						
						echo "<br>";
						echo "</div>";

						echo "<hr class=' mb-5'>";
					}
				?>

				


		
			</div>
		</div>
	</div>
</section>

