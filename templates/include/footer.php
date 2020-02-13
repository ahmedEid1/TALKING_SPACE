</div>
</div>
</div>
<div class="col-md-4">
<div id="sidebar">
<div class="block">
  <h3>login form</h3>
  <?php if(isLogedIn()){ ?>
    <div class="userdata">
      Welcome,<?php echo getUser()['username']; ?>
    </div>
    <br>
    <form role="form" action="logout.php" method="post">
      <input type="submit" name="do_logout" value="log out" class="btn-btn-default">

    </form>

  <?php }else{ ?>
  <form enctype="multipart/form-data" role='form' method="post" action="login.php">
    <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter you name">
    </div>
    <div class="form-group">
    <label >Password</label>
    <input name="password" type="password" class="form-control"  placeholder="Enter you Password">
    </div>
    <button type="submit" class="btn-btn-primary" name="do_login">login</button>
    <a href="register.html" class="btn-btn-default">Crate an account</a>
  </form>
<?php } ?>
</div>
<div class="block">
  <h3>Catagories</h3>
  <div class="list-group">
    <a href="topics.php" class="list-group-item"  <?php echo is_active(null); ?>>ALL Topics <span class="badge pull-right"></span></a>
    <?php foreach(get_catagories() as $catagory) { ?>
      <a href="topics.php?catagory=<?php echo $catagory->id; ?>" class="list-group-item"
       <?php echo is_active($catagory->id); ?> ><?php echo $catagory->name; ?></a>
      <?php } ?>
  </div>
</div>


</div>
</div>
</div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
