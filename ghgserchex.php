<?php
include("dbconn.php");
session_start();
$admin=$_SESSION[ 'name' ]; 
$_SESSION['name']=$admin;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<style>
    body{
        font-family: sans-serif;
        font-size: 5px;
        color:green;
        background-image: url(ghgb2.jpg);
        background-size: 20%;
    }
    h6{
        font-size: 27px;
           color:forestgreen;
        font-family:'bungee';
        margin-top: -56px;
         background-color: rgba(0,0,0,0.8);
        text-shadow: 2px 2px 2px black;
        width: 1421px;
         margin-left: -8px;
    }
    h1{
        font-family: 'bungee';
       
        color:teal;
           height:145px;
           margin-top: -55px;
         margin-left: -8px;
        font-size: 73px;
          background-color: rgba(0,0,0,0.5);
 
        text-shadow: 2px 2px 2px black;
        border-bottom: 4px;
        width: 1421px;
        
    }
       h1:hover{
        font-family: 'bungee';
       
        color: deepskyblue;
           height:155px;
        
        font-size: 75px;

        text-shadow: 3px 4px 5px black;
           transition: 0.4s;
        
    }
    img{
        width:90px;
        height:88px;
    }
    .update{
        height:90px;
        width:118px;
        border-radius: 10px;
        font-size: 20px;
        background-color: rgba(0,0,0,0.6);
        color:yellow;
        font-family:'bungee';
    }
     .update2{
        height:90px;
        width:118px;
        border-radius: 15px;
        font-size: 14px;
        background-color: red;
        color:lawngreen;
         font-family:'bungee';
           
    }
       .table12{
    position:absolute;
    margin-top:1050px;
    left:50%;
    width:800px;
    height: 180px;
    padding: 55px;
    transform: translate(-50%, -50%);
   box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
    border-radius: 25px;
   background-color: rgba(0,134,179,0.5);
    background-repeat: no-repeat;
    background-size:cover;
    overflow: hidden;}
   th{
        background-color: rgba(0,0,0,0.9);
        color:darkgreen;
           text-shadow: 1px 1px 1px lime;
         font-size: 28px;
        opacity: .9;
    }
    th:hover{
        background-color:lawngreen;
        color:red;
           text-shadow: 2px 2px 2px red;
         font-size: 28px;
        opacity: .9;
    }
      td{
        background-color: rgba(0,0,0,0.6);
        color:red;
        font-family:sans-serif;
          font-size: 26px;
        text-shadow: 2px 2px 2px darkred;
          text-transform: uppercase;
    }
    td:hover{
        background-color:lawngreen;
        color:darkgreen;
        font-family:sans-serif;
          font-size: 26px;
        text-shadow: 1px 1px 1px black;
    }
    .update:hover{
        background-color:firebrick;
        color:white;
         border-radius: 25px;
          box-shadow:  0 0 25px red, 
                             0 0 50px red, 
                               0 0 100px red ;
transition:  .7s;
    }
    #head{
        height: 130px;
       
        margin-top: -64px;
         padding: 60px;
     width: 1421px;
 background-color: rgba(20,82,20,0.6);
    box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
     background-repeat: no-repeat;
    background-size:cover;
        margin-left: -8px;}
    
    .bt{
        width: 200px;
        height:110px;
        color: red;
        font-family: 'bungee';
        font-size: 22px;
        letter-spacing: 2px;
        border-bottom-color: transparent;
        border-left-color: transparent;
          border-right-color: transparent;
        border-top-color: transparent;
        border-radius: 10px;
        margin-top: -41px; 
      
       background-color: rgba(0,0,0,0.0);
        text-shadow:  2px 2px 2px black; 
                          
    }
      .btt{
        width: 80px;
        height:110px;
        color: chartreuse;
        font-family: 'bungee';
        font-size: 37px;
        letter-spacing: 2px;
        border-bottom-color: transparent;
        border-left-color: transparent;
          border-right-color: transparent;
        border-top-color: transparent;
        border-radius: 10px;
        margin-top: -41px; 
      
       background-color: rgba(0,0,0,0.0);
        text-shadow:  3px 2px 2px black; 
                          
    }
      .btt:hover{
        
        color:yellow;
         font-size: 40px;
         border-bottom-color: red;
        border-bottom-style: double;
    transition: 0.3s;
    }
    .bt:hover{
        
        color:white;
         font-size: 24px;
         border-bottom-color: red;
        border-bottom-style: double;
    transition: 0.7s;
    }
    #st{
        height: 40px;
        width: 350px;
        font-size: 23px;
          font-family: 'bungee';
        color:orangered;
        background-color: chartreuse;
        text-shadow: 2px 2px 2px black;
        
          border-bottom-color: darkgreen;
          border-top-color: green;
          
          border-left-color:darkgreen;
          border-right-color:darkgreen;
        border-radius: 10px;
    }
    #st2{
        height: 39px;
        width: 350px;
          font-size: 17px;
        font-family: 'bungee';
    color:orangered;
        border-top-color: green;
        background-color: chartreuse;
        text-shadow: 2px 2px 2px black;
        border-radius: 10px;
  
    }
      #sb{
        height: 40px;
        width: 50px;
          font-size: 25px;
    border-radius: 10px;
        text-shadow: 3px 2px 2px black;
          background-color: transparent;
          border-bottom-color: orangered;
          border-top-color: transparent;
          
          border-left-color: transparent;
          border-right-color: transparent;
    }
    #sb:hover{
        font-size: 28px;
         width: 60px;
        text-shadow: 3px 2px 2px black;
    
    }
     h3{
        font-size: 27px;
           color:forestgreen;
        font-family:'bungee';
        margin-top: -4px;
         background-color: rgba(0,51,0,0.9);
        text-shadow: 2px 2px 2px black;
        width: 1421px;
         margin-left: -8px;
    }

    </style>
    <script>
    function hey()
        {
           alert("DATA DELETED!!");
            
                     window.location.href="ghgl6.html"; 
                
            
        }
    </script>
