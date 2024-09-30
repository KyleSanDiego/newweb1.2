<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Vote for Your Character</h1>
    <div id="voting-options">
        <button class="vote-btn" data-option="Ivan">Ivan</button>
        <button class="vote-btn" data-option="AJ">AJ</button>
        <button class="vote-btn" data-option="Miguel">Miguel</button>
        <button class="vote-btn" data-option="Matthew">Matthew</button>
        <button class="vote-btn" data-option="Justine">Justine</button>
    </div>
    <br>
    <br>
    <br>
    <h2>Results:</h2>
    <div id="results"></div>

    <script>
        $(document).ready(function() {
            function fetchResults() {
                $.get('results.php', function(data) {
                    $('#results').html(data);
                });
            }

            $('.vote-btn').click(function() {
                var option = $(this).data('option');
                $.post('vote.php', {option: option}, function() {
                    fetchResults();
                });
            });

           
            fetchResults();

            
            setInterval(fetchResults, 5000);
        });
    </script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> 
    <div id="creds"><h6>idea by achiaa</h6></div>
</body>