    



<?php
if ($this->result == []) {
    $this->result['empName'] = "";
    $this->result['empDate'] = "";
    $this->msg = "error details<br><br>" . "employee " . $this->id . " not found";
}
?>
<form action="<?php echo config::URL ?>employees/getAction" method="POST">
    <label>ID:<input name="empid" type="number" value="<?php echo $this->id; ?>"></label>
    <label>Name:<input name="empname" type="text" value="<?php echo $this->result['empName']; ?>"></label>
    <label>Date:<input name="empdate" type="date" value="<?php echo $this->result['empDate']; ?>"></label><br>
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

   
   
    <h3><?php echo $this->msg; ?></h3><br>

