<!-- 
There are probably many improvements that could be made,
but it's a start on the frontend at least.
-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../Font/css/font-awesome.min.css">
<link rel="text/javascript" href="../Bootstrap/js/bootstrap.min.js">

<div class="container">
    <?php
    include 'header.php';
    ?>
<div class="row">
        <h1>Contact us</h1>
</div>
<div class="row">
        <h4 style="text-align:center">We'd love to hear from you!</h4>
</div>
<div class="row input-container">
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" required />
                <label>Name</label> 
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Email</label> 
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" required />
                <label>Phone Number</label> 
            </div>
        </div>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <textarea required></textarea>
                <label>Message</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="btn-lrg submit-btn">Send Message</div>
        </div>
</div>
</div>
