<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="<?= base_url()?>assets2/style.css" rel="stylesheet">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?= base_url()?>assets2/smp.png"  id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <div class="card-header">
      <?= $this->session->flashdata('pesan')?>
    </div>
    <form action="<?= base_url()?>login/cek_login" method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>


  </div>
</div>