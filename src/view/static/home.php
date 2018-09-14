

<!--

<nav class="link">

	<ul class="nav justify-content-center">
		<li class="nav-item">
			<a class="nav-link active" href="#inicio"> Início</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#sobre"> Institucional</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#editais"> Editais</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#projetos"> Projetos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#equipe"> Equipe</a>
		</li>
	</ul>

</nav>


-->


<!-- Portfolio Grid Section 
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/game.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

-->

   
					

    <!-- Noticias Section -->
    <section id="inicio">
      <div class="container">
        <h2 class="text-center text-secondary mb-0">Ultimas Notícias</h2>
        <hr class=" mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <?php

            	foreach ($novidades as $novidade) {

            		$img=base64_encode($novidade->getImagem());
	
            ?>
            		<div style="text-align: justify">
                        <h3 >
                        	

                        		<?= $novidade->getTitulo() ?>
                        	

                        </h3>

            			<?php 

            			if($novidade == reset($novidades)) {

            			?>
            			
            				<img src="data:image/JPG;charset=utf8;base64,<?= $img;?>"/> 
            	        <?php
            			}
            			echo "" . $novidade->getDescricao();

            			?>
            			
            		</div>
            		<?php
            	}
            ?>

          </div>
        </div>

        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-info" href="novidades/index">
            <i class="fa fa-info mr-2"></i>
            Ver Mais
          </a>
        </div>

      </div>
    </section>



     <!-- Sobre Section -->
    <section class="bg-warning text-black mb-0" id="sobre">
      <div class="container fix-font" style="font-family: sans-serif">
        <h2 class="text-center text-black">Fábrica de Software da UFMS</h2>
        <hr class=" mb-5">
        <div class="row">
          <div class="col-lg-11 ml-auto">
            <p class="lead">
            	<?php
          			echo $sobre;
          		?>
            </p>
          </div>
          
        </div>
      </div>
    </section> 





<!-- Editais Section -->
    <section class="bg-transparent text-black mb-0" id="editais">
      <div class="container fix-font" style="font-family: sans-serif">
        <h2 class="text-center text-black">Editais</h2>
        <hr class=" mb-5">
        <div class="row">
          <div class="col-lg-11 ml-auto">
            <p class="lead">
            	<?php
				foreach ($editais as $edital) {						
						// criar ancora
						?>
						<li>
			            	
			            		<?php echo $edital->getTitulo()?>
			            	    
			            </li>
						<?php
					}
			?>
            </p>
          </div>
          
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-info" href="editais/index">
            <i class="fa fa-info mr-2"></i>
            Ver Mais
          </a>
        </div>
      </div>
    </section> 




<!-- Projetos Grid Section -->
    <section class="bg-danger portfolio" id="projetos">
      <div class="container">
        <h2 class="text-center  text-black mb-0">Projetos</h2>
        <hr class=" mb-5">
        <div class="row">
        	<?php
        		$cont = 0;
				foreach ($projetos as $projeto) {
				
				$cont++;
			?>

			<div class="col-md-6 col-lg-4">
			  <a class="portfolio-item d-block mx-auto" href="<?= '#portfolio-modal-' . $cont ?>">
			    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
			      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
			       
			      </div>
			    </div>
			    <?php

			    			echo "<div style='text-align: justify' ";
			    			
			    			echo"class=\"project text-black\"";
			    			
			    			
			    			echo ">";
			                $img=base64_encode($projeto->getImagem());
			    			echo "<img class='img-fluid displayed' style='max-width: 200px;
    max-height: 200px; ' src = \" data:image/JPG;charset=utf8;base64,";
			                echo $img;
			                echo "\" alt=\"imagem do projeto\" />";
			    		
			    			echo "<h3 class='center'><a href=\"/?pagina=projetoIndividual&number=". $projeto->getId() ."\">". $projeto->getNome() ."</a></h3> </br>";
			                echo "<div class = 'descricao' style='text-just: '>";
			                echo "<p>" . $projeto->getDescricaoCurta() . "<p>";

			                echo "</div>";
			    			echo "<br>";
			    			echo "</div>";
			    ?>
			  
			  </a>
			</div>


          <?php




			
				}
			?>
			
		</div>
		<div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="projetos/index">
            <i class="fa fa-info mr-2"></i>
            Ver Mais
          </a>
        </div>
	</div>


	<!-- Projetos Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"> <?= $projetos[0]->getNome() ?> </h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5"> <?= $projetos[0]->getDescricao() ?> </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projetos Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"> <?= $projetos[1]->getNome() ?> </h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5"> <?= $projetos[1]->getDescricao() ?> </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projetos Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"> <?= $projetos[2]->getNome() ?> </h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5"> <?= $projetos[2]->getDescricao() ?> </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>


</section>

<!-- fim Projetos -->




<!-- Equipes Grid Section -->
    <section class="bg-transparent portfolio" id="equipe">
      <div class="container">
        <h2 class="text-center  text-black mb-0">Equipes</h2>
        <hr class=" mb-5">
        <div class="row">
        	<?php

				foreach ($alunos as $aluno) {
				
				$cont++;
			?>

			<div class="col-md-6 col-lg-4">
			  <a class="portfolio-item d-block mx-auto" href="<?= '#portfolio-modal-' . $cont ?>">
			    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
			      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
			       
			      </div>
			    </div>
			    <?php

			    	echo "<div class=\"membro\">";
					$img=base64_encode($aluno->getImagem());
					echo "<img class='img-fluid displayed' style='max-width: 200px;
    max-height: 200px; ' src = \" data:image/JPG;charset=utf8;base64,";
					echo $img;
					echo "\" class=\"eq\" alt=\"imagem do projeto\" />";
					
					echo "<h3>" . $aluno->getNome() . "</h3>";
					echo "<div class = 'descricao'>";
					echo "". $aluno->getDescricao() ."";
					echo "</div>";
					echo "</div>";
			    ?>
			  
			  </a>
			</div>


          <?php




			
				}
			?>
			
		</div>
		<div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-info" href="equipe/index">
            <i class="fa fa-info mr-2"></i>
            Ver Mais
          </a>
        </div>
	</div>


	<!-- Projetos Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"> <?= $alunos[0]->getNome() ?> </h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5"> <?= $alunos[0]->getDescricao() ?> </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projetos Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"> <?= $alunos[1]->getNome() ?> </h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5"> <?= $alunos[1]->getDescricao() ?> </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projetos Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"> <?= $alunos[2]->getNome() ?> </h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5"> <?= $alunos[2]->getDescricao() ?> </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>



</section>




	
	
	