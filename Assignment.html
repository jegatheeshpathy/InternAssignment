<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    body {
        background-image: url('images.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }
    .my-heading {
        font-family: Arial, sans-serif; 
      }
    .my-label {
        font-weight: bold; 
      }
      input[type=submit] {
        background-color: #4CAF50; 
        border: none; 
        color: white; 
        padding: 15px 32px; 
        text-align: center; 
        text-decoration: none; 
        display: inline-block; 
        font-size: 16px;
        margin: 4px 2px; 
        cursor: pointer; 
        border-radius: 5px; 
      }
      input[type=submit]:hover {
        background-color: #3e8e41;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      
      /* Style the form fields */
      label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
      }
      
      input[type=text], input[type=email], input[type=tel], textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }
      
      /* Style the submit button */
      input[type=submit] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 10px;
        border-radius: 4px;
        cursor: pointer;
      }
      
      /* Change the button background color on hover */
      input[type=submit]:hover {
        background-color: #3e8e41;
      }
      
      </style>
  </head>
  <body>
    <center>
    <h1 class="my-heading">Contact Us</h1>
    <form id="contact-form" method="post">
        <label class="my-label" for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label class="my-label" for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label class="my-label" for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        
        <label class="my-label" for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        
        <label class="my-label" for="message">Message:</label>
        <textarea id="message" name="message" rows="6" required></textarea>

      <input type="submit" value="Submit">
    </form>
    <script>
      var API_KEY = 'AIzaSyCOMMk5flnBsN69i8l0mh-T6kyOp-U2svc';
      var SPREADSHEET_ID = 'https://docs.google.com/spreadsheets/d/1lC6TQ5vq31UvgRCGu5r0Ix5Tdf6WKICxS4pivZNo9b8/edit#gid=0';
      $('#contact-form').submit(function(event) {
        event.preventDefault();
        var formData = $('#contact-form').serializeArray();
        formData.push({
          name: 'Timestamp',
          value: new Date().toLocaleString()
        });
        $.ajax({
          url: 'https://docs.google.com/spreadsheets/d/1lC6TQ5vq31UvgRCGu5r0Ix5Tdf6WKICxS4pivZNo9b8/edit#gid=0' + SPREADSHEET_ID + '/values/Sheet1!A1:append',
          type: 'POST',
          headers: {
            'Authorization': 'Bearer ' + API_KEY,
            'Content-Type': 'application/json'
          },
          data: JSON.stringify({
            range: 'Sheet1!A1:append',
            majorDimension: 'ROWS',
            values: [formData.map(function(field) {
              return field.value;
            })]
          }),
          success: function(response) {
            alert('Thank you for contacting us!');
            $('#contact-form')[0].reset();
          },
          error: function(response) {
            alert('There was an error submitting your form. Please try again later.');
          }
        });
      });
    </script>
    </center>
  </body>
</html>
