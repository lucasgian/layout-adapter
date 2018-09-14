
<body>

<span id="inicio"> </span>

<header>
</header>

<div id="sticky-anchor"></div>
<nav>
	<a href="../"> Volte ao Início </a>
</nav>

    <!-- Noticias Section -->
    <section id="inicio">
      <div class="container">
        <h2 class="text-center text-secondary mb-0">Editais</h2>
        <hr class=" mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
				<script>
					function alterna(id) {
						if(document.getElementById("areaPdf_"+id).hidden == ""){
						    //alert(document.getElementById("pdfButton").display);
						    document.getElementById("areaPdf_"+id ).hidden = "hidden";
						    document.getElementById("pdfButton_"+id).innerHTML="Mostrar PDF";
						}
						else{
						    //alert(document.getElementById("pdfButton"));
							document.getElementById("areaPdf_"+id).hidden = "";
						    document.getElementById("pdfButton_"+id).innerHTML="Ocultar PDF";
						}							
					}
				</script>

				<?php  	

				
				foreach ($editais as $edital) {
					echo "<div style='text-align: justify; line-height: 2em'>";
		            echo "<h3>" .$edital->getTitulo() . "</h3>";

	                $pdf=base64_encode($edital->getArquivo());
	               	echo "<div hidden id=\"areaPdf_". $edital->getId() ."\">";
	                echo "<br><embed  src = \" data:application/pdf;charset=utf8;base64,  ";
	                echo  $pdf;
	                echo  " \" width=\"800\" height=\"600\" />";
	                echo "</div>";
	                echo "<div class=\"informacoes\">";
		            echo "" . $edital->getDescricao() . "";
		            echo "</div>";
		            echo "
		           				
		           				<button class = 'btn btn-xl btn-outline-danger' type='button' id=\"pdfButton_".$edital->getId()."\"
		           											 onclick=\"alterna(". $edital->getId() .")\">
		           					
		           					Mostrar PDF
		           				</button>";

		           				
					echo "</div>";
					
					echo "<hr class=' mb-5'>";

				}

				?>
				
			</div>
		</div>
	</div>
</section>


<!-- <i class='fa fa-file-pdf-o mr-2'></i>-->