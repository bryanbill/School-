<? echo DOCTYPE;?>

<html>
    <head>
        <!-- Standard Meta -->
        <? echo CHARSETS;?>
        <title>
            <? echo NAME;?>
        </title>
        
        <?php echo '<link href="' . ASSETS_CSS . 'all.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'bootstrap.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'bootstrap.min.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'now-ui-dashboard.css?v=1.3.0" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'demo.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'helper.css" rel="stylesheet" type="text/css">'; ?>
    
        <?php echo '<link href="' . ASSETS_CSS . 'buttons.bootstrap.min.css" rel="stylesheet" type="text/css">'; ?>
       
      
        <?php echo '<script src="' . ASSETS_JS . 'jquery.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'jquery.min.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'jquery.datatables.min.js"  type="text/javascript"></script>'; ?>
        
        <?php echo '<script src="' . ASSETS_JS . 'popper.min.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'bootstrap.min.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'perfect-scrollbar.jquery.min.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'chartjs.min.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'bootstrap-notify.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'demo.js"  type="text/javascript"></script>'; ?>
      
        <script type="text/javascript">
            $(document).ready(function () {
                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();

            });
        </script>
    <body>