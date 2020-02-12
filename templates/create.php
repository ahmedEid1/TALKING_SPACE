<?php include("include/header.php"); ?>
<form role="form">
  <div class="form-group">
    <label>topic tilte</label>
    <input type="text" name="title" class="form-control" placeholder="enter post title">
  </div>
  <div class="form-group">
    <label>Catagory</label>
    <select class="form-control">
      <option>Design</option>
      <option>Dfghign</option>
      <option>Dggsign</option>
      <option>Dfsign</option>
      <option>fdsign</option>
    </select>
  </div>
  <div class="form-group">
    <label>Topic Body</label>
    <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
    <script type="text/javascript">
      CKEDITOR.replace('body');
    </script>
  </div>
  <button type="submit" class="btn-btn-default">Submit</button>
</form>

<?php include("include/footer.php"); ?>
