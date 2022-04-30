<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuCoAuctionHouse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Heading">
        <button onclick="window.location.href = 'aboutus.php';">About Us</button>
        <img src="duinocoinlogo.png" style="max-width:15%;height:auto;" onclick="window.location.href = 'index.php';">
        <button onclick="window.location.href = 'donate.php';">Donate</button>
        <h1>Buy DuinoCoins</h1>
    </div>
    <div class="buytext">
        <h4>You have to send us an inquiry before you can buy the Coins. This will first be checked and then confirmed by email. You only pay for your Coins once your request has been confirmed.</h4>
    </div>
    <div class="buy">
    <br>

    <?php
    if(isset($_post["submit"])){
        mail("ducoauctionhouse@gmail.com", "DuCoBuyRequest", 'Amount: '.$_POST["Amount"].'DuinoCoin Username: '.$_POST["DuCoName"].'E-Mail: '.$_POST["email"].'Otherwishes'.$_POST["otherwishes"]);
    ?>
    <h5>Your request has been sent! We'll get back to you via email within the next 24 hours!</h5>
    <?php
    }
    ?>





        <form action="ducobuy.php" method="post">
            <h4>How many DuinoCoins you want to buy?</h4>
            <br>

            <select name="Amount">
                <option value="10.000">10.000</option>
                <option value="20.000">20.000</option>
                <option value="30.000">30.000</option>
                <option value="40.000">40.000</option>
                <option value="50.000">50.000</option>
                <option value="60.000">60.000</option>
                <option value="70.000">70.000</option>
                <option value="80.000">80.000</option>
                <option value="90.000">90.000</option>
                <option value="100.000">100.000</option>
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
            <h4>Do you have any other questions or problems?</h4>
            <br>
            <textarea name="otherwishes" cols="30" rows="10"></textarea>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>