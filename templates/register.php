<?php include("include/header.php"); ?>

      <form  action="register.php" method="post">
        <div class="form-group">
          <label >Name</label>
          <input type="text" class="form-control" name="name" placeholder="enter name">
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Password">
        </div>
        <div class="form-group">
          <label>choose username</label>
          <input type="text" name="username" class="form-control" placeholder="Create A username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter a password">
        </div>
        <div class="form-group">
          <label>confirm password</label>
          <input type="password" name="confirm_password" class="form-control" placeholder="Enter a password">

        </div>
        <div class="form-group">
          <label>Avater</label>
          <input class="form-control" name="avater" type="file" >
          <p class="help-block">no file chosen</p>
        </div>
        <div class="form-group">
            <label>about me</label>
            <textarea name="about" class="form-control" rows="8" cols="80">tell us about yourself</textarea>
          </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

<?php include("include/footer.php"); ?>
