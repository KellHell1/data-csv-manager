<?php

//echo "info view";
//print_r($result);
// foreach ($result as $elem) {
//     print_r($elem);
//     print_r('<br>');
// }

if (mysqli_num_rows($result) > 0) {
    echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
            <thead><tr><th>UID</th>
                         <th>Name</th>
                         <th>Age</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Gender</th>
                       </tr></thead><tbody>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['UID']."</td>
                  <td>" . $row['Name']."</td>
                  <td>" . $row['Age']."</td>
                  <td>" . $row['Email']."</td>
                  <td>" . $row['Phone']."</td>
                  <td>" . $row['Gender']."</td></tr>";        
    }
   
    echo "</tbody></table></div>";
}
else {
    echo "you have no records";
}
?>
<br>
<button>
<a href="http://localhost/test/index.php">Go back</a>
</button>

<div>
            <form action="downloadrecords" method="post" name="download"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Download" class="btn btn-success" value="Download csv"/>
                            </div>
                   </div>                    
            </form>           
 </div>
