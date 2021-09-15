<?php
include "header.php";
?>
<div class="page-content p-5">
  <div class="row">
    <?php
    echo "<h1>" . $_SESSION["name"] . " " . $_SESSION["surname"] . "</h1>";
    ?>
  </div>
</div>
<?php
include "footer.php";
?>