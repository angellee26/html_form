<html> 
    <head>
        <title>Form Submission</title>
    </head>
    <body>
        <h1> ADD STUDENT </h1>
        <form action = "action_page.php" method="POST">
            <table border="1" cellspacing="5" width="30%">
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type = "text" Name = "FullName" placeholder="Enter Your FullName"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type = "Radio" id="Male" name="Gender" value="Male" checked>
                        <label for = "Male">Male </label>
                        <input type = "Radio" id="Female" name="Gender" value="Female">
                        <label for = "Female">Female </label>
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name = "Country">
                        <option value = "Select Country"> -Select Country- </option>
                        <option value = "PH"> Philippines </option>
                        <option value = "AUS"> Australia </option>
                        <option value = "US"> United States </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan = "2" align="right">
                        <input style = "padding:1@px; color: #FFF; background-color: blue"
                        type = "Submit" name = "save" value = "Save"/> </td>
                </tr>
            </table>
        </form>
    </body>    
</html>