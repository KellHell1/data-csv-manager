<html lang="en">
<head>
</head>
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="./index.php" method="post" name="upload" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Upload</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" >Import</button><br>
                                <br>
                                </form>
            
                <div class="col-md-4">
                </form>
                <form action="./index.php/allrecords">
                    <input type="hidden"
                    name="action"
                    value="view">
                    <input type="submit" 
                    value="View all records">

                    <form action="./index.php/delete">
                    <input type="hidden"
                    name="action"
                    value="delete">
                    <input type="submit" 
                    value="Delete all records">
                </form>
                </form>

                            </div>
                        </div>
                    </fieldset>
                
                </div>
            </div>
            <?php
            ?>
        </div>
    </div>
</body>
</html>