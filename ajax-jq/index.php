<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>JQuery-Ajax</title>
</head>



<body>
    <!-- <div class="container">
        <h1 class="text-center">Data</h1>
        <div id="heading">
            <h2>This Is Changable Text</h2>
        </div>
        <button class="btn btn-primary" id="loadbtn">Change</button>
    </div>

    <script>
    $(document).ready(function() {
        $('#loadbtn').click(function() {
            $('#heading').load('data.php')
        });
    });
    </script> -->

    <h1 class="text-center">Form Data</h1>
    <form action="" id="myForm">

        Name: <input type="text" name="uname" id="uname"><br><br>
        Surname: <input type="text" name="lname" id="lname"><br><br>

        <input type="button" value="Submit" class="btn btn-primary" id="sbtn">

    </form>
    <h3 id="result"></h3>

    <script>
    $(document).ready(function() {
        $("#sbtn").click(function() {
            var uname = $("#uname").val();
            var lname = $("#lname").val();

            if (uname == "" || lname == "") {
                alert("All Required");
            } else {
                $.get(
                    "process.php", 
                    // {
                    //     uname: uname,
                    //     lname: lname
                    // },
                    $("#myForm").serialize(),
                    function(response) {
                        $("#result").text(response);
                    },
                );
            }
        });
    });
    </script>

</body>


</html>