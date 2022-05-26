<?php
include 'connect.php';
session_start();
$s = $_SESSION['userName']
?>
<?php
$a = "SELECT * FROM `tbl_book` WHERE id=(select max(id) from tbl_book)";
$res = mysqli_query($con, $a);
$ar = mysqli_fetch_array($res);
$prodnum = $ar['amt_bricks'];
$kid = $_SESSION['kid'];
$final_rate = $prodnum * $kid;
?>

<!doctype html>
<html>
<title></title>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style8.css">
    <script type="text/javascript" src="./payment.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script type="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
                <div class="card border-0">
                    <div class="row justify-content-center">
                        <h3 class="mb-4">Credit Card Checkout</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 border-line pb-3">
                            <div class="form-group">
                                <p class="text-muted text-sm mb-2">Name on the card</p> <input type="text" name="name" placeholder="Name" size="15">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-2">Card Number</p>
                                <div class="row px-3"> <input type="text" name="card-num" placeholder="0000 0000 0000 0000" size="18" id="cr_no" minlength="19" maxlength="19">
                                    <p class="mb-0 ml-3">/</p> <img class="image ml-1" src="https://i.imgur.com/WIAP9Ku.jpg">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-3">Expiry date</p> <input type="text" name="exp" placeholder="MM/YY" size="6" id="exp" minlength="5" maxlength="5">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-3">CVV/CVC</p> <input type="password" name="cvv" placeholder="000" size="1" minlength="3" maxlength="3">
                            </div>
                            <div class="form-group mb-2">
                                <div class="custom-control custom-checkbox custom-control-inline"></div>
                            </div>
                        </div>

                        <div class="col-sm-5 text-sm-center justify-content-center pt-4 pb-4">
                            <small class="text-sm text-muted">Amount of bricks Ordered</small>
                            <h5 class="mb-3">
                                <h4><?php echo $ar["amt_bricks"]; ?></h4>
                            </h5> <small class="text-sm text-muted">Payment amount</small>
                            <div class="row px-3 justify-content-sm-center">
                                <h2 class=""><span class="text-md font-weight-bold mr-2">₹</span><span class="text-danger"><?php echo "$final_rate" ?></span></h2>
                            </div> <a href="succes.php"><button type="submit" class="btn btn-red text-center mt-4">PAY</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>