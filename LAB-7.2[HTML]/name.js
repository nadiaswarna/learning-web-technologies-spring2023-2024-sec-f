<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form- Name</title>
</head>
<body>
    <form id="nameForm" method="get" action="" enctype="">
        Name <br>
        <input type="text" id="nameInput" name="name" value="" placeholder="" /> <br>
        <input type="submit" name="button" value="Submit" /> <br>
    </form>

    <script>
        document.getElementById('nameForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            
            
            var name = document.getElementById('nameInput').value;
            
            
            alert('Hello, ' + name + '!');

            document.getElementById('nameInput').value = '';
        });
    </script>
</body>
</html>
