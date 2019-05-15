<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Login
   </title>
   <link rel="stylesheet" href="../assets/css/bootstrap.css">

   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.js">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.js">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIbrEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
 <body>
      
      <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
 
 <style>
     .a{
          position:relative;
     }
     .b{
          position:absolute;
          top:40%;
          left:50%;
          transform:translate(-50%,-50%);
     }
 </style>
      <div style="height:100vh;" class="a">
      <div class="b" > <br>
      <?php echo form_open('login');?>
      <form action="" class="text-center border border-light p-5">
      <p class="h4 mb-4">Sign in</p>

           <input type="text" name="username"  value="<?php echo set_value('username'); ?>" id="defaultLoginFormName" class="form-control mb-4" placeholder="username"/>
           
           <input type="password" name="password" value="<?php echo set_value('password'); ?>" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="password"/>
       
           <button class="btn btn-info btn-block my-4" type="submit" value="Login">Sign in</button>

      <?php echo form_close();?>
  
      <p>
           Kembali ke beranda, Silahkan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?>
      </p>
      </form>

     

      </div>
      </div>
      
 </body>
 </html>
