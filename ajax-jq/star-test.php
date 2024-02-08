<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Rating</title>
    <style>
    .star {
        color: #ccc;
        cursor: pointer;
    }

    .star.active {
        color: #ffcc00;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="star-rating">
        <span class="star" data-rating="1">&#9733;</span>
        <span class="star" data-rating="2">&#9733;</span>
        <span class="star" data-rating="3">&#9733;</span>
        <span class="star" data-rating="4">&#9733;</span>
        <span class="star" data-rating="5">&#9733;</span>
    </div>

    <script>
    $(document).ready(function() {
        $('.star').click(function() {
            var rating = $(this).data('rating');
            $('.star').removeClass('active');
            $(this).prevAll('.star').addBack().addClass('active');

                alert('You rated this ' + rating + ' stars!');
        });
    });
    </script>
</body>

</html>