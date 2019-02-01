<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "F.C.R"?></title>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dist/css/uikit.min.css" />
        <script src="dist/js/uikit.min.js"></script>
        <script src="dist/js/uikit-icons.min.js"></script>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  </head>
 
