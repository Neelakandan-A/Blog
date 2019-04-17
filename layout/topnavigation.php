 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Virtua Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <?php 
                $sql_select_category = "SELECT * FROM categories ORDER BY id desc";
                $result_sql_select_category = mysqli_query($dbconnection, $sql_select_category);
                while ($rowcategory = mysqli_fetch_assoc($result_sql_select_category))
                {
                  $view_category_id = $rowcategory['id'];
                  $view_cat_title = $rowcategory['cat_title'];
             ?>
          <li class="nav-item">
            <a class="nav-link" href="category.php?catid=<?= $view_category_id; ?>"><?php echo $view_cat_title; ?></a>
          </li>
          <?php  
                }
          ?>
        </ul>
      </div>
    </div>
  </nav>