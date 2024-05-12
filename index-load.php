<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>JQuery-Ajax LOAD</title>
</head>

<body>
    <div class="container py-5 text-center">
        <div class="row">
            <div id="load_data" class="data">
                <h1>This is LOAD Method</h1>
                <input type="submit" value="Load Data" class="btn btn-primary" id="lbtn">
            </div>
        </div>
    </div>


    <script src="jquery.js"></script>
    <script>
    $(document).ready(function() {
        $('#lbtn').click(function() {
            $('#load_data').load('load.html',function(responseTxt,statusTxt,xhr){
                alert(statusTxt);
            });
            
        });
    });
    </script>
</body>

</html>