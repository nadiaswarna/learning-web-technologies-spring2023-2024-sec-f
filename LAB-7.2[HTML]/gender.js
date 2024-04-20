<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Gender</title>
</head>
<body>
    <form id="genderForm" method="get" action="" enctype="">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" /> Male 
            <input type="radio" name="gender" value="Female" /> Female
            <input type="radio" name="gender" value="Other" /> Other
        </fieldset> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        document.getElementById('genderForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            var gender = document.querySelector('input[name="gender"]:checked').value;
            
            
            alert('Gender selected: ' + gender);

            
        });
    </script>
</body>
</html>
