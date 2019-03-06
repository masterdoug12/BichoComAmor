<?php
   include 'header.php';
?>
<style>
   body, input, select, textarea {		
   font-size: 13pt;
   }
   #first p{
   color : #a96f67;
   }
   .nav-item{
   margin: 0px; 
   }
   h2 {
   font-family: 'Pacifico', cursive;
   font-size: 25pt;
   }
   ul.grade li.grade {
   margin: 35px; 
   }
</style>
<script>
   var $doc = $('html, body');
   $('a').click(function() {
   	$doc.animate({
   		scrollTop: $( $.attr(this, 'href') ).offset().top
   	}, 500);
   	return false;
   });
</script>
<!-- Wrapper -->
<div id="wrapper">
   <!-- Header -->
   <header  id="header" class="alt">
      <span class="logo"><img src="images/bicho com amor logo.png" alt="" /></span>
   </header>
   <!-- Nav -->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <span class="inicio"><img id="inicio" src="images/bicho com amor escrita.png" alt="" /></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a  data-toggle="collapse" data-target=".navbar-collapse"class="nav-link" href="#header">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a data-toggle="collapse" data-target=".navbar-collapse"  class="nav-link" href="#first">Serviços</a>
            </li>
            <li class="nav-item">
               <a data-toggle="collapse" data-target=".navbar-collapse" class="nav-link" href="#cta">Informações de Contato</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="fotos">Galeria de Fotos</a>
            </li>
         </ul>
      </div>
   </nav>
   <!-- Main -->
   <div id="main" >
      <!-- Introduction -->
      <section id="intro" class="main">
         <div class="spotlight">
            <div class="content">
               <header class="major">
                  <h2>Bicho com Amor</h2>
               </header>
               <p>A Bicho Com Amor oferece conforto e praticidade para você que quer o melhor para seu amiguinho;
                  Nosso PetShop possui várias opções para agradar seu Pet e lhe proporcionar momentos de relaxamento;
                  Contamos com Serviço de banho e tosa além de atendimento veterinário prestativo e cuidadoso 
               </p>
            </div>
            <span class="image"><img src="images/bicho com amor Loja 2.jpg" alt="" /></span>
         </div>
      </section>
      <!-- First Section -->
      <section id="first" class="main special">
         <header class="major">
            <h2>Serviços</h2>
         </header>
         <ul class="spotlight grade">
            <li class ="grade">
               <span class="image"><img src="images/bicho com amor dog_flu.png" alt="" /></span>
               <h3>Serviço Veterinário</h3>
               <p>A médica veterinária Bruna Zimmermann <br>atenderá seu pet com muito amor e carinho.</p>
            </li>
            <li class ="grade">
               <span class="image"><img src="images/bicho com amor wash dog.jpg" alt="" /></span>
               <h3>Banho e Tosa</h3>
               <p>Deixe seu animalzinho <br>bonito e cheirosinho.</p>
            </li>
            <li class ="grade">
               <span class="image"><img src="images/bicho com amor car dog.jpg" alt="" /></span>
               <h3>Busca e entrega</h3>
               <p>Buscamos e entregamos <br>seu companheiro em segurança</p>
            </li>
         </ul>
         <ul class="spotlight grade">
            <li class ="grade">
               <span class="image"><img src="images/bicho com amor sleep dog.jpg" alt="" /></span>
               <h3>Hotel Animal</h3>
               <p>Tire férias tranquilo e deixe<br> seu cão ou gato conosco</p>
            </li>
            <li class ="grade">
               <span class="image"><img src="images/bicho com amor sell dog.jpg" alt="" /></span>
               <h3>Produtos</h3>
               <p>Contamos com uma linha <br>de produtos para animais de estimação.</p>
            </li>
            <li class ="grade">
               <span class="image"><img src="images/bicho com amor dog vacina.jpg" alt="" /></span>
               <h3>Vacinas</h3>
               <p>Vacinas importadas para cães e gatos.</p>
            </li>
         </ul>
         <footer class="major">
         </footer>
      </section>
      <script>
         var $doc = $('html, body');
         $('a').click(function() {
         	$doc.animate({
         		scrollTop: $( $.attr(this, 'href') ).offset().top
         	}, 500);
         	return false;
         });
      </script>
      <!-- Second Section 
         <section id="second" class="main special">
         <header class="major">
         <h2>Ipsum consequat</h2>
         <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
         posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
         </header>
         <ul class="statistics">
         <li class="style1">
         <span class="icon fa-code-fork"></span>
         <strong>5,120</strong> Etiam
         </li>
         <li class="style2">
         <span class="icon fa-folder-open-o"></span>
         <strong>8,192</strong> Magna
         </li>
         <li class="style3">
         <span class="icon fa-signal"></span>
         <strong>2,048</strong> Tempus
         </li>
         <li class="style4">
         <span class="icon fa-laptop"></span>
         <strong>4,096</strong> Aliquam
         </li>
         <li class="style5">
         <span class="icon fa-diamond"></span>
         <strong>1,024</strong> Nullam
         </li>
         </ul>
         
         <p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
         
         </footer>
         </section>-->
      <!-- Get Started 
         <header class="major">
         <h2>Congue imperdiet</h2>
         <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
         posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
         </header>
         <footer class="major">
         <ul class="actions special">
         <li><a href="generic.html" class="button primary">Get Started</a></li>
         <li><a href="generic.html" class="button">Learn More</a></li>
         </ul>
         </footer>
         </section>-->
      <section id="cta" class="main special">
         <header class="major">
            <h2>Informações de Contato</h2>
         </header>
         <footer id="footer">
            <section>
               <h3> Fale conosco</h3>
               <ul>
                  <li>Endereço:<br>
                     Rua Clemente Stelzer &bull; Nº 10 &bull; Bairro Modelo &bull; Ijuí - RS &bull;<br>
                     Telefone:<br>
                     (55) 9 8154 3333<br>
                     Email:<br>
                     atendimento@bichocomamor.com.br
                  </li>
               </ul>
               <ul>
                  <h3>Horarios de atendimento</h3>
                  <li>Segunda a sábado </li>
                  <li>08:00 - 12:00</li>
                  <li>13:30 - 18:00</li>
               </ul>
            </section>
            <section >
               <h3>Localização</h3>
               <iframe id="mapa"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1755.2069312918234!2d-53.8963673165077!3d-28.37656529781495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fc334c4bb7d2ab%3A0x4604283211e3561f!2sClinica+Veterin%C3%A1ria+e+petshop+Bicho+com+Amor!5e0!3m2!1spt-BR!2sbr!4v1537384282208" width="450" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
            <section >
               <h3>Curta nossa página</h3>
               <iframe id="mapa"  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbichocomamor%2F&tabs=&width=450&height=200&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="450" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </section>
         </footer>
      </section>
   </div>
</div>
<?php
   include 'footer.php';
   ?>