<?php include("include/header.php"); ?>
<ul id="topics">
  <li id="main-topic" class="topic topic">
    <div class="row">
      <div class="col-md-2">
        <img src="images/noimage.jpg" class="avatar pull-left">
        <ul>
          <li><strong>Brand1</strong></li>
          <li>43 posts</li>
          <li><a href="profil.php">Profile</a></li>
        </ul>

      </div>
      <div class="col-md-10">
        <div class="topic-content pull-right">
            <p>fkl/nkkkkkkkkjngofjrjgpjro
            pbmlvmv;m.,mb,.vm,.mv.,m;ja;lg;ldlkk</p>
        </div>

      </div>

    </div>

  </li>
  <li class="topic topic">
    <div class="row">
      <div class="col-md-2">
          <div class="user-info">
              <img class="avater pull-left" src="images/noimage.jpg">
              <ul>
                <li><strong>ngt</strong></li>
                <li><strong>ngt</strong></li>
                <li><strong>ngt</strong></li>
                <li><strong>ngt</strong></li>
              </ul>
          </div>
      </div>
      <div class="col-md-10">
        <div class="topic-content pull-right">
            <p>fkl/nkkkkkkkkjngofjrjgpjro
            pbmlvmv;m.,mb,.vm,.mv.,m;ja;lg;ldlkk</p>
        </div>

      </div>

    </div>

  </li>
</ul>
<h3>Replay to topic</h3>
<form role="form">
    <div class="form-group">
        <textarea name="replay" id="replay" rows="10" class="form-control"cols="80"></textarea>
        <script type="text/javascript">
          CKEDITOR.replace('replay');
        </script>
    </div>
    <button type="submit" class="btn-btn-default" name="button">submit</button>
</form>
<?php include("include/footer.php"); ?>
