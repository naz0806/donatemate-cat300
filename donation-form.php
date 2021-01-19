<?php include('donation_server.php'); ?>
<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/style-donation-form.css" rel="stylesheet" type="text/css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script> 
    <script src="js/donor.js"></script>

</head>

<body> 

    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6" id="form">
            <form onsubmit="mySubmit()" method="POST" action="donation-form-code.php">
                <h1>Donation Form</h1>
                <br><br>

                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <!-- <label>Select a category :<br> -->
                            <input list="category" class="input-category" id="don-category" required="" placeholder="Category*" name="category"/>
                                <datalist id="category">
                                    <option value="Books">        
                                    <option value="Clothes">
                                    <option value="Dry foods">
                                    <option value="Electrical appliances">        
                                    <option value="Furnitures">
                                    <option value="Health care">       
                                </datalist>
                        </div>
                        <div class="col-md-5">
                            <input type="number" placeholder="Quantity*" class="form-control" name="quantity" required=""><br>
                        </div>
                    <div class="col-md-1"></div>    
                </div>

             

                <div class="row">
                    <div class="col-md-1"></div>
                    <label id="radio-label">How do you want to perform the donation?</label><br>
                        <div class="col-md-5 radio-inline">
                            <label>
                            <input type="radio" id="radio-input" name="don_type"value="self_del" onclick="hide1()" > Self delivery</label>
                           

                        </div>
                
                        <div class="col-md-5 radio-inline">
                            <label>
                            <input type="radio"  id="radio-input" name="don_type" value="pickup" onclick="showHide1()"> Pickup service</label> 
                        </div>
                        
                        
                    <div class="col-md-1"></div>    
                </div>
                <br>
                
                <div id="delivery">
                    <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <input type="date" class="form-control" required="" name="date" ><br>
                            </div>
                            <div class="col-md-5">
                                <input type="time" class="form-control" name="time" required=""><br>
                            </div>
                        <div class="col-md-1"></div>    
                    </div>
                   
                    <div class="row">
                        <div class="col-md-1"></div>
                        <label id="radio-label">Pick-up address:</label><br>
                            <div class="col-md-5 radio-inline">
                                <label>
                                <input type="radio" id="radio-input" name="address" value="addr_same"onclick="hide2()">
                                Same address</label>
                            </div>
                            <div class="col-md-5 radio-inline">
                                <label>
                                <input type="radio"  id="radio-input" name="address" value="addr_new" onclick="showHide2()">
                                New address</label>
                            </div>            
                        <div class="col-md-1"></div>    
                    </div>
                    <br>
                </div>
                <div id="address">
                    <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input type="text" placeholder="Address Line 1*" class="form-control" name="line1"required=""><br>
                                <input type="text" placeholder="Address Line 2" class="form-control" name= "line2"><br>
                            </div>
                        <div class="col-md-1"></div>    
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <input type="text" id="input-city" class="form-control form-control-alternative" name="city" placeholder="City"><br>  
                            </div>
                            <div class="col-md-5">
                                <input type="number" id="input-postal-code" class="form-control form-control-alternative" name="postal" placeholder="Postal code">
                            </div>
                        <div class="col-md-1"></div>    
                    </div>
                    <br>

                </div>    
                
                <center>
                    <input type="Submit"  name="donation" class="btn btn-info form-control">
                </center>



            </form>

           

        </div>
    </div>

</body>

<script>
    

</script>
</html>

