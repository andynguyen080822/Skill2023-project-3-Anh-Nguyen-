<?php 
include "header.php";

// Step 1: CONNECT TO THE DATABASE
$conn = mysqli_connect("localhost", "root", "", "id20758508_adventures");
if ($conn ===false) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
// Step 2: RETRIEVE THE RECORD
$id = $_POST['id'];
?> <h1> <?php echo $id;?> </h1> 
<?php 
 if(isset($id)) {    
   $query = "SELECT * FROM adventures WHERE $id = $record.["id"]";
   $result = mysqli_query($conn, $query);
   $record = mysqli_fetch_assoc($result);
   
}

// Step 3: DISPLAY THE RECORD INTO A FORM
?>
<br>
<h1> Edit and update the trip </h1>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
    <label>Heading:</label>
    <input type="text" name="heading" value="<?php echo $record['heading']; ?>"><br>
    <label>Trip date:</label>
    <input type="date" name="tripDate" value="<?php echo $record['tripDate']; ?>"><br>
    <label>Trip date:</label>
    <input type="number" name="duration" value="<?php echo $record['duration']; ?>"><br>
    <label>Trip date:</label>
    <input type="text" name="summary" value="<?php echo $record['summary']; ?>"><br>
    <br>
    <input type="submit" value="Update">
</form>

<?php 
// Step 4: EDIT, POST FROM THE FORM AND SAVE INTO THE DATABASE
    $heading = $_POST['heading'];
    $tripDate = $_POST['tripDate'];
    $duration = $_POST['duration'];
    $summary = $_POST['summary'];

    $updateQuery = "UPDATE records SET heading = '$heading', tripDate = '$tripDate', duration = '$duration', summary = '$summary', WHERE id = $id";
    mysqli_query($conn, $updateQuery);

// Step 5: Provide feedback
    echo "Record updated successfully!";
?>