<?php include '../common/header.php'; ?>
<?php if ($_SERVER['QUERY_STRING'] == "") {?>
          <h2>Figure Review</h2><br />
          <div class="custom-content">
                    
          </div>

<? } ?>
<?php if ($_GET["figure"] == "link") { ?>
          <h2>Figure Review - Figma Link</h2><br />
          <div class="custom-content">
          </div>
<?php } elseif ($_GET["figure"] == "catherine") { ?>
          <h2>Figure Review - Catherine</h2><br />
          <div class="custom-content">

          </div>
<?php }?>
<?php include '../common/footer.php'; ?>