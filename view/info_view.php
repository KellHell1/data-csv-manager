<head>
<link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/extensions/filter-control/utils.min.js"></script>
<link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
</head>

<?php


if (mysqli_num_rows($result) > 0) {
    echo "<div class='table-responsive'><table class='table table-striped table-bordered'
        id='mytable'
        data-searchable='true'
        data-filter-control='true'
        data-show-search-clear-button='true'>
                        <thead>
                         <tr>
                         <th data-field='UID' data-filter-control='input'>UID</th>
                         <th data-field='name' data-filter-control='input'>Name</th>
                         <th data-field='age' data-filter-control='input'>Age</th>
                         <th data-field='email' data-filter-control='input'>Email</th>
                         <th data-field='phone' data-filter-control='input'>Phone</th>
                         <th data-field='gender' data-filter-control='select'>Gender</th>
                         </tr>
                        </thead><tbody>";
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

<script>
  $(function() {
    $('#mytable').bootstrapTable()
  })
</script>

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
