<?php

session_start();
if(isset($_SESSION['uname'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('im2.jpg'); /* Add your background image URL here */
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"] {
            width: calc(100% - 110px);
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            font-weight: bold;
            margin-top: 10px;
        }

        #feedbackSection {
            margin-top: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: none;
        }

        #feedbackButton {
            width: 100px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #feedbackButton:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Security Checker</h1>
        <label for="urlInput">Enter URL:</label>
        <input type="text" id="urlInput" placeholder="Enter URL">
        <button onclick="checkURL()">Check URL</button>
        <p id="urlResult"></p>
        <br><br>
        <label for="imageInput">Upload Image:</label>
        <input type="file" id="imageInput" accept="image.*">
        <button onclick="checkImage()">Check Image</button>
        <p id="imageResult"></p>
        <br><br>
        <label for="apkInput">Upload APK File:</label>
        <input type="file" id="apkInput" accept=".apk">
        <button onclick="checkAPK()">Check APK</button>
        <p id="apkResult"></p>
        <br><br>
        <label for="pdfInput">Upload PDF File:</label>
        <input type="file" id="pdfInput" accept=".pdf">
        <button onclick="checkPDF()">Check PDF</button>
        <p id="pdfResult"></p>
    </div>

    <!-- Feedback Section -->
    <div id="feedbackSection" class="container">
        <h2>Feedback</h2>
        <textarea id="feedbackTextarea" placeholder="Your feedback..."></textarea>
        <button id="feedbackButton" onclick="submitFeedback()">Submit</button>
    </div>

    <script>
        function checkURL() {
            var url = document.getElementById("urlInput").value;
            // Placeholder logic to check URL
            if (url.includes("malicious")) {
                document.getElementById("urlResult").innerText = "Malicious URL detected!";
            } else {
                document.getElementById("urlResult").innerText = "URL is safe.";
            }
        }

        function checkImage() {
            // Placeholder logic to check image
            document.getElementById("imageResult").innerText = "Image checked.";
        }

        function checkAPK() {
            // Placeholder logic to check APK
            document.getElementById("apkResult").innerText = "APK checked.";
        }

        function checkPDF() {
            // Placeholder logic to check PDF
            document.getElementById("pdfResult").innerText = "PDF checked.";
        }

        function submitFeedback() {
            var feedback = document.getElementById("feedbackTextarea").value;
            // Placeholder logic to submit feedback
            alert("Feedback submitted: " + feedback);
        }
    </script>
 </body>
 </html>
 
 <?php
 }else{
 header("Location: login.php");
 exit();
 }
 ?>
 
