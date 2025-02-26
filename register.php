<html> 
    <head>
        <title>Form Submission</title>
    </head>
    <body>
        <form action = "action.php" method="GET">
            <table>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type = "text" Name = Name></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type = "Radio" id="Male" name="Value" value="Male">
                        <label for = "Male">Male </label>
                        <input type = "Radio" id="Female" name="Value" value="Female">
                        <label for = "Female">Female </label>
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name = "Country">
                        <option value = "PH"> Philippines </option>
                        <option value = "AUS"> Australia </option>
                        <option value = "US"> United States </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan = "2"> <input type = "Submit" value = "Save"> </td>
                </tr>
            </table>
        </form>
    </body>    
</html>