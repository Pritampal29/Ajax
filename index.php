<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>JQuery-Ajax GET</title>
</head>

<body>
    <style>
        .loader{
            display: none;
        }
    </style>
    <div class="container py-5 text-center">
        <div class="row">
            <h1>This is GET Method</h1>
            <div id="form" class="data">
                <form id="myForm" action="" class="form-group">
                    <input type="text" name="uname" id="uName" placeholder="Enter Name" class="form-control m-3 p-2">
                    <input type="email" name="email" id="eMail" placeholder="Enter Email" class="form-control m-3 p-2">
                    <input type="button" value="Submit & Get Data" id="sbtn" class="btn btn-primary">
                </form>
            </div>

            <div id="get_form_data"></div>
            <div class="loader" id="loader">
                <img src="loader.gif" alt="Loader">
            </div>

        </div>
    </div>


    <script src="jquery.js"></script>
    <script>
    $(document).ready(function() {
        $('#sbtn').click(function() {
            var uname = $('#uName').val();
            var email = $('#eMail').val();

            if(uname == "" && email == ""){
                alert('All field are Mandatory');
            }else{
                $.ajax({
                    url:'insert.php',
                    type:'post',
                    data:{
                        uname:uname,email:email
                    },
                    beforeSend:function(){
                        $('#loader').show();
                    },
                    success:function(result,status,xhr){
                        $('#get_form_data').text(result);
                        $('#loader').hide();
                    },
                    error:function(xhr,status,result){
                        $('#get_form_data').text(status);
                    },
                    complete:function(xhr,status){
                        $('#get_form_data').text(status);
                    }
                })
            }
        });
    });
    </script>
</body>

</html>