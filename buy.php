<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuCoAuctionHouse</title>
    <link rel="stylesheet" href="style.css">
    <script src="logic.js"></script>
</head>
<body>
    <div class="Heading">
        <button onclick="window.location.href = 'aboutus.html';">About Us</button>
        <img src="duinocoinlogo.png" style="max-width:15%;height:auto;" onclick="window.location.href = 'index.html';">
        <button onclick="window.location.href = 'donate.html';">Donate</button>
        <h1>Buy A Product</h1>
    </div>
    <div class="buytext">
        <h4>You have to send us an inquiry before you can buy the product. This will first be checked and then confirmed by email. You only pay for your product once your request has been confirmed.</h4>
    </div>
    <div class="buy">
    <br>
    <?php
    if(isset($_post["submit"])){
        mail("ducoauctionhouse@gmail.com", "ItemRequest", 'Item: '.$_POST["Item"].'Amount: '.$_POST["Amount"].'DuinoCoin Username: '.$_POST["DuCoName"].'E-Mail: '.$_POST["email"].'Name: '.$_POST["Name"].'Street + HouseNumber: '.$_POST["street+housenumber"].'ZipCode: '.$_POST["zipcode"].'City: '.$_POST["City"].'Country: '.$_POST["country"].'Otherwishes'.$_POST["otherwishes"]);
    ?>
    <h5>Your request has been sent! We'll get back to you via email within the next 24 hours!</h5>
    <?php
    }
    ?>




        <form action="buy.php" method="post">
            <h4>Which item do you want to buy?</h4>
            <br>
            <select name="Item">
                <option value="ArduinoNano">Arduino Nano</option>
                <option value="40PinFtoFCable">40Pin FtoF Cable</option>
            </select>
            <br>
            <h4>How many of this item do you want to buy?</h4>
            <br>

            <select name="Amount">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br>
            <h4>What is your DuinoCoin username?</h4>
            <br>
            <input type="text" name="DuCoName" placeholder="DuinoCoin Username" required>
            <br>
            <h4>What's your email?</h4>
            <br>
            <input type="email" name="email" placeholder="E-Mail" required>
            <br>
            <h4>What is your first and last name?</h4>
            <br>
            <input type="text" name="Name" placeholder="Name" required>
            <br>
            <h4>What is your street and house number?</h4>
            <br>
            <input type="text" name="street+housenumber" placeholder="Street + HouseNumber" required>
            <br>
            <h4>What's your zip code?</h4>
            <br>
            <input type="text" name="zipcode" placeholder="ZipCode" required>
            <br>
            <h4>What is your city?</h4>
            <br>
            <input type="text" name="City" placeholder="City" required>
            <br>
            <h4>What is your country?</h4>
            <br>
            <input type="text" name="country" placeholder="Country" required>
            <br>
            <h4>Do you have any other questions or problems?</h4>
            <br>
            <textarea name="otherwishes" cols="30" rows="10"></textarea>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>