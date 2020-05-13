<?php include "db.php" /* เรียกไฟล์เพื่อconect database*/ ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>

<body>
    <!-- NAVIGATOR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-uppercase " href="home.html">Home</a>
                    <a class="nav-item nav-link text-uppercase " href="about.html">About</a>
                    <a class="nav-item nav-link text-uppercase active" href="contact.html">Contact</a>
                   
                    
                </div>
            </div>
        </div>
    </nav>

    <!-- BODY -->
    <div class="container">
        <div class="text-center">
            <h1 class="text-uppercase">Contact</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 ">
                    <hr>
                    <!-- เริ่มเขียนโค้ด -->
                <form action = "contact.php" method= "POST"  >    
                    <div class="form-group">
                        <label>Your name</label>
                        <input type="name" class="form-control" name = "Contact_name" id="Contact_name" >
                    </div>
                    <div class="form-group">
                        <label for = "exampleDropdownFormEmail2">Email</label>
                        <input type="email" class="form-control" name = "Contact_email" id="Contact_email"placeholder ="email@example.com"  >
                    </div>
                   
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="5"></textarea>
                    </div>
                      <button  type="submit" value="Submit" >Submit</button> 
           <!--      <button class="btn btn-block btn-primary" data-toggle="modal"   data-target="#modal">Submit</button>  -->
                 </div>
               <!--  <button  type="submit" value="Submit" >Submit</button> -->
             <!--    <button class="btn btn-block btn-primary"data-toggle=”modal” data-target=”#myModal”>Submit</button>  -->
            
                </form>   
            </div>
        </div>
    </div>
  
   <?php 
   


    $SQL_Txt ="SELECT `Contact_id`, `Contact_name`, `Contact_email` 
    FROM `contact` WHERE `Contact_email` = '$_POST[Contact_email]' " ;

    //echo $SQL_Txt;
    
    $Query_Txt = mysqli_query($Conn,$SQL_Txt);

    $Array_Txt= mysqli_fetch_array($Query_Txt,MYSQLI_ASSOC);

    $Contact_email = $Array_Txt['Contact_email'];

    if($Contact_email<>$_POST[Contact_email]){   //<> แปลว่าไม่เท่ากับ

       $txt_show="ไม่สามารถส่งข้อความได้";
       echo "<br>";
        echo $txt_show;

    }
    elseif($Contact_email == $_POST[Contact_email]) {
        $txt_show="คุณส่งข้อความแล้ว";
        echo "<br>";
        echo $txt_show;
    }
    $Contact_email = "";    
    
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>




</html>