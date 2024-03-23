<?php

session_start();
if(isset($_SESSION['uname'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homograph Link Finder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('im2.jpg'); /* Specify the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%; /* Adjusted width to make the container slightly smaller */
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3); /* Box shadow for the container */
            position: relative; /* Position relative for absolute positioning */
        }
        .logout {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 16px;
            color: #007bff;
            cursor: pointer;
            text-decoration: underline;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        }
        #homographForm {
            text-align: center;
        }
        #inputText {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }
        #inputText:focus {
            outline: none;
            border-color: #555;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        #result {
            margin-top: 30px;
            border: 2px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }
        .homograph {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Homograph Link Finder</h1>
        <div class="logout" <a href="logout.php">Logout</div> <!-- Add logout button -->
        <form id="homographForm">
            <label for="inputText">Enter Text:</label><br>
            <textarea id="inputText" name="inputText" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Submit">
        </form>
        <div id="result"></div>
    </div>

    <script>
        document.getElementById('homographForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Get the input text
            var inputText = document.getElementById('inputText').value;

            // Clear previous results
            document.getElementById('result').innerHTML = '';

            // Send the input to the server for processing
            fetch('homograph_finder.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ text: inputText }),
            })
            .then(response => response.json())
            .then(data => {
                // Display the result
                document.getElementById('result').innerHTML = data.result;
            })
            .catch(error => console.error('Error:', error));
        });
        }
    </script>
</body>
</html>

