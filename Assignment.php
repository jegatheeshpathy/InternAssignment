<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <h1>Contact Us</h1>
    <form id="contact-form" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="5" cols="50" required></textarea><br><br>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject"><br><br>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone"><br><br>

      <input type="submit" value="Submit">
    </form>
    <script>
      var API_KEY = 'YOUR_API_KEY';
      var SPREADSHEET_ID = 'YOUR_SPREADSHEET_ID';
      $('#contact-form').submit(function(event) {
        event.preventDefault();
        var formData = $('#contact-form').serializeArray();
        formData.push({
          name: 'Timestamp',
          value: new Date().toLocaleString()
        });
        $.ajax({
          url: 'https://sheets.googleapis.com/v4/spreadsheets/' + SPREADSHEET_ID + '/values/Sheet1!A1:append',
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
  </body>
</html>