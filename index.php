<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page: Andressa Silva</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <img class="avatar" src="<?php echo './icons/me.jpeg'; ?>" alt="Avatar">
    <h1>Andressa Conceição da Silva</h1>
    <p>Desenvolvimento Back-End</p>
  </header>

  <div class="card">
    <address>
      <ul class="card-info">
        <li><img class="phone" src="<?php echo './icons/phone.png'; ?>"><a href="https://wa.me/5521965114212" target="_blank">(21) 96511-4212</a></li>
        <li><img class="email" src="<?php echo './icons/email.png'; ?>"> <a href="mailto:andressaagapito@gmail.com?subject=Landing Page">andressaagapito@gmail.com</a></li>
        <li><img class="linkedin" src="<?php echo './icons/linkedin.png'; ?>"><a href="https://www.linkedin.com/in/andressaagapito/" target="_blank">Linkedin</a></li>
        <li><img class="github" src="<?php echo './icons/github.png'; ?>"><a href="https://github.com/andressaagapito" target="_blank">Github</a></li>
        <li><img class="location" src="<?php echo './icons/location.png'; ?>"> Rio de Janeiro, RJ</li>
      </ul>
    </address>
  </div>

  <div class="grid-container">
    <div class="grid-item-1">
      <h2>Sobre</h2>
      <p>Entusiasta e curiosa, o que me leva a investigar e a compreender o funcionamento de tudo ao meu redor. Gosto de dar vida a ideias e soluções por meio da tecnologia, onde busco uma oportunidade como desenvolvedora.</p>

      <h2>Objetivo</h2>
      <p>Estágio em Desenvolvimento Back-End.</p>

      <h2>Cursos</h2>
      <p class="certification">
        PHP - Curso em Vídeo (Concluído em 03/02/2022) <br>
        HTML e CSS - Origamid (Concluído em 20/03/2022) <br>
        MySQL - Curso em Vídeo (Concluído em 22/06/2023) <br>
        Javascript - Origamid (Concluído em 15/04/2022) <br>
        Power BI - Udemy (Concluído em 07/10/2022) </p>

      <h2>Idiomas</h2>
      <div class="language">
        <img class="eua" src="<?php echo './icons/eua.png'; ?>" alt="EUA" title="EUA">
        <p>Inglês Intermediário</p>
      </div>
    </div>

    <div class="grid-item-2">
      <h2>Formação Acadêmica</h2>
      <p>Universidade Estácio de Sá<br>
      Análise e Desenvolvimento de Sistemas<br>
      Rio de Janeiro, 2021/2024</p>

      <h2>Experiencia Profissional</h2>
      <p>Clínica Veterinária 24 horas <br>
        Técnico Veterinário, RJ - 2019/2023.
      </p>

      <div>
        <h2>Linguagens</h2> 
        <img class="html" src="<?php echo './icons/html.png'; ?>" alt="HTML5" title="HTML5">
        <img class="css" src="<?php echo './icons/css.png'; ?>" alt="CSS3" title="CSS3">
        <img class="js" src="<?php echo './icons/javascript.png'; ?>" alt="JS" title="JAVASCRIPT">
        <img class="php" src="<?php echo './icons/php.png'; ?>" alt="PHP" title="PHP">
        <img class="python" src="<?php echo './icons/python.png'; ?>" alt="PYTHON" title="PYTHON">
        <img class="c" src="<?php echo './icons/c.png'; ?>" alt="C" title="C">
        <img class="sql" src="<?php echo './icons/sql.png'; ?>" alt="sql" title="sql">
      </div>
    </div>  
  </div>
  <footer>
    <?php 
      date_default_timezone_set("America/Sao_Paulo");
      $date = date ("d/m/Y às H:i");
      echo "Página visitada em " . date("d/m/Y") . " às " . date("G:i:s");
    ?>
  </footer>
</body>
</html>

  
  
