<?php
$currentPage = 'index';
include_once(__DIR__.'/components/header.php');
?>


<main class="container">
  <h1>Pagina inicial</h1>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./src/img/10.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./src/img/11.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./src/img/12.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./src/img/13.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./src/img/14.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./src/img/15.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

  <div class="textos">
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-lg-3" style="text-align: justify; margin-top: 20px;">
    <img src="./src/img/logo.jpg" alt="logo" width="270px" style="border-radius: 50%;">
    </div>
    <div class="col-sm-12 col-lg-6" style="margin-top: 20px; text-align: center;">
    <h2>Chef Em Casa - Inspire-se na Culinária em Comunidade</h2>
   
    </div>
    <div class="col-sm-12 col-lg-3" style="margin-top: 20px;">
    <p>Bem-vindo ao Chef Em Casa, o seu destino online para explorar, criar e compartilhar experiências culinárias únicas. Descubra receitas deliciosas, compartilhe suas próprias criações e conecte-se com uma comunidade apaixonada por culinária. Seja você um chef experiente ou alguém apenas começando sua jornada na cozinha, aqui você encontrará inspiração para cada paladar.</p>
    </div>
  </div>
</div>
    <h3>Destaques:</h3>
   
    <div class="container">
  <div class="row">
    <div class="col-sm" style="text-align: justify; border: 1px solid black ; margin: 20px;">
    <p>Explore Receitas Variadas:
      Navegue por uma ampla variedade de receitas, desde pratos clássicos até criações inovadoras. Encontre a inspiração certa para a sua próxima refeição.
    </p>
    </div>
    <div class="col-sm" style="text-align: justify; border: 1px solid black ; margin: 20px;">
    <p>Compartilhe suas Receitas:
      Torne-se um chef em destaque compartilhando suas próprias receitas exclusivas. Faça parte da comunidade Chef Em Casa e inspire outros amantes da culinária.
    </p>
    </div>
    <div class="col-sm" style="text-align: justify; border: 1px solid black ; margin: 20px;">
    <p>Interação Comunitária:
      Comente, curta e compartilhe suas impressões sobre as receitas de outros chefs. Explore fóruns e grupos temáticos para dicas e truques culinários.
    </p>
    </div>
    <div class="col-sm" style="text-align: justify; border: 1px solid black ; margin: 20px;">
    <p>Junte-se a Nós:
      Registre-se agora para criar seu perfil personalizado, salvar suas receitas favoritas e participar ativamente da comunidade Chef Em Casa. Transforme sua paixão pela culinária em uma jornada compartilhada de descobertas e sabores.
    </p>
    </div>
  </div>
</div>
    <h1>Últimas Receitas</h3>
    <ul>
      <li>Risoto de Cogumelos ao Vinho Branco:
        <ul>
        <li>Desfrute de uma explosão de sabores com nosso Risoto de Cogumelos ao Vinho Branco.
           A suavidade do arroz combinada com a riqueza dos cogumelos e o toque elegante do
            vinho branco cria uma experiência gastronômica irresistível.</li>
          </li>
          </ul>
      <li>Salada de Verão Refrescante:
        <ul>
        <li>Revitalize seu paladar com nossa Salada de Verão Refrescante.
           Uma mistura vibrante de ingredientes frescos, cores e sabores
            que irá transformar qualquer refeição em uma celebração de frescura.</li>
          </li>
          </ul>
      <li>Lasanha à Bolonhesa Clássica:
        <ul>
        <li>Deleite-se com a indulgência de nossa Lasanha à Bolonhesa Clássica.
           Camadas de massa, molho de carne ricamente temperado e queijos derretidos
            se unem para criar um clássico reconfortante que agrada a todos.</li>
          </li>
          </ul>
      <li>Bolo de Chocolate Fudge Decadente:
        <ul>
        <li>Satisfaça sua doçura com nosso Bolo de Chocolate Fudge Decadente.
           Cada mordida é uma jornada através de camadas de bolo úmido e recheio de fudge,
            garantindo um final perfeito para qualquer refeição.</li>
          </li>
          </ul>
      <li>Curry de Frango Aromático:
        <ul>
        <li>Transporte-se para o oriente com nosso Curry de Frango Aromático.
           Uma fusão de especiarias, ervas frescas e pedaços suculentos de frango
            que criam um prato que estimula os sentidos.</li>
        </li>
        </ul>
      <li>Tacos Vegetarianos com Guacamole Fresco:
        <ul>
        <li>Celebre a versatilidade dos vegetais com nossos Tacos Vegetarianos
        . Cada mordida é uma explosão de cores e sabores, complementada pelo guacamole
         fresco para uma experiência que agrada até os paladares mais exigentes.</li>
        </li>
        </ul>
    </ul>
  </div>

</main>
    
<?php
include_once(__DIR__.'/components/footer.php');
?>


