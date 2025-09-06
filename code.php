<?php 
$connect = new PDO("mysql:host=localhost;dbname=countries", "root", "");

// Default result
$result = [];

// If user entered a country code
if (!empty($_POST['country_code'])) {
    $code = strtoupper(trim($_POST['country_code']));

    // Call stored procedure with parameter
    $stmt = $connect->prepare("CALL GetCountryByCode(:p_country_code)");
    $stmt->bindParam(':p_country_code', $code, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>parameter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-2 mb-3 text-center text-primary">Countries</h1>

    <!-- Country dropdown -->
    <div class="row mb-3">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
            <select name="select_box" class="form-select">
                <option value="">Select Country</option>
                <?php 
                if (!empty($result)) {
                    foreach ($result as $row) {
                        echo '<option selected value="'.$row["country_name"].'">'.$row["country_name"].'</option>';
                    }
                }
                ?>  
            </select>
        </div>
        <div class="col-md-3">&nbsp;</div>
    </div>

    <!-- Search bar for country code -->
    <form method="POST" id="codeForm" class="row">
        <div class="col-md-4 offset-md-3">
            <input type="text" name="country_code" id="country_code" class="form-control" 
                   placeholder="Enter country code" maxlength="2" required>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Auto-submit when user types 2 characters
    document.getElementById('country_code').addEventListener('input', function() {
        if (this.value.length === 2) {
            document.getElementById('codeForm').submit();
        }
    });
</script>
</body>
</html>
