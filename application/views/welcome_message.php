<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('include/header.php');
?>
               
<body style="background-image: url('https://i.pinimg.com/564x/6b/af/ab/6bafab888157eba23b9243313caaba58.jpg')">
    <!-- Login Box  -->
    <div class="container w-100 mt-5 mx-auto">
        <div class="mt-5">
                
            <div class="col-md-12 d-flex justify-content-center align-items-center">
         
                <div class="login-box">
              
                    <form style="background-color: #fff;" action="<?php echo base_url()?>Welcome/login" method="post">
                  
                    <?php  
                    if(!empty($this->session->flashdata('error'))){
                     echo $this->session->flashdata('error');
                    //  unset($_SESSION['error']);
                    }
                  
                    ?>
                        <img src="<?php echo base_url();?>assets/images/logo/GoldenMachine.png" alt="">
                        <h3>Welcome, <span>Admin!</span>
                        </h3>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="mobile_number" placeholder="Enter Mobile Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password ">
                        </div>

                        <button type="submit" class="btn btn-lg large btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>