<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Panel<span>Administratora</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Strona główna</a>
         <a href="admin_products.php">Produkty</a>
         <a href="admin_orders.php">Zamówienia klienckie</a>
         <a href="admin_users.php">Konta klienckie</a>
         <a href="admin_contacts.php">Korespondencja</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Użytkownik  <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>E-mail: <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Wyloguj się</a>
         <div>nowy <a href="login.php">login</a> | <a href="register.php">Zarejestruj się</a></div>
      </div>

   </div>

</header>