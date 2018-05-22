

<form action="<?php echo config::URL  ?>employees/getAction" method="POST">
        <label>ID:<input name="empid" type="number" value="<?php echo $this->id; ?>"></label>
        <label>Name:<input name="empname" type="text" value="<?php echo $this->name; ?>"></label>
        <label>Date:<input name="empdate" type="date"></label><br>
        <br>
       
        <input type="submit" name="action" value="Insert">
        <input type="submit" name="action" value="GetAllPerson">
        <input type="submit" name="action" value="GetPerson">
        <input type="submit" name="action" value="Update">
        <input type="submit" name="action" value="Delete">
        <!--<button onclick="GetAll()">Get All</button>-->
        </form>
        <hr>
        <div id="responsecontent">
            <br>
           <h3> <?php  echo $this->result;?> </h3>
         <br>

       
