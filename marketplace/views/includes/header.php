<html>
<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../resources/style.css">
    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark" >
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand mb-0 h1" href="index.php?resource=user&action=home"><?=_("Marketplace")?></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?resource=user&action=home"><?=_("Home")?></a>
        </li>
        <?php if(isset($_SESSION['seller_id'])) {?>
        <li class="nav-item">
          <a class="nav-link" href=""><?=_("Add product")?></a>
        </li>
        <?php }else{?>

        <?php }?>
        
        <?php if(isset($_COOKIE['user'])){?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=logout&resource=user"><?=_("Logout")?></a>
        </li>
        <?php }else if (isset($_COOKIE['seller'])){?>
          <a class="nav-link" href="index.php?action=logout&resource=seller"><?=_("Logout")?></a>
        <?php }else{?>
            
          <?php }?>
        
        <?php if(isset($_COOKIE['user'])) {?>
        <li class="nav-item">
          <a class="nav-link disabled "><?=_("Welcome")?> <?= $_COOKIE['userfname']?></a>
        </li>
        <?php }else if(isset($_COOKIE['seller'])){?>
          <a class="nav-link disabled "><?=_("Welcome")?> <?= $_COOKIE['sellerfname']?></a>
          <?php }else{?>
            
            <?php }?>
      </ul>

      <form class="d-flex" role="search">
      
      <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        
      </form>

      <?php if(isset($_COOKIE['marketplaceuser']) || isset($_SESSION['seller_id'])){?>
        <a class="btn btn-primary m-2" href="#"><?=_("Profile")?></a>
      <?php }else{?>
        <a class="btn btn-primary m-2" href="index.php?action=login&resource=user"><?=_("Sign in")?></a>
      <?php }?>

      <?php if(isset($_COOKIE['user'])){?>
      <a class="btn btn-outline-light btn-floating m-1" id="cartBtn" href="index.php?resource=user&action=cart" role="button">
        <i class="bi bi-cart-fill pe-2"></i>
        <span class='badge badge-warning' id='lblCartCount' name="cartNb" ></span>
        <!-- <?= $cartItems?> -->
      </a>
      <?php } if(isset($_SESSION['seller'])) {?>
        <a class="btn btn-outline-light btn-floating p-2" id="cartBtn" href="" role="button">
          <i class="bi bi-bag-fill"></i>
      </a>
      <?php }?>

    </div>
  </div>
</nav>

<style>
  #cartBtn:hover .badge{
    color:black;
  }
</style>

</body>
</html>