</head>
<body>
   <?php
//echo "$admin";
if(isset($admin))
{
    echo "<div class='container' ";?>
 
   <h1><?php echo"<center><h1> ADMIN-PANEL:<span style='color:red'>FILTER<span> </h1><br><h6>ADMIN-NAME:<span  style='color:orangered;text-shadow:1px 1px 1px black;'> ".$admin."</span></h6></center>";?></h1> 
  <form id="head">
      <center><a href="ghgl6.html"> <input type="button" value="&#9851;HOME" class="bt"></a>
          <a href="ghgsearchE.php">   <input type="button" value="&#9852;ENERGY" class="bt" ></a>
          <a href="ghgsearchW.php"> <input type="button" value="&#9852;WASTE" class="bt"></a>
        <a href="ghgsearchA.php"> <input type="button" value="&#9852;AGRI" class="bt"></a>
        <a href="ghgsearchI.php"> <input type="button" value="&#9852;INDUSTRY" class="bt"></a>
         <a href="ghgserchex.php"> <input type="button" value="&#128472;" class="btt"></a>
        
</center>
      </form>
 <h3>  <form method="post" action="ghgserchex.php" autocomplete="off">
  &nbsp; <input type="text" id="st" name="q" placeholder="Search..."  required>
       <select name="column" id="st2" required>
          <option value="">SELECT FILTER</option>        
          <option value="ID">GEA ID</option>
          <option value="CNAME">COMPANY NAME</option>
          <option value="ESTD">Estd. YEAR</option>
          <option value="CREG">REGSTRATION NUMBER</option>
          <option value="PHONE">PHONE NUMBER</option>
                     <option value="email">EMAIL</option>
                      <option value="RDATE">Reg. DATE</option>
    </select>
  <input type="submit" name="submit" id="sb"value="&#128269;">
     
    </form>
</h3>
   <?php
   
    $result=mysqli_query($conn,"SELECT * FROM ghgreg");
    $row=mysqli_num_rows($result);
     
    
}else
{
    header("location:ghgindexf.html");
}
?>
<div class="container">
     <div id="chart_div" style="width: 400px; height: 120px;"  ></div>       
  
     
      <?php
