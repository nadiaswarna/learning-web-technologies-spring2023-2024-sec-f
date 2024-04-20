<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Degree</title>
</head>
<body>
    <form id="degreeForm" method="get" action="" enctype="">
        <fieldset>
            <legend>Degree</legend>
            
            <input type="checkbox" name="degree" value="SSC"> SSC 
            <input type="checkbox" name="degree" value="HSC"> HSC
            <input type="checkbox" name="degree" value="BSc"> BSc 
        </fieldset> <br>
        <input type="submit">
    </form>

    <script>
        document.getElementById('degreeForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var selectedDegrees = [];
            var checkboxes = document.querySelectorAll('input[name="degree"]:checked');
            checkboxes.forEach(function(checkbox) {
                selectedDegrees.push(checkbox.value);
            });

            if (selectedDegrees.length === 0) {
                alert('Please select at least one degree!');
            } else {
                alert('Selected degrees: ' + selectedDegrees.join(', '));
            }

           
        });
    </script>
</body>
</html>
