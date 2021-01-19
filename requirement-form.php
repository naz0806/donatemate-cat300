<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requirement Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/style-requirement-form.css" rel="stylesheet" type="text/css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script> 
    <script src="js/donor.js"></script>

</head>

<body> 

    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6" id="form">
            <form onsubmit="mySubmit2()" method="POST" action="requirement-form-code.php">
                <h1>Charity Requirement Form</h1>
                <br><br>

                <!-- TYPE OF CHARITY ORGANIZATIONS -->
                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-10">
                            
                            <input list="category" class="input-category" id="don-category" required="" placeholder="Type of Charity Organizations*" name="don_category"/>
                                <datalist id="category"> 
                                    <option value="Community Development Charity">
                                    <option value="Education Charity">
                                    <option value="Human Services Charity">        
                                    <option value="Animal Charity">
                                    <option value="Health Charity">
                                    <option value="International NGOs">  
                                </datalist>
                        </div>
                </div>

                <!-- ITEM CATEGORY  -->
                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-10">
                            
                            <input list="category2" class="input-category" id="don-category" required="" placeholder="Item Category*" name="item_category"/>
                            <datalist id="category2">
                                <option value="Books">
                                <option value="Art Supplies">
                                <option value="Education Materials">       
                                <option value="Clothes">
                                <option value="Daily Food Supplies">
                                <option value="Dry foods">
                                <option value="Electrical appliances">        
                                <option value="Furnitures">
                                <option value="Medical Services"> 
                                <option value="Medical Supplies">  
                                <option value="Health Care">
                                <option value="Sponsorship">    
                            </datalist>
                        </div>
                </div>

                <!-- ITEM OR REQUIREMENT QUANTITY & HOW MANY-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <input type="number" placeholder="Quantity*" class="form-control" required="" name="quantity"><br>
                    </div>

                        <div class="col-md-5">
                            
                            <input list="category3" class="input-category" id="don-category" required="" placeholder="Supplies for how many*" name="supplies"/>
                                <datalist id="category3">
                                    <option value="Pax/Person">
                                    <option value="Days">        
                                    <option value="Months">
                                    <option value="Year">
                                       
                                </datalist>
                        </div>  
                        
                    <div class="col-md-1"></div> 
                </div>

                <!-- REQUIREMENT DESCRIPTIONS  -->
                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <textarea name="description" cols="40" rows="5" class="desc_text" required="" placeholder = "Requirement Descriptions*"></textarea>
                        </div>
                    <div class="col-md-1"></div>    
                </div>
                
                <center>
                    <button type="Submit" class="btn btn-info form-control" name="requirement">Submit</button>
                </center>



            </form>

           

        </div>
    </div>

</body>
</html>

