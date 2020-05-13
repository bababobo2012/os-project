 <?php include "db.php" /* เรียกไฟล์เพื่อconect database*/ ?> 


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                    
                    
                    
                  
                </div>
            </div>
        </div>
    </nav>

    <!-- BODY -->
    <div class="container">
        <div class="text-center">
            <h1 class="text-uppercase">Login</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 ">
                    <hr>
                <form  action="form2.php" method="POST">  <!-- แท็ก input และแอตทริบิวต์ type="submit" จะกำหนดปุ่นสำหรับส่งข้อมูลไปยังเซิฟเวอร์ 
                โดยข้อมูลจะส่งไปยังไฟล์ที่กำหนดในแอตทริบิวต์ action และไฟล์ที่ทำการรับข้อมูลจากฟอร์มนี้ จะทำบางสิ่งบางอย่างกับข้อมูลที่รับเข้าไป2 แบบด้วยกัน >>get - จะส่งข้อมูลเป็นข้อความต่อท้ายชื่อไฟล์ ซึ่งจะเห็นใน url ของเว็บเบราว์เซอร์
    >>post - จะส่งข้อมูลแบบซ่อนผ่านทางเบราว์เซอร์ซึ่งมีความปลอดภัยมากกว่า   -->
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail2">Email address</label>
                        <input type="email" class="form-control" name="Member_email" id="Member_email" placeholder ="email@example.com" >
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword2">Password</label>
                        <input type="password" class="form-control" name="Member_password" id="Member_password" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <!--    <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                            <label class="form-check-label" for="dropdownCheck2">Remember me</label>
                    </div>   -->
                    </div><button type="submit" value="Submit" >Sign in</button>
                    <!-- <a href="vietnam2.html" class="btn btn-primary " role="button">Sign in</a>-->
                            </div>
                        </div>
                
                        <HTML>
                        <HTML>
    
    


     <?php  
    
    
    $SQL_Txt ="SELECT `Member_id`, `Member_email`, `Member_password` 
    FROM `member` WHERE `Member_email` = '$_POST[Member_email]' " ;

    //echo $SQL_Txt;
   //  $txt_show = "";
    
     $Query_Txt = mysqli_query($Conn,$SQL_Txt);

    $Array_Txt= mysqli_fetch_array($Query_Txt,MYSQLI_ASSOC);

    $Member_email = $Array_Txt['Member_email'];
    $email = $_POST[Member_email]; 
     
if  ($email <> "")  {
     if ($Member_email == $email) {
        $txt_show= "เป็นสมาชิก สามารถจองได้!!";
        echo "<br>";
        echo $txt_show;
        echo "<a href= 'vietnam2.html'>จอง</a>";
     }
    

      else {
        $txt_show= "ไม่เป็นสมาชิก ไม่สามารถจองได้!!";
        echo "<br>";
        echo $txt_show;
     }
     
}
 

    ?> 
   

           

    
      

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>

</html>