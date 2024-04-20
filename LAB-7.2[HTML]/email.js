<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <form id="emailForm" method="get" action="" enctype="">
        Email <br>
        <input type="email" id="emailInput" name="email" value="" placeholder="" /> <!-- Use type="email" for email input -->
        <br>
        <input type="submit" name="button" value="Submit" /> <br>
    </form>

    <script>
        document.getElementById('emailForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            var email = document.getElementById('emailInput').value;
            
            
            alert('Email submitted: ' + email);

           
            document.getElementById('emailInput').value = '';
        });
    </script>
</body>
</html>
