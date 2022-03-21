<?php include_once('layouts/header.php'); ?>
      <form method='POST' action='opinion.php' style='margin-top
      :20%; margin-left:200px;'>
        <div class="form-row align-items-center">
          <div class="col-sm-3 my-1">
            <label class="sr-only" for="inlineFormInputGroupUsername">Phone Number</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">Phone Number</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroupUsername" name='phone' placeholder="01020414569" required >
            </div>
          </div>
          <div class="col-auto">
          <button type="submit" class="btn btn-primary">Survey</button>
        </div>
        </div>
      </form>
<?php include_once('layouts/footer.php'); ?>
