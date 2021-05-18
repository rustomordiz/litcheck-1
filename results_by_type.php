<!DOCTYPE html>
<title> LitChecker </title>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        

    <!--MENU BAR-->
    <section class = "header">

        LITCHECKER LOGO.png
        <button class="dropbtn2"><a href="index.php">HOME</a></button>
        <button class="dropbtn2"><a href="results_by_type.php?type=Article">ARTICLE</a></button>
        <button class="dropbtn2"><a href="results_by_type.php?type=Study">STUDIES</a></button>
        <button class="dropbtn2"><a href="results_by_type.php?type=Blog">BLOG</a></button>
        <button class="dropbtn2"><a href="results_by_type.php?type=Journal">JOURNALS</a></button>
        <button class="dropbtn2"><a href="results_by_type.php?type=Others">OTHERS</a></button>

    <br><br>
    </section>

     <!--MAIN SECTION-->
     <section class = "body">
     <br><br><br>

       
       
    <!--SEARCH RESULT -->

        <!--SQL CONNECTION -->
        <?php
        session_start();
        $server = "localhost";
        $user ="root";
        $pass ="";
        $con=mysqli_connect($server,$user,$pass);
        $db="litcheck";
        mysqli_select_db($con,$db);

        if(isset($_GET['type']))
        $type = $_GET['type'];
      
       
        //search
        $search_this = $_SESSION['searching'];

        $sqlselect = mysqli_query($con,"select title,category,type,link from literature where title like '%$search_this%' and type like '%$type%' "); 
        $sqlselectresult= mysqli_num_rows($sqlselect);
        ?>

        <ul>

        <?php
        // RESULTS
        while ($results=mysqli_fetch_object($sqlselect)){
                echo "<li>";
                echo"<a href='$results->link'>$results->title ";
                echo "</a>";    
                echo " - ".$results->category.", ".$results->type."<br>";   
                echo "</li>";
        }
        
         //IF NO RESULTS FOUND
         if($sqlselectresult == 0){
            echo "no results found";
        } 

        ?>
        
        </ul>



    
    <!-- CREDITS --> 
    <?php include 'credits.php';?> 
    

</body>
</html>