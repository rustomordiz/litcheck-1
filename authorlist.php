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
    <a href="authorlist.php?let=A"> A </a> | 
    <a href="authorlist.php?let=B"> B </a> | 
    <a href="authorlist.php?let=C"> C </a> | 
    <a href="authorlist.php?let=D"> D </a> | 
    <a href="authorlist.php?let=E"> E </a>  
    <br><br>
    
    <!--DISPLAYING AUTHOR LIST -->

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
            $let='A';

        $sqlselect = mysqli_query($con,"select * from literature where author_1 like '$let%' "); // FOR AUTHOR_1
        $sqlselect2 = mysqli_query($con,"select * from literature where author_2 like '$let%' "); // FOR AUTHOR_2
        $sqlselect3 = mysqli_query($con,"select * from literature where author_3 like '$let%' "); // FOR AUTHOR_3
        ?>

        <ul>

        <?php

            //AUTHOR_1 LIST
            while ($results=mysqli_fetch_object($sqlselect)){
                echo "<li>";
                echo"<a href='results_by_author.php?let=$results->author_1'>";
                echo $results->author_1." ";    
                echo "</a>";   
                echo "</li>";
            }

             //AUTHOR_2 LIST
             while ($results=mysqli_fetch_object($sqlselect2)){
                echo "<li>";
                echo"<a href='results_by_author.php?let=$results->author_2'>";
                echo $results->author_2." ";   
                echo "</a>";       
                echo "</li>";
            }

             //AUTHOR_3 LIST
             while ($results=mysqli_fetch_object($sqlselect3)){
                echo "<li>";
                echo"<a href='results_by_author.php?let=$results->author_3'>";
                echo $results->author_3." ";     
                echo "</a>";
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
