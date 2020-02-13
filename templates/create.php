<?php include("include/header.php"); ?>

<form role="form" method="post" action="create.php">
  <div class="form-group">
    <label>topic tilte</label>
    <input type="text" name="title" class="form-control" placeholder="enter post title">
  </div>
  <div class="form-group">
    <label>Catagory</label>
    <select class="form-control" name = "catagory">
      <?php foreach(get_catagories() as $catagory) { ?>

      <option value="<?php echo $catagory->id ?>"><?php echo $catagory->name; ?></option>
    <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label>Topic Body</label>
    <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
    <script type="text/javascript">
      CKEDITOR.replace('body');
    </script>
  </div>
  <button type="submit" name="do_create" class="btn-btn-default">Submit</button>
</form>

<?php include("include/footer.php"); ?>
