<!DOCTYPE HTML>
<html>
<!--
****************************************************************************
*Author: Shane Walsh
*Assignment: WE4.1 PHP Web App Assignment, Digital Skills Academy      
*Student ID: D15128603
*Date: 2016/05/20
*REF: http://www.w3schools.com/tags/att_input_placeholder.asp
*REF: http://www.w3schools.com/tags/tag_legend.asp
*REF: http://www.w3schools.com/tags/att_input_maxlength.asp
****************************************************************************
*-->

    <head>
        <title>Assignment 1: Login System</title>
    </head>

    <body>
        <p>Digital Skills Academy: WE4.1 PHP Web and Device Programming Assignment</p>

        <!--Form calling formValidation php file with POST method -->
        <form action="formValidation.class.php" method="POST">   
       
        <fieldset>
        <!--On submit sending username and password ID to php file for validation -->    
        <legend>Please Login: </legend>
        <input type="text" name="username" id="username" required autofocus placeholder="Your Username" maxlength="16"></input><BR>
        <input type="text" name="password" id="password" required autofocus placeholder="Your Password" maxlength="16"></input><BR>
        <input type="submit"></input>
        </fieldset>

        </form>

        <div align="center">
        
        <h3>Please Note: Below are valid case sensitive Usernames and corresponding Passwords for testing purposes.</h3>
        
        <table border="1">
            <tr>
                <th>Username</th>       <!-- Table displaying valid usernames and passwords for testing purposes-->
                <th>Password</th>
            </tr>
            <tr>
                <td>Shane</td>
                <td>Saturn</td>
            </tr>
            <tr>
                <td>Daniel</td>
                <td>Pluto</td>
            </tr>
            <tr>
                <td>Aoife</td>
                <td>Mercury</td>
            </tr>
            <tr>
                <td>Isabelle</td>
                <td>Venus</td>
            </tr>   
            
        </table>
            
        </div>
       

    </body>

</html>