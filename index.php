<?php 
$connect = new PDO("mysql:host=localhost;dbname=countries", "root", "");

// Call the stored procedure instead of direct query
$query = "CALL GetCountries()";
// $query = "SELECT * FROM apps_countries";


$result = $connect->query($query);

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="library/dselect.js"></script>

        <title>StoredProcedure</title>
    </head>
    <body>

        <div class="container">
            <h1 class="mt-2 mb-3 text-center text-primary">Countries</h1>
            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6">
                    <select name="select_box" class="form-select" id="select_box">
                        <option value="">Select Country</option>
                        <?php 
                        foreach($result as $row)
                        {
                            echo '<option value="'.$row["country_name"].'">'.$row["country_name"].'</option>';
                        }
                        ?>  
                    </select>
                </div>
                <div class="col-md-3">&nbsp;</div>
            </div>      
            <br />
            <br />
        </div>
    </body>
</html>

<script>

    var select_box_element = document.querySelector('#select_box');

    dselect(select_box_element, {
        search: true
    });

</script>