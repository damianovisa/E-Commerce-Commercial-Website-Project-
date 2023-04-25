<?php namespace views; ?>

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

        $html = '<div class="container">';
        $html .= '<div class="row">';

        foreach($products as $item){
            $html .= "<div class='col-sm-3 mb-5'>
                        <div class='card shadow-sm h-100' >
                        <div>
                        <div class=''> 
                        <div class='card-body'>
                        <div class='text-center'>
                        <h5 class='card-title'>".$item['name']."</h5>
                        <p class='text-muted mb-4'>by ".$item['manufacturer']."</p>
                        </div>
                        <div class='d-flex justify-content-between total font-weight-bold mt-4'>";
                        
            $html .=   <?php if(isset($_SESSION['email'])) { ?>."
                            <span><a href='#' class='btn btn-success'><?=_('Add to cart')?></a></span> 
                            ".<?php }else{?>." <span><a href='#' class='btn btn-light disabled'><?=_('Add to cart')?></a></span><span>$".$item['price']."</span>".
                                <?php }?>."</div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>". <?php }?>."
                        </div>
                    </div>";
        }
        
        echo $html;
    }

}

?>