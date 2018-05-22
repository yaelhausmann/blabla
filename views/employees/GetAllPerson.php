<form action="<?php echo config::URL  ?>employees/getAction" method="POST">
        <label>ID:<input name="empid" type="number"></label>
        <label>Name:<input name="empname" type="text"></label>
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
<?php
 $table = "<table border='1'>";

        $table .= ToHTML_TableHead($this->result[0]);
        foreach ($this->result as $row) {
            $table .= ToHTML_TableRow($row);
        }
 $table .= "</table>";
 echo $table;
 
        
  function ToHTML_TableHead($row) {
        $th = "<tr>";
        foreach ($row as $colName => $value) {
            $th .= "<th>$colName</th>";
        }
        $th .= "</tr>";
        return $th;
    }
      
   function ToHTML_TableRow($row) {
        $tr = "<tr>";
        foreach ($row as $colName => $value) {
            if ($colName=='empID'){
                $path = '/employeeProject/employees/getlink/' . $value;
                $tr .="<td><a href=$path>$value</a></td>";
            }
            else
            {$tr .= "<td>$value</td>";}
        }
        $tr .= "</tr>";
        return $tr;
    } 