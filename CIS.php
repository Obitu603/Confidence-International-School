<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confidence International School</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

   <link rel="stylesheet" href="css/CIS.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="" class="navbar-brand logo"> <span>CI</span>S</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            bg-gradient-primary aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="btn btn-warning" data-toggle="modal" data-target="#loginModal">Login</button>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
               
                    <form class="form">
                        <p class="title">Login</p>
                        <p class="message">Signup now and get full access to our app.</p>
                       
                      
                        <label>
                            <i class="fas fa-user"></i>
                            <input class="input" type="text" placeholder="" required="">
                            <span>Username</span>
                        </label>
                    
                        <label>
                            <i class="fas fa-lock"></i>
                            <input class="input" type="password" placeholder="" required="">
                            <span>Password</span>
                        </label>
                    
                        <button class="submit">Login</button>
                       
                        <p class="signin">Don't have an account? <a href="#">Forgot password</a></p>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>


    <!-- Body -->
    <div class="container d-flex flex-column align-items-center">
        <h1 class=" intro-text"> <span>Confidence International </span>School</h1>
        <h4 class="display-6">Grantee, Quick and Reliable</h4>
        <button class="btn btn-warning btn-lg mt-4" data-toggle="modal" data-target="#makePaymentModal">Make
            Payment</button>
    </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="makePaymentModal" tabindex="-1" role="dialog" aria-labelledby="makePaymentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <!-- <form id="paymentForm">
                        <div class="form-group">
                          
                            <input type="text" class="form-control" id="studentName" placeholder="Enter Student's Name" required>
                        </div> -->
                        <!-- <div class="form-group">
                          
                            <input type="email" id="email-address" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="Term" class="form-control">
                                        <option >Select Term</option>
                                        <option value="1st">1ST Term</option>
                                        <option value="2nd">2ND Term</option>
                                        <option value="3rd">3RD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="Session" class="form-control" placeholder="Session E.g 2023/2024">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="studentClass">Class:</label>
                                    <select class="form-control" id="studentClass">
                                        <option>Select Class</option>
                                        <option value="Nur 1">Nusery 1</option>
                                        <option value="Nur 2">Nusery 2</option>
                                        <option value="Pri1">Pri 1</option>
                                        <option value="Pri2">Pri 2</option>
                                        <option value="Pri3">Pri 3</option>
                                        <option value="Pri4">Pri 4</option>
                                        <option value="Pri5">Pri 5</option>
                                        <option value="JSS1">JSS 1</option>
                                        <option value="JSS2">JSS 2</option>
                                        <option value="JSS3">JSS 3</option>
                                        <option value="SSS1">SSS 1</option>
                                        <option value="SSS2">SSS 2</option>
                                        <option value="SSS3">SSS 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description of Payment:</label>
                            <textarea class="form-control" id="description"
                                placeholder="Enter Description of Payment"></textarea>
                        </div>
                        <!-- <center><button type="submit" onclick="payWithPaystack()" class="btn btn-success"><i class="bi bi-credit-card" ></i>Pay</button></center> -->
                        <!-- <div class="form-submit">
                            <button type="submit" onclick="payWithPaystack()"> Pay </button>
                          </div>
                    </form> --> 

                    <form class="form" id="paymentForm">
                        <p class="title">Make Payment</p>
            
                       
                        <div class="flex">
                         
                                <label>
                                    <i class="fas fa-user"></i>
                                    <input class="input" type="text" placeholder="" id="Fname" required="">
                                    <span>Firstname</span>
                                </label>
                            
                            <label>
                                <i class="fas fa-user"></i>
                                <input class="input" type="text" placeholder="" id="Lname" required="">
                                <span>Lastname</span>
                            </label>
                        </div> 
                       
                        <label>
                            <i class="fas fa-envelope"></i>
                            <input class="input" type="email" placeholder="" id="email-address" required="">
                            <span>Email</span>
                        </label>
                    
                        <label>
                            <i class="fas fa-user"></i>
                            <input class="input" type="text" placeholder="" id="Session" required="">
                        <span>Session</span>
                        </label>
                    
                    

                        <div class="flex">
                         
                            <label>
                                <i class="fas fa-user"></i>
                                <!-- <input class="input" type="text" placeholder="" id="Fname" required=""> -->
                                <select id="Term" class="input" >
                                    <option >Select Term</option>
                                    <option value="1st">1ST Term</option>
                                    <option value="2nd">2ND Term</option>
                                    <option value="3rd">3RD</option>
                                </select>
                                <!-- <span>Select Term</span> -->
                            </label>
                        
                        <label>
                            <i class="fas fa-user"></i>
                            <select class="input" id="studentClass">
                                <option>Select Class</option>
                                        <option value="Nur 1">Nusery 1</option>
                                        <option value="Nur 2">Nusery 2</option>
                                        <option value="Pri1">Pri 1</option>
                                        <option value="Pri2">Pri 2</option>
                                        <option value="Pri3">Pri 3</option>
                                        <option value="Pri4">Pri 4</option>
                                        <option value="Pri5">Pri 5</option>
                                        <option value="JSS1">JSS 1</option>
                                        <option value="JSS2">JSS 2</option>
                                        <option value="JSS3">JSS 3</option>
                                        <option value="SSS1">SSS 1</option>
                                        <option value="SSS2">SSS 2</option>
                                        <option value="SSS3">SSS 3</option>
                            </select>
                            
                            <!-- <span>Session</span> -->
                        </label>
                    </div> 
                    <!-- <label>
                        <i class="fas fa-user"></i>
                        <textarea class="input" id="description" placeholder="Enter Description of Payment"></textarea>
                       
                        </label> -->

                    
                        <button class="submit" onclick="payWithPaystack()">Pay</button>
                       
                        <p class="signin">Don't have an account? <a href="#">Forgot password</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.paystack.co/v1/inline.js"></script> 
      <script src="js/payment.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>