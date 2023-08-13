<?php
include("../database/db_conn.php");
$query = "SELECT * from `countries`";
$result = mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
    <title>login Details</title>
</head>
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat  container">
    <div class="card mb-5 mb-xl-8">
        <div class="card-body py-3">
            <form id="formAjax">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="form6Example1" class="form-label">Full Name</label>
                            <input type="text" name="full_name" id="form6Example1" class="form-control" placeholder= "ex-saurav">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="form6Example1" class="form-label">Phone No.</label>
                            <input type="number" name="phone_no" id="form6Example1" class="form-control" placeholder= "ex-0123456789">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="form6Example1" class="form-label">Email</label>
                            <input type="email" name="email" id="form6Example1" class="form-control" placeholder= "ex-saurav@gmail.com">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="country">Country</label>
                            <select name="country" class="form-control">
                                <option value="country">Select Country</option>
                                <option value="country">India</option>
                                <option value="country">USA</option>
                                <option value="country">UAE</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="country">State</label>
                            <select type="text" name="state" id="state" class="form-control">
                            <option value="country">Select state</option>
                            <option value="country">Delhi</option>
                            <option value="country">Londan</option>
                            <option value="country">Dubai</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="country">city</label>
                            <select type="text" name="city" id="city" class="form-control">
                            <option value="country">Select city</option>
                            <option value="country">lonbora</option>
                            <option value="country">fulusti</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="company">Company</label>
                            <select name="company" class="form-control">
                                <option value="country">Select company</option>
                                <option value="country">Google</option>
                                <option value="country">Microsoft</option>
                                <option value="country">Genpact</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="company">Company Address</label>
                            <select name="comp_add" class="form-control">
                                <option value="country">Select Company Address</option>
                                <option value="country">India</option>
                                <option value="country">USA</option>
                                <option value="country">China</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="form6Example1" class="form-label">Password</label>
                            <input type="password" name="password" id="form6Example1" class="form-control" placeholder= "12#@hasysn^">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <button type="submit" class="btn btn-primary btn-block mb-4">Registration</button>
                        </div>
                    </div>
                </div>
            </form>
                <div class="col">
                        <div class="form-outline">
                            <a href="login.php">
                            <button type="btn" class="btn btn-primary btn-block mb-4">Login</button>
                            </a>
                        </div>
                    </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function(){

         //change states according to country.
         $("#country").change(function(e){
            var countryId = $(this).val();
            if(countryId){
                alert("oop");
                e.preventDefault();
                $.ajax({
                    type:'POST',
                    url:'app_page/get_state.php',
                    data:{country_id:countryId},
                    success:function(response){
                        $("#state").html(response);
                    }
                });
            }
        });

        //insert data
        $("#formAjax").submit(function(e){
            e.preventDefault();
            $.ajax({
                type:'POST',
                url:'app_page/insert.php',
                data:$(this).serialize(),
                success:function(data){
                    if(data=="success"){
                        swal({title: "Thankyou!",text: "Submitted! successfully",icon: "success"}).then(function() {window.location ="login.php";});
                    }else{
                        swal({title: "sorry!",text: "Not Submitted!",icon: "error"}).then(function() {window.location ="index.php";});
                    }
                }
                
            });
        });

       

    });
</script>
</html>