<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" tpe="text/css" href="style.css">
        <link href = "../Footer/style.css" rel = "stylesheet"/>
<title>Help</title>

    </head>
    <body>
        <img src="Logo only.png" alt="Centered Image" style="width: 50%;" >
        <h1>How can we Help?</h1>
        <center><input type="text" class="search-input" placeholder="ASK HELP FOR YOUR PROBLEM"></center><br><br>
        <br>

        <h5>FREQUENTLY  QUESTIONS</h5>
        <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-header" onclick="toggleAccordion('contact')">
                &#10132; How can I contact your store?
                
              </div>
              <div class="accordion-content" id="contact">
                <p>You can contact us using our <a href="#">contact us page</a>, and if you face any kind of error, please submit a complaint.</p>
              </div>
            </div>
          
            <div class="accordion-item">
              <div class="accordion-header" onclick="toggleAccordion('return')">
                &#10132;How can I return my T-shirt that I have already paid?
                
              </div>
              <div class="accordion-content" id="return">
                <p>Don't worry! You don't have to pay for returning products. We'll take care of that. Use our <a href="#">Return Products Page</a> and please refer to the size chart before ordering.</p>
              </div>
            </div>
          
            <div class="accordion-item">
              <div class="accordion-header" onclick="toggleAccordion('delivery')">
                &#10132;How many days will it take to deliver my orders?
            
              </div>
              <div class="accordion-content" id="delivery">
                <p>If you order on weekends, your order will ship on Monday, and it will take 3-5 working days to deliver your order. (* 10-day delivery in Colombo).</p>
              </div>
            </div>
          
            <div class="accordion-item">
              <div class="accordion-header" onclick="toggleAccordion('cancel')">
                &#10132;Can I cancel my order?
                
              </div>
              <div class="accordion-content" id="cancel">
                <p>You can cancel any kind of order before 24 hours. If you want to cancel your order, use our <a href="#">My Orders Page</a>.</p>
              </div>
            </div>
          
            <div class="accordion-item">
              <div class="accordion-header" onclick="toggleAccordion('new-arrivals')">
                &#10132;How can I know your newly arrivals?
              
              </div>
              <div class="accordion-content" id="new-arrivals">
                <p>If you are interested in our store, you can subscribe to our news and updates to be informed about the latest arrivals.</p>
              </div>
            </div>
          </div>
          
          <script>
            function toggleAccordion(id) {
              var content = document.getElementById(id);
              var button = document.querySelector('#' + id + ' + .accordion-button');
              if (content.style.display === "block") {
                content.style.display = "none";
                button.textContent = "▼";
              } else {
                content.style.display = "block";
                button.textContent = "▲";
              }
            }
          </script>

          <h5>ASK QUESTIONS</h5>

          <table>
            <tr>
             <td>Name</td>
             <td><input type="text" name="nme" ></td>
             </tr>
             <tr>
                <td>Email</td>
               <td> <input type="email" name="emal" ></td>
            </tr>
            <tr>
                <td>Question</td>
                <td><input type="question" name="quest"></td>
            </tr>
            <tr>
                <td><button type="submit" class="sumbit_button">Submit</button></td>
                </tr>
                <tr>
                  <td class="para_color">Login before ask question </td>
                  <td><button type="submit" class="login_button">Login</button></td>
            </tr>
          </table>
          <footer>
            <?php include '../Footer/index.php';?>
          </footer> 
            
    </body>
</html>