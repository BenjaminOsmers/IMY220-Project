<?php
include "header.php";
?>
<div class="page-content p-3">
  <div class="row ps-3">
    <h2 class="mb-3">Create Quiz</h2>
    <form action="">
      <div class="row">
        <div class="row pb-2">
          <label for="quizImage" class="form-label">Quiz Image</label>
          <input type="file" name="quizImage" id="quizImage" class="form-control">
          <!-- <div id="nameError" class="form-text"><?php echo $name_error; ?></div> -->
        </div>
        <div class="row pb-2">
          <label for="quizname" class="form-label">Quiz Name</label>
          <input type="text" name="quizname" id="quizname" class="form-control">
          <!-- <div id="nameError" class="form-text"><?php echo $name_error; ?></div> -->
        </div>
        <div class="row pb-2">
          <label for="category" class="form-label">Category</label>
          <select name="category" id="category" class="form-select">
            <option selected>Select a category</option>
            <option value="cat1">category 1</option>
            <option value="cat2">category 2</option>
          </select>
          <!-- <div id="surnameError" class="form-text"><?php echo $surname_error; ?></div> -->
        </div>
        <div class="row pb-2">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" id="description" rows="2" class="form-control"></textarea>
          <!-- <div id="emailError" class="form-text"><?php echo $email_error; ?></div> -->
        </div>
        <div class="row">
          <button type="submit" class="btn btn-primary mt-3 d-flex justify-content-center"><span>Next</span><i class="fas fa-arrow-circle-right ms-2"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
include "footer.php";
?>