

<?php
session_start();
if(isset($_SESSION['login_user']) and $_SESSION['login_user']=="sarra"){
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Page - Dashboard Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body id="reportsPage" class="bg02">
   
   <style>
    table {
  border-collapse: collapse;
  width: 10%;
}

th, td {
  text-align: left;
  padding: 0px;

}

tr:nth-child(even){background-color: }

th {
  background-color: #22427C;
  color: white;
}

a.button{
       
    border-radius:12px 0 12px 0;
    background: #478bf9;
    border:none;
    color:#fff;
    font:bold 12px Verdana;
    padding:6px 0 6px 0;

    }

    a:hover.button{
        color:#0066CC;

}
.delete{
    
        background:url(image/delete.gif) no-repeat 10px 8px;
        text-indent:30px;
        display:block;
        color:#0066CC;



    }

</style>
</div>

    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="index.html">
                            <i class=""></i>
                            <img src="img/logocaverne.jpg">
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="add/views/home2.php">Front
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Reports
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Daily Report</a>
                                        <a class="dropdown-item" href="#">Weekly Report</a>
                                        <a class="dropdown-item" href="#">Yearly Report</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="products.php">Products</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="accounts.html">Accounts</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Settings
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <a class="dropdown-item" href="#">Billing</a>
                                        <a class="dropdown-item" href="#">Customize</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="login.html">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                   <br />
   
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Afficher Categorie</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive">
<?php
include "../core/categorieC.php";
$categorie1C=new categorieC();
$listecategories=$categorie1C->affichercategories();

//var_dump($listeEmployes->fetchAll());
?>
<table  border="1">
<tr>
<th>Reference</th>
<th>Nom categorie</th>

<th>supprimer</th>
<th>modifier</th>
</tr>

<?PHP
foreach($listecategories as $row){
    ?>
    <tr>
    <td><?PHP echo $row['referencee']; ?></td>
    <td><?PHP echo $row['nomcat']; ?></td>

            
                    
    <td><form method="POST" action="supprimercategorie.php">
    
    <button type="submit" name="supprimer"   value="supprimer"  class="btn btn-common mr-3">supprimer</button>
    <input type="hidden" name="referencee" value="<?PHP echo $row['referencee']; ?>">
    </form>
    </td>

    <td><a href="modifcategory.php?referencee=<?PHP echo $row['referencee'];?>">Modifier</a></td>
    </tr>
    <?PHP
}
?>

</table>



                        </div>

                       
                    </div>
                </div>

                
           
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>


<?php
}
else{
    header("location: login.php"); 
}
?>

</html>