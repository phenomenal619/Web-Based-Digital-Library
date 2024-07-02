<?php include("conn.php");

session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];

$namecap=ucwords($name);

?>

<!DOCTYPE html>
<html>
<style>
    
    
    
    body{
  background: url("2.jpg");
}
.box{
  width:74%;
  height:160px;

  background-image: url("lib.jpeg");
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;
   border:solid 1px #CF0403;
}
.boxtwo{
  background-image: url("lg3.jpg");
  background-size: cover;
  box-shadow:0px 0px 15px lightgreen;
   border:solid 1px #CF0403;

}
ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 248px;
  height: 40px;
  background-color: purple;
  opacity: .8;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
}
ul li a{
  text-decoration: none;
  color: white;
  display: block;
}
ul li a:hover{
  background-color: green;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;

}
.nav{
  padding-left:13%;

}
.box-cnt{

  box-shadow: 0px 0px 15px lightgreen;
  background:rgba(0,0,0,0.38);
  float:left;
  border-radius:12px;
  overflow: auto;
  height:400px;
  width:45%;
  margin: 2% 2%;
    float: left;

}
    .box-cnt-h{
        color:white;
       text-align: center;
        padding-top:2px;
        padding-bottom: 2px;
        background:#660000;
        border-radius:12px;
        
    }

    .box-table{
        color: white;
        text-align: center;
        border-collapse: collapse;
        margin:1%;
        box-shadow: 0px 0px 10px white;
        height: auto;
        
    }
    .box-table td,tr{
        border: 1px solid white;
    }
    
    a{
        color: white;
    }
    
    
    </style>
    
    
    
    
  
    
    
    
<head><title>Employees_DashBoard</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:white"><h1 align="center"><marquee><i>Welcome To ethiotelecom online Library System</i>  </marquee></h1></td>
      </tr>
      <tr>
        <td ><mark style="color:white;background-color:maroon";> &nbsp;Welcome 
            
            <?php if($gender=="m")
                {
                    echo "Mr. ";
                } 
               else{
                echo "Ms. ";
               }
            ?><b><?php echo $namecap; ?> &nbsp;</b></mark></td>
      </tr>
    

    </table>
  </div>

  <div class="nav">
    <ul>
      <li><a style="background-color: green" href="edb.php">HOME</a></li>
      <li><a href="sbooks.php">YOUR BOOKS INFO</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="index.php">LOGOUT</a></li>
    </ul>
  
<br><br>

</div>

  <div class="boxtwo" style="border-radius: 10px; width:73.5%; height:900px; margin-left:13%;margin-top:10px;background-color:white">
      
      
      
      
    <div class="box-cnt">
      <h3 class="box-cnt-h">INFORMATION SECURITY</h3>
         <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM book");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["section"]=="information_security"){
                        echo "<tr>";
                          $bookid_information_security = NULL;
                          $bookid_information_security = $row["b_id"];
                          $lg1="<a href='view_book.php?id=$bookid_informtion_security'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg1"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_information_security = NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">FRAUD MANAGMENT</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th> 
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM book");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["section"]=="fraud_managment"){
                        echo "<tr>";
                          $bookid_fraud_managment = NULL;
                          $bookid_fraud_managment = $row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_fraud_managment'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_fraud_managment = NULL;
                      }
                    }

	            ?>
                </table>


    </div>
      
    
    
      <br/clear="all">

    <div class="box-cnt">
     <h3 class="box-cnt-h">REVENUE AUTHORITY</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th> 
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM book");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["section"]=="revenue_authority"){
                        echo "<tr>";
                          $bookid_revenue_authority = NULL;
                          $bookid_revenue_authority = $row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_revenue_authority'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_revenue_authority = NULL;
                      }
                    }

              ?>
                </table>


    </div>
      

    <div class="box-cnt">
       <h3 class="box-cnt-h">PMO</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th> 
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM book");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["section"]=="PMO"){
                        echo "<tr>";
                          $bookid_PMO = NULL;
                          $bookid_PMO = $row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_PMO'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_PMO = NULL;
                      }
                    }

              ?>
                </table>


    </div>




<div class="box-cnt">
     <h3 class="box-cnt-h">SECURITY ENGINEERING</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th> 
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM book");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["section"]=="security_engineering"){
                        echo "<tr>";
                          $bookid_security_engineering = NULL;
                          $bookid_security_engineering = $row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_security_engineering'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_security_engineering = NULL;
                      }
                    }

              ?>
                </table>


    </div>

    <div class="box-cnt">
     <h3 class="box-cnt-h">REVENUE AUTHORITY</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th> 
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM book");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["section"]=="revenue_authority"){
                        echo "<tr>";
                          $bookid_revenue_authority = NULL;
                          $bookid_revenue_authority = $row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_revenue_authority'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_revenue_authority = NULL;
                      }
                    }

              ?>
                </table>


    </div>






    <div class="box-cnt">
     <h3 class="box-cnt-h">CYBER SECURITY</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th> 
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM book");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["section"]=="cyber_security"){
                        echo "<tr>";
                          $bookid_cyber_security = NULL;
                          $bookid_cyber_security = $row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_cyber_security'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_cyber_security = NULL;
                      }
                    }

              ?>
                </table>


    </div>

          </br/clear>


  </div>


      <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
        <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">Thank You For Using This System.</h6></marquee>


      </div>

</body>
<html>
