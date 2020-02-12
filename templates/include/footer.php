</div>
</div>
</div>
<div class="col-md-4">
<div id="sidebar">
<div class="block">
  <h3>login form</h3>
  <form role='form'>
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
