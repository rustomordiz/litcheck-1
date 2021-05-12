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
        
    <!-- MENU BAR --> 
    <?php include 'menu_bar.php';?> 
    

     <!--MAIN SECTION-->
     <section class = "body">
     <br><br><br><br><br><br>

        <center> 
        LITCHECKER LOGO.png <br><br>

        <?php
        error_reporting(0);
        // SEARCH PROCESS
	    if($_POST['btnsubmit']){
            session_start();
            $_SESSION['searching'] = $_POST['search'];
            header('Location: results.php');    
	    }
        ?>

        <form name="search-area" method="POST">
            <!-- SEARCH BAR -->
            <input type="text" size="33" name="search" required> 
            <!-- SUBMIT BUTTON -->
            <input class="button" type="submit" name="btnsubmit" value="Search">
        </form>

        </center>


    <br><br><br><br><br><br>  
    </section>

    <!-- CREDITS --> 
    <?php include 'credits.php';?> 
    
</body>
</html>

	