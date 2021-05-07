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

    <!--LETTER LIST -->

        <a href=''>A </a>
        <a href=''>B </a>
        <a href=''>C </a>
        <a href=''>D </a>
        <a href=''>E </a>
        <a href=''>F </a>
        <a href=''>G </a>
        <a href=''>H </a>


    <!--DISPLAYING AUTHOR LIST -->

        <!--SQL CONNECTION -->
        <?php
        $server = "localhost";
        $user ="root";
        $pass ="";
        $con=mysqli_connect($server,$user,$pass);
        $db="litcheck";
        mysqli_select_db($con,$db);

        $sqlselect = mysqli_query($con,"select * from literature where author_1 like 'a%' "); // FOR AUTHOR_1
        $sqlselect2 = mysqli_query($con,"select * from literature where author_2 like 'a%' "); // FOR AUTHOR_2
        $sqlselect3 = mysqli_query($con,"select * from literature where author_3 like 'a%' "); // FOR AUTHOR_3
        ?>

        <ul>

        <?php

            //AUTHOR_1 LIST
            while ($results=mysqli_fetch_object($sqlselect)){
                echo "<li>";
                echo $results->author_1."<br>";       
                echo "</li>";
            }

             //AUTHOR_2 LIST
             while ($results=mysqli_fetch_object($sqlselect2)){
                echo "<li>";
                echo $results->author_2."<br>";       
                echo "</li>";
            }

             //AUTHOR_3 LIST
             while ($results=mysqli_fetch_object($sqlselect3)){
                echo "<li>";
                echo $results->author_3."<br>";       
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

