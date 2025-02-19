<?php namespace views; 
include('includes/header.php');
require_once('core/membershipprovider.php');
?>

<html lang="en">
<head>
    <title><?=_("Home")?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="../resources/style.css">
</head>
<body>

    <div class="row m-3 justify-content-center">
        <img src="../images/banner.jpg" style="width:90%; height:65vh" class="img-fluid">
    </div>

</body>

</html>

<?php 

class UserHome{
    private $user;
    function __construct($user){
        $this->user = $user;
    }

    function render(...$data){
        $products = $data[0];

?>
         
        <div class="container">
        <div class="row">
    
     <?php  foreach($products as $item){?>
            <div class="col-sm-3 mb-5">
                <div class="card shadow-sm h-100" >
                    <div>
                        <div class=""> 
                        <img src="../images/<?php echo $item['image']?>" class="card-img p-3" width="100%" height="250px"/>
                        <div class="card-body">
                        <div class="text-center">
                        <h5 class="card-title"><?php echo $item['name'] ?></h5>
                        <p class="text-muted mb-4">by <?php echo $item['manufacturer'] ?></p>
                        </div>
                        <div>
                            <?php if(strlen($item['description']) > 28){?>
                                <?=substr($item['description'],0,31)."...";?>
                                
                            <?php }else{?>
                                <?=$item['description']?>
                            <?php }?>
                            
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                            <?php if(isset($_COOKIE['user'])) {?>
                                <span><a href="" class="btn btn-success"><?=_('Add to cart')?></a> <a href="" class="btn btn-outline-warning p-2"><i class="bi bi-pencil-fill"></i></a ></span><span>$<?php echo $item['price'] ?></span>
                            <?php }else{?>
                                <span><a href="#" class="btn btn-light disabled"><?=_('Add to cart')?></a></span><span>$<?php echo $item['price'] ?></span>
                            <?php }?>
                    
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
                    
        <?php }?>
        
<?php    
include('includes/footer.php');
    }
}
?>

