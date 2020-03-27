<!DOCTYPE html>
<html lang="en-US">
  <!-- figma design: https://www.figma.com/file/jkkuHgZswnclyeA3bsU88T/Real-Estate-Final?node-id=1%3A2 -->
  <head>
    <title>Add New Property</title>
    <?php include 'includes/header-includes.php'; ?>
  </head>
  <body class="dashbaord-body">
    <!-- left menu -->
    <?php include 'includes/left-menu.php'; ?>

    <div class="dashboard-content">
      <ul class="breadcrumb-realestate">
        <li><a href="/">Home</a></li>
        <li class="active">Search Results</li>
      </ul>

      <h1>Add New Property</h1>

      <form>
        <div class="upload-file">
          <input type="file" />
        </div>
        <div class="sliders-counter">
          <span>Upload More Photos <number id="gallery_images">(12)</number></span>
        </div>
      </form>
    </div>

    <!-- footer -->
    <?php include 'footer-simple.php'; ?>
  </body>
</html>