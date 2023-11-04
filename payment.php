<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="payment.css">
<title>Payment Method</title>
</head>
<body>
     <div class="container-fluid">
        <div class="edit-profile row">
          <div class="col">
            <div class="container">
                <div class="title">
                    <h4>Select Payment Method</h4>

                </div>
                <form action="#">
                    <input type="radio" name="payment" id="visa">
                    <input type="radio" name="payment" id="mastercard">
                    <input type="radio" name="payment" id="gcash">
                    <input type="radio" name="payment" id="cashonpayment">


                    <div class="category">
                        <label for="visa" class="visaMethod">
                            <div class="imgName">
                                <div class="imgContainer visa">
                                    <img src="/images/visa.jpg" alt="">
                                </div>
                                <span class="name">VISA</span>
                            </div>
                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                        </label>

                        <label for="mastercard" class="mastercardMethod">
                            <div class="imgname">
                                <div class="imgContainer mastercard">
                                    <img src="/images/mastercard.png" alt="">
                                </div>
                                <span class="name">Master Card</span>
                            </div>
                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                        </label>
                        <label for="gcash" class="gcashMethod">
                            <div class="imgname">
                                <div class="imgContainer gcash">
                                    <img src="/images/gcash.png" alt="">
                                </div>
                                <span class="name">Gcash</span>
                            </div>
                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                        </label>
                        <label for="cashonpayment" class="comMethod">
                            <div class="imgname">
                                <div class="imgContainer com">
                                    <img src="/images/cash.jpg" alt="">
                                </div>
                                <span class="name">Cash on Payment</span>
                            </div>
                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                        </label>
                    </div>
                </form>
            </div>
          </div>
        </div>
     </div>  
</body>
</html>