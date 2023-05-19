<?php
include "header.php";
?>           
        <main>
            <div class="inputForm">

                <h1> Admin-Add Adventure </h1>
                <hr>
                <h3> Input details about the trip </h3>

                <form method="post" action="admin-confirm.php" class="addAventureForm">

                <label for="text">Heading </label>
                <input type="text" name="heading" id="heading" class="heading" placeholder="Trip title" required>
                <br>
                
                <label for="date">Trip date</label>
                <input type="date" name="tripDate" id="tripDate" class="tripDate" placeholder="Trip date" required>
                <br>
            
                <label for="text">Duration</label>
                <input type="number" name="duration" id="duration" class="duration" placeholder="number of days" min="0" max="999" required>
                <label for="text">day(s)</label>
                <br>
                
                <label for="text">Summary</label>
                <input type="text" name="summary" id="summary" class="summary" placeholder="Trip summary" required>
                <br><br>
                
                <label for="image">Image</label>
                <input type="file" name="image" id="image" accept="image/*" required>
                <br><br>

                <input type="submit" name="submit" value="submit" class="submitButton">
            </div>
        </main>    
</body>


