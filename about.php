<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>O nas </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>O NAS</h3> 
   <p> <a href="home.php">Strona główna</a> / O nas </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Dlaczego my?</h3>
         <p>Gwarantujemy profesjonalną obsługę oraz możliwość przetestowania naszych znakowarek. Nasze urządzenia z powodzeniem znajdują zastosowanie w przemyśle samochodowym, inżynieryjnym oraz lotniczym. Posiadają certyfikaty CE.</p>
         <p>Marka MarknStamp dzięki 40 letniemu doświadczeniu zapewnia właściwe rozwiązania.</p>
         <a href="contact.php" class="btn">Skontaktuj się z nami</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Opinie naszych flagowych klientów</h1>

   <div class="box-container">

      <div class="box">
         <img src="./images/pic-1.png" alt="">
         <p> Znakowarki CNC to idealne rozwiązanie dla naszej produkcji. Urządzenia są szybkie i dokładne, natomiast możliwość personalizacji znaków jest ogromnym atutem. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3> KOLB Sp. z o.o.</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p> Z usług znakowarkowych CNC korzystamy regularnie i zawsze jesteśmy zadowoloni z rezultatów współpracy. Precyzja i jakość znakowania są na najwyższym poziomie. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> IZOSTAL S.A.</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Jakość usług CNC przeszły nasze oczekiwania. Każdy detal jest idealnie wykonany, co sprawia, że nasze produkty wyglądają profesjonalnie. Bardzo udana współpraca </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> HALKA GmbH</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Bardzo cenimy sobie współpracę z firmą Znakowarki.com oferującą usługi znakowarkowe. Proces zamówienia jest prosty, a realizacja szybka i zgodna z naszymi wymaganiami.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> METTOP GmbH</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Usługi znakowarkowe CNC znacznie poprawiły efektywność naszej linii produkcyjnej. Znakowania są wyraźne i trwałe, co jest kluczowe dla naszego asortymentu.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> PROMET Sp. z o.o.</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Znakowarki CNC to inwestycja, która się opłaca. Dzięki nim możemy zapewnić naszym klientom produkty najwyższej jakości z precyzyjnie wykonanymi oznaczeniami.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> EUROTERM Sp. z o.o.</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Nasi partnerzy rynkowi</h1>

   <div class="box-container">

      <div class="box">
         <img src="./images/kolb.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>KOLB Sp. z o.o.</h3>
      </div>

      <div class="box">
         <img src="images/izostal.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>IZOSTAL S.A.</h3>
      </div>

      <div class="box">
         <img src="images/halka.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>HALKA GmbH</h3>
      </div>

      <div class="box">
         <img src="images/mettop.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>METTOP GmbH</h3>
      </div>

      <div class="box">
         <img src="images/promet.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>PROMET Sp. z o.o.</h3>
      </div>

      <div class="box">
         <img src="images/euroterm.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>EUROTERM Sp. z o.o.</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>