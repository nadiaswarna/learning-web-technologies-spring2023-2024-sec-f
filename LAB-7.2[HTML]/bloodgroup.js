<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Blood Group</title>
</head>
<body>
    <form method="get" action="" enctype="" id="bloodGroupForm">
        Blood Group 
        <select name="blood-group" id="bloodGroup">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        
        <hr>
        <input type="submit" name="button" value="Submit" /> <br>
    </form>

    <script>
        document.getElementById("bloodGroupForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            
         
            var bloodGroup = document.getElementById("bloodGroup").value;
            
           
            alert("Selected Blood Group: " + bloodGroup);
            
            
        });
    </script>
</body>
</html>
