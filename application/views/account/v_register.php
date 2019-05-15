<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     blabla
   </title>
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.js">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.js">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIbrEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </head>
 <body>
   
 <style>
     .a{
          position:relative;
     }
     .b{
          position:absolute;
          top:47%;
          left:50%;
          transform:translate(-50%,-50%);
     }
 </style>

   <div style="height:100vh;" class="a"> 
   <div class="b">

      <form action="" class="text-center border border-light p-5">
     <?php echo form_open('register');?>
     <p class="h4 mb-4">Sign up</p>
     
        <input class="form-control mb-4"  type="text" placeholder="Nama" name="name" value="<?php echo set_value('name'); ?>" required/>
        <input class="form-control mb-4"  type="text" name="username" placeholder="Username" id="defaultLoginFomUserName" value="<?php echo set_value('username'); ?>" required/> 
        <input class="form-control mb-4"  type="text" name="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>" required/>
        <input class="form-control mb-4"  type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" required/>
     
        <button class="btn btn-success btn-block my-4" type="submit" value="Daftar">Sign up</button>

  
        <p>
     Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?>
     </p>
 
     <?php echo form_close();?>
     </form>
 </div>
 </div>
 </body>
 </html>