//include("dbconn.php");
          if(isset($_POST['submit']))
          {
              $q= $_POST['q'];
              $c=$_POST['column'];
              $query_select="SELECT * FROM ghgreg where $c like '%$q%' ";  
            $run_query=mysqli_query($conn, $query_select);
               $row2=mysqli_num_rows( $run_query); 
              if($row2==0)
              {?>
          <table> <tr> <td colspan="11"> <?php   echo "TOTAL ROWS: ".$row2; ?></td></tr> </table> <?php   
              }else if($row2!==0)
              {
                  $query_select="SELECT * FROM ghgreg where $c like '%$q%' ";  
            $run_query=mysqli_query($conn, $query_select);
                $id=0;    
       $i=0; ?>
                          <table class="table16" border='1' cellspacing="0">
    <thead>
 
      <tr>
       <th>Sr.No.</th>
        <th>ID</th>
        <th>COMPANY</th>
        <th>YEAR</th>
         <th>SECTOR</th>
          <th>CREG</th>
           <th>PHONE</th>
            <th>REG-DATE</th>
              <th>IMAGE</th>
              <th>DELETE</th>
              <th>REPORT</th>
        </tr>
    </thead>
      <tbody>
       <?php   
    while($result= mysqli_fetch_assoc($run_query))  
{ 
        $id=$result["ID"];
        $t=0;
         $query_select2="SELECT CID FROM ghgrate2";  
          $run_query2=mysqli_query($conn, $query_select2);
 while($result2= mysqli_fetch_assoc($run_query2))
 {
     if($id==$result2["CID"])
     {
         $t=1;
     }
 }
        
        
 ?>
 
          
          

    
       
       <tr>
        <td><?php echo $i=$i+1 ?></td>
        <td><?php echo $result["ID"] ?></td>
        <td><?php echo $result["CNAME"] ?></td>
        <td><?php echo $result["ESTD"] ?></td>
        <td><?php echo $result["sector"] ?></td>
        <td><?php echo $result["CREG"] ?></td>
        <td><?php echo $result["PHONE"] ?></td>
         <td>&ensp;&ensp;&ensp;&ensp;<?php echo $result["RDATE"] ?></td>
         <td><img src="image/<?php echo $result['image'] ?>"></td>  
        <?php  echo" <td><a href='ghgdeladmin.php?del=$id'><button class='update' onclick='hey()'>DELETE</button></a></td>    ";?>
           <?php  
        if($t==0) 
          { echo "<td><a href='ghganalysis.php'><button class='update'>NEW</button></a></td>   "; 
          } 
 else{
     echo "<td><button class='update2'>SCRUTINIZED</button></td>    ";
 } ?>
           
      </tr>
      <?php } ?>
     <tr> <td colspan="11"> <?php   echo "TOTAL ROWS: ".$row2; ?></td></tr>    
                              </tbody>
                  
          </table>
                  
                  
                  
     <?php         }//elseif
          }else{ ?>
              
              <table class="table12" border='1' cellspacing="0">
    <thead>
 
      <tr>
       <th>Sr.No.</th>
        <th>ID</th>
        <th>COMPANY</th>
        <th>YEAR</th>
         <th>SECTOR</th>
          <th>CREG</th>
           <th>PHONE</th>
            <th>REG-DATE</th>
              <th>IMAGE</th>
              <th>DELETE</th>
              <th>REPORT</th>
        </tr>
    </thead><tbody>
<?php        $query_select="SELECT * FROM ghgreg";  
            $run_query=mysqli_query($conn, $query_select);
         
      $id=0;    
       $i=0;
         
    while($result= mysqli_fetch_assoc($run_query))  
{ 
        $id=$result["ID"];
        $t=0;
         $query_select2="SELECT CID FROM ghgrate2";  
          $run_query2=mysqli_query($conn, $query_select2);
 while($result2= mysqli_fetch_assoc($run_query2))
 {
     if($id==$result2["CID"])
     {
         $t=1;
     }
 }
        
        
 ?>
 
          
          

    
       
       <tr>
        <td><?php echo $i=$i+1 ?></td>
        <td><?php echo $result["ID"] ?></td>
        <td><?php echo $result["CNAME"] ?></td>
        <td><?php echo $result["ESTD"] ?></td>
        <td><?php echo $result["sector"] ?></td>
        <td><?php echo $result["CREG"] ?></td>
        <td><?php echo $result["PHONE"] ?></td>
         <td>&ensp;&ensp;&ensp;&ensp;<?php echo $result["RDATE"] ?></td>
         <td><img src="image/<?php echo $result['image'] ?>"></td>  
        <?php  echo" <td><a href='ghgdeladmin.php?del=$id'><button class='update' onclick='hey()'>DELETE</button></a></td>    ";?>
           <?php  
        if($t==0) 
          { echo "<td><a href='ghganalysis.php'><button class='update'>NEW</button></a></td>   "; 
          } 
 else{
     echo "<td><button class='update2'>SCRUTINIZED</button></td>    ";
 } ?>
           
      </tr>
      <?php } }?>
     <tr> <td colspan="11"> <?php   echo "TOTAL ROWS: ".$row; ?></td></tr>
         
       </tbody>
        </table>
    </div>

</body>
</html>
