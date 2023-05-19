<?php
// CONNECT TO THE DATABASE
$conn = mysqli_connect("localhost", "root", "", "id20758508_adventures");
if ($conn ===false) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="icon" type="image/png" href="images/paddle-white.png">
    <link rel="stylesheet" href="style2.css" type="text/css">
    <script src="utility.js"> </script>
  
</head>

<body>
     <!-- HEADER PANEL-->
<header>
      <a id="menuicon" class="menuicon"><img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" height="35px" alt="menu icon"></a>
      <a class="headline"> Halifax Canoe and Kayak </a>    
      <a class="logo"><img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" height="35px" alt="company logo"> </a>
</header>

     <!-- MENU BAR-->
    <aside id="leftmenu">
        <nav>
             <ul class="leftmenuitem">
                <li class="leftmenuitem"><a href="home.html"></a>Home</li>
                <li class="leftmenuitem"><a href="trip.html"></a>Book trip</li>
                <li class="leftmenuitem"><a href="rent.html"></a>Product rental</li>
                <li class="leftmenuitem"><a href="localhost\admin-add.php"></a>Add-adventure</li>
            </ul>
         </nav>
         <input type="search" class="searchbox" placeholder="Search our services" />
    </aside>
    
    <main>
        <!-- HOMEPAGE BIG BANNER-->
        <div class="banner">
            <img class="banner" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg" alt="homepage banner")>
                <div class="bannermessage">Come Experience  
                <br>                            Canada</div>       
                
        </div>       

        <!--PULLING OUT & LISTING ALL ADVENTURES IN THE DATABASE-->
        <div class="bodytext">
            <h1>Listing all Adventures</h1>
            <?php
            $sql = "SELECT * FROM adventures";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { 
                    ?>
                    <div class="<?php echo $row["heading"];?>" >
                    <h2><?php echo $row["heading"];?></h2>
                    <img src="<?php echo $row["image"]; ?>">
                         <ul class="tripdate">
                           <li><?php echo "Trip date: ". $row["tripDate"];?></li>
                           <li>Duration: <?php echo $row["duration"] . " day(s)";?></li>
                        </ul>
                    <h3>Summary</h3>
                    <p class="detail">
                    <?php echo $row["summary"]."<br>";?>                    
                   
                    </p>    
                    <form method="post" action="admin-edit.php" class="editForm">
                    <input type="hidden" name="id" value= <?php echo $row["id"];?>>
                    <input type="submit" name="edit" value="Edit trip" class="editButton">
                    <input type="submit" name="delete" value="Delete" class="deleteButton">
                    <br> <hr>
                </div>        
            <?php        
            //        echo "Heading: " . $row["heading"] . "<br>";
            //        echo "Trip date: " . $row["tripDate"] . "<br>";
            //        echo "Duration: " . $row["duration"] . "day(s)" ."<br>";
            //        echo "Summary: <br>" . $row["summary"] . "<br>";
            //        echo "Image: " . $row["image"] . "<br>";
            //        echo "<hr><br>";
                }
            } else {
                echo "No trips found in the database!";
            }

            $conn->close();
            ?>    
     </main>
   
</body>
</html>