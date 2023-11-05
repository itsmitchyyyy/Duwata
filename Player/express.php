<html>
    <head>
        <title>Express Send</title> 
        <!-- Bootstrap CSS -->
	      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
      	<!-- Bootstrap Font Icon CSS -->
	      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="express.css">
        <link rel="icon" href="images/duwata.png">
    </head>
    <body>
        <div class="container-fluid">
            <div class="edit-profile row">
              <div class="col">
                <div class="center">
                  <div class="arrow1">
                  <a href="payment.html"><i class="bi bi-arrow-left"></i></a>
                  </div><br>
                    <h1>Express Send</h1><br><br><br><br>
                    <form>
                        <div class="txt_field">
                            <label>Send to:</label><br><br>
                            <input type="text"required>
                          </div><br>
                          <div class="txt_field">
                            <label>Amount:</label><br><br>
                            <input type="number"required>
                          </div><br>
                          <div class="txt_field">
                            <label>Message:</label><br><br>
                           <textarea rows="3" class="venueInfo1" id="myInput"  maxlength="80" type="text" placeholder="(Optional)"></textarea>
                           <p>0/80</p>
                          </div><br><br><br><br><br>
                          <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
     </div>        
    </body>
</html>
