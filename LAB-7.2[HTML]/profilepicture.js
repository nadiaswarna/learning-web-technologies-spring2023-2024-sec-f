<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Profile Picture</title>
    <script>
        window.onload = function() {
            var form = document.querySelector('form');
            form.onsubmit = function(event) {
                
                event.preventDefault();
                
                
                var userId = document.querySelector('input[name="user-id"]').value.trim();
                var profilePicture = document.querySelector('input[name="profile-picture"]').value.trim();
                
                
                if (userId === '' || profilePicture === '') {
                    alert('Please fill in all fields.');
                    return false; 
                }

               
                alert('Form submitted successfully!');
              
            };
        };
    </script>
</head>
<body>
    <form method="get" action="" enctype="">
        <fieldset>
            <legend>Profile Picture</legend>
            User Id     <input type="text" name="user-id" value=""/> <br>
            Picture     <input type="file" name="profile-picture" value="" />
            <hr>
            <input type="submit" name="button" value="Submit" /> <br>
        </fieldset>
    </form>
</body>
</html>
