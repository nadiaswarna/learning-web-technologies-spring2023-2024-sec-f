<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Person Profile</title>
    <script>
        window.onload = function() {
            var form = document.querySelector('form');
            form.onsubmit = function(event) {
               
                event.preventDefault();
                
              
                var name = document.querySelector('input[name="name"]').value.trim();
                var email = document.querySelector('input[name="email"]').value.trim();
                var gender = document.querySelector('input[name="gender"]:checked');
                var day = document.querySelector('input[name="day"]').value.trim();
                var month = document.querySelector('input[name="month"]').value.trim();
                var year = document.querySelector('input[name="year"]').value.trim();
                var bloodGroup = document.querySelector('select[name="blood-group"]').value.trim();
                var degrees = document.querySelectorAll('input[name="degree"]:checked');
                var profilePicture = document.querySelector('input[name="profile-picture"]').value.trim();
                
                
                if (name === '' || email === '' || !gender || day === '' || month === '' || year === '' || bloodGroup === '' || degrees.length === 0 || profilePicture === '') {
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
        <table border="1">
            <th colspan="2">PERSON PROFILE</th>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=""></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male"> Male 
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>
                    <input type="number" name="day" placeholder="" min="1" max="31" required /> /
                    <input type="number" name="month" placeholder="" min="1" max="12" required /> /
                    <input type="number" name="year" placeholder="" min="1900" max="9999" required />
                    <i>{dd/mm/yyyy}</i>
                </td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>
                    <select name="blood-group">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Degree</td>
                <td>
                    <input type="checkbox" name="degree" value="SSC"> SSC 
                    <input type="checkbox" name="degree" value="HSC"> HSC
                    <input type="checkbox" name="degree" value="BSc"> BSc 
                    <input type="checkbox" name="degree" value="MSc"> MSc 
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>
                    <input type="file" name="profile-picture" value="" />
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 12px;"></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
