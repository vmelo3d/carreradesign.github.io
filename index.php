<!DOCTYPE html>
<!-- 

Site Produzido Por: vinicius melo.

Web:		www.carreradesign.com.

Email:		viinniisan@outlook.com.

-->
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="robots" content="index, follow" />
  	<link rel="stylesheet" type="text/css" href="Css/style.css">
  	<link rel="stylesheet" href="Css/normalize.css">
  	<link rel="stylesheet" href="slide/css.css"/>
	<title>CarreraDesign: Criação de sites</title>
</head>
<body>

<div class="container clearfix">
	<header class="header">
	<fieldset class="busca">
		<input type="text" name="busca" maxlength="30" value="Buscar ...">
		<input type="submit" name="Buscar" value="Buscar">
	</fieldset>
	<img src="imagem/logo.png">
	 <nav class="menu">
        <ul>
          <li><a href="index.php" title="Pagina incial Carrera Design">Home</a></li>
          <li><a href="sobre.php" title="Veja quem somos!">Sobre</a></li>
          <li><a href="blog.php" title="Blog carrera design">Blog</a></li>
          <li><a href="contato.php" title="Alguma duvida? entre em contato com a carrera design">Contato</a></li>
          <li><a href="portfolio.php" title="Veja oque a carrera design ja fez...">Portfólio</a></li>
          <li><a href="orcamento.php" title="Solicite seu orçamento">Orçamento</a></li>
          <li><a href="videos.php" title="Ultimos vídeo do nosso canal no youtube">Vídeos</a></li>
          <li><a href="social.php" title="Nossas redes sociais">Social</a></li>
        </ul>
      </nav>
	</header>
<div class="Conteudo">
<!-- Slide -->

	<section class="slide">
            <div class="slide_nav">
                <div class="slide_nav_item b"><</div>
                <div class="slide_nav_item g">></div>
            </div>

            <?php
            $pager = array();
            for ($i = 1; $i <= 4; $i++):
                $slide = str_pad($i, 2, 0, STR_PAD_LEFT);
                $first = ($i == 1 ? ' first' : '');
                $active = ($i == 1 ? ' $active' : '');
                $pager[$i] = "<span class='{$active}' id='" .($i - 1). "'>{$i}</span>";
                ?>

                <article class="slide_item<?= $first; ?>">
                    <img src="slide/images/<?= $slide; ?>.jpg" alt="[SLIDE <?= $slide; ?>]" title="SLIDE <?= $slide; ?>">
                    <div class="slide_item_desc">
                    </div>
                </article>

            <?php endfor;

                echo "<div class='slide_pager'>". implode(' ', $pager)."</div>";

             ?>
        </section>

        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="slide/js.js" async></script>
<!-- fim do slide -->  
	<!-- Orçamento -->     
	<section class="orcamento">
			<h1>Orçamento</h1>
		<img src="imagem/orcamento.jpg">
		<p>Solicite seu orçamento personalizada para seu site<br>respondendo algumas questões simples sobre o<br>seu projeto.</p>
		<button type="button" onclick="window.open('orcamento.php');">Solicitar Orçamento >></button>


	</section>
	<!-- Fim do orçamento -->

	<!-- Youtube -->
	<section class="youtube">
			<h1>Vídeos</h1>
		<iframe width="300" height="162" src="https://www.youtube.com/embed/YOyGSbWxrxw" frameborder="0" allowfullscreen></iframe>
		<p>Carrera Design também esta no youtube com vídeos de dicas<br>novidades e muito mais.</p>
		<button type="button" onclick="window.open('www.youtube.com');">Visitar Nosso Canal >></button>
	</section>
	<!-- Fim do youtube -->

	<!-- Blog -->
	<section class="blog">
			<h1>Blog</h1>
		<img src="imagem/blof.jpg">
		<p>Veja as ultimas postagem do nosso blog e interaja com a gente</p>
		<button type="button" onclick="window.open('blog.php');">Saiba Mais >></button>
	</section>
	<!-- Fim do Blog -->
</div>
	

 <footer class="footer">
 	<section class="links"
      <p>Copyright © 2015 | Carrera Design</p>
      <small class="creditos">Criado por <a href="http://www.popupdesign.com.br">Vinicius Melo</a>. Para o <a href="http://www.tableless.com.br">Carrera Design</a>. </small>
      <br><span>(carreradesign2016@gmail.com)</span>
      </section>
      <fieldset class="social">
      		<a href=""><img src="imagem/facelogo.png" alt="Facebook" width="50" height="50"></a>
      		<a href=""><img src="imagem/twlogo.png" alt="Facebook" width="50" height="50"></a>
      		<a href=""><img src="imagem/ytlogo.png" alt="Facebook" width="50" height="50"></a>
      </fieldset>
      <nav class="menufooter">
      	<ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="portfolio.php">Portfólio</a></li>
          <li><a href="orcamento.php">Orçamento</a></li>
          <li><a href="videos.php">Vídeos</a></li>
          <li><a href="social.php">Social</a></li>
        </ul>
       </nav>
  </footer>	
</div>

</body>
</html>