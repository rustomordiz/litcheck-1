<!DOCTYPE html>
<title> Authors </title>
<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     
     <!-- CSS -->
     <link rel="stylesheet" href="css/index.css">

</head>

<body>

    <!-- MENU BAR --> 
    <?php include 'menu_bar.php';?> 

     <!--MAIN SECTION -->
     <section class = "body">
    <br><br><br>


    <!--DISPLAYING AUTHOR WORKS -->
    <ul>
        <!--SQL CONNECTION -->
        <?php
        session_start();
        $server = "localhost";
        $user ="root";
        $pass ="";
        $con=mysqli_connect($server,$user,$pass);
        $db="litcheck";
        mysqli_select_db($con,$db);

        if(isset($_GET['let']))
        $let = $_GET['let'];
         else
        $let='';

        $sqlselect = mysqli_query($con,"select DISTINCT title,category,type,link from literature where author_1 like '$let%' "); // FOR AUTHOR_1
        $sqlselect2 = mysqli_query($con,"select DISTINCT title,category,type,link from literature where author_2 like '$let%' "); // FOR AUTHOR_2
        $sqlselect3 = mysqli_query($con,"select DISTINCT title,category,type,link from literature where author_3 like '$let%' "); // FOR AUTHOR_3
        
        
        while ($results=mysqli_fetch_object($sqlselect)){
                echo "<li>";
                echo"<a href='$results->link'>$results->title ";
                echo "</a>, ";    
                echo $results->category.", ".$results->type."<br>";      
                echo "</li>";
        }
        

        ?> 

      
    </ul>

    <br><br><br><br><br><br>  
    </section>

      <!-- CREDITS --> 
    <?php include 'credits.php';?>    

</body>
</html>
