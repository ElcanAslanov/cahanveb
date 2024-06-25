<?php
//Start the session.
session_start();
if(!isset($_SESSION['user'])) header('location: login.php');
$_SESSION['table'] = 'users';
$user = $_SESSION['user'];
$users = include('datebase/show-users.php');


?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inventory Management System</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.min.css" integrity="sha512-PvZCtvQ6xGBLWHcXnyHD67NTP+a+bNrToMsIdX/NUqhw+npjLDhlMZ/PhSHZN4s9NdmuumcxKHQqbHlGVqc8ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
    <div class="dashboardMainContainer">
       <?php include('partials/app-sidebar.php') ?>
        </div>
        
        <div class="dashboard_content_container" id="dashboard_content_container">
        <?php include('partials/app-topnav.php') ?>
            <div class="dashboard_content"> 
                
            <div class="dashboard_content_main">
                <div class="row">
                    <div class="column column-5">
                        <h1 class ="section_header2"><i class="fa fa-plus"></i> Create User</h1>
                         <div id="userAddFormContainer">   
                            <form action="datebase/add.php" method="POST" class="appForm">
                            <div class="appFormInputContainer">
                            <label for="first_name">First Name</label>
                            <input type="text" class="appFormInput" id="first_name" name="first_name" />
                            </div>
                            <div class="appFormInputContainer">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="appFormInput" id="last_name" name="last_name" />
                            </div>
                            <div class="appFormInputContainer">
                            <label for="email">Email</label>
                            <input type="text" class="appFormInput" id="email" name="email" />
                            </div>
                            <div class="appFormInputContainer">
                            <label for="password">Password</label>
                            <input type="password" class="appFormInput" id="password" name="password" />
                            </div>

                         <button type="submit" class="appBtn"><i class="fa fa-plus"></i>Add User</button>
                            </form>
                            <?php 
                    
                            if( isset( $_SESSION['response'])) { 
                            $response_message = $_SESSION['response']['message'];
                            $is_success = $_SESSION['response']['success'];
                            ?>
                            <div class="responseMessage">
                            <p class="responseMessage <?= $is_success ? 'responseMessage__success' : 'responseMessage__error' ?>" >
                            <?= $response_message ?>
                            </p>
                            </div>
                             <?php unset($_SESSION['response']); } ?>
                            </div>
                            </div>

                            <div class="column column-7"> 
                            <h1 class ="section_header2"><i class="fa fa-list"></i> List of Users</h1>
                            <div class="section_content">
                                <div class="users">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody> 
                                            <?php foreach($users as $index => $user){ ?>
                                                <td><?php echo $index + 1; ?></td>
                                                 <td class="firstName"><?php echo htmlspecialchars($user['first_name']); ?></td>
                                                 <td class="lastName"><?php echo htmlspecialchars($user['last_name']); ?></td>
                                                 <td class="email"><?php echo htmlspecialchars($user['email']); ?></td>
                                                 <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                                                 <td><?php echo htmlspecialchars($user['updated_at']); ?></td>
                                                 <td>
                                                    <a href="" class="updateUser"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="" class="deleteUser" data-userid="<?= $user['id']?>" data-name="<?= $user['first_name']?>" data-lname="<?= $user['last_name']?>"><i class="fa fa-trash"></i> Delete</a>
                                                 </td>
                                             </tr>
                                             <?php  }?>

                                           
                                        </tbody>
                                    </table>
                                    <p class="userCount"><?= count($users) ?> Users</p>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/script.js"> </script>
<script src="js/jquery/jquery.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/js/bootstrap-dialog.js" integrity="sha512-AZ+KX5NScHcQKWBfRXlCtb+ckjKYLO1i10faHLPXtGacz34rhXU8KM4t77XXG/Oy9961AeLqB/5o0KTJfy2WiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
<script>
    function script(){


        this.initialize = function(){
            this.registerEvents();
            
        },

        this.registerEvents = function(){
            document.addEventListener('click', function(e){
                targetElement = e.target;
                classList = targetElement.classList;




                if(classList.contains('deleteUser')){
                    e.preventDefault();
                    userId = targetElement.dataset.userid;
                    fname = targetElement.dataset.fname;
                    lname = targetElement.dataset.lname;
                    fullName = fname + ' ' + lname;

                    
                    if(window.confirm('Are you sure to delete '+ fullName +'?')){
                        $.ajax({
                            method:'POST',
                            data: {
                                user_id: userId,
                                f_name: fname,
                                l_name: lname
                            },
                            url: 'datebase/delete-user.php',
                            dataType: 'json',
                            success: function(data){
                                if(data.success){
                                    if(window.confirm(data.message)){
                                        location.reload();
                                    }
                                } else  window.alert(data.message);
                                
                            }
                        })
                    } else{
                        console.log('will not delete');
                    }
                }
                if(classList.contains('updateUser')){
                    e.preventDefault(); //prevent loading.


                   
                    //get data.
                  firstName = targetElement.closest('tr').querySelector('td.firstName').innerHTML;
                  lastName = targetElement.closest('tr').querySelector('td.lastName'.innerHTML);
                  email = targetElement.closest('tr').querySelector('td.email').innerHTML;
                  BootstrapDialog.alert('I want banana!');
                //   BootstrapDialog.confirm({
                //   title: 'Update' + firstNme + ' ' + lastName,
                //   message: firstName + ' ' + lastName + ' ' + email
                    
                //   })

                }
            });
        }
    }

    var script = new script;
    script.initialize();


</script>
</body>
</html>