<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Slider - Range with fixed minimum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="ajax.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <p>
                <label for="amount">Maximum price:</label>
                <input type="text" id="amount" readonly="" style="border:0; color:#f6931f; font-weight:bold;">
            </p>

            <div id="slider-range-min">

            </div>
        </div>

        <div class="row">
            <div id="mainData" class="card-container">

            </div>
        </div>

    </div>

</body>

</html>