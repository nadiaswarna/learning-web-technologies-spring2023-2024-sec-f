<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Date of Birth</title>
</head>
<body>
    <form id="dobForm" method="get" action="" enctype="">
        <fieldset>
            <legend>Date of Birth</legend>
            
            <input type="number" id="dayInput" name="day" placeholder="DD" min="1" max="31" required /> /
            <input type="number" id="monthInput" name="month" placeholder="MM" min="1" max="12" required /> /
            <input type="number" id="yearInput" name="year" placeholder="YYYY" min="1900" max="9999" required />  
            <hr>
            <input type="submit">
        </fieldset>
    </form>

    <script>
        document.getElementById('dobForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
           
            var day = document.getElementById('dayInput').value;
            var month = document.getElementById('monthInput').value;
            var year = document.getElementById('yearInput').value;

           
            if (!isValidDate(day, month, year)) {
                alert('Please enter a valid date of birth!');
                return; 
            }

            
            alert('Date of birth submitted: ' + day + '/' + month + '/' + year);

            
        });

        function isValidDate(day, month, year) {
            var date = new Date(year, month - 1, day); 
            return (date.getFullYear() == year && date.getMonth() + 1 == month && date.getDate() == day);
        }
    </script>
</body>
</html>
