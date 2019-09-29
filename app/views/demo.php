<html>
    <head>
        <title>PROTOTYPE</title>
        <?php echo '<link href="' . ASSETS_CSS . 'logo.css" rel="stylesheet" type="text/css">'; ?>
<?php echo '<link href="' . ASSETS_CSS . 'bootstrap.css" rel="stylesheet" type="text/css">'; ?>
<?php echo '<link href="' . ASSETS_CSS . 'bootstrap.min.css" rel="stylesheet" type="text/css">'; ?>
<?php echo '<link href="' . ASSETS_CSS . 'mdb.lite.min.css" rel="stylesheet" type="text/css">'; ?>
    </head>
    <body>
    <div class="container">
        <div class="panel-info">
        <div class="card">
            <form class="form-group form-horizontal" action="index/xhrInsert" method="POST">
                <input class="input-group-rounded" type="text" name="text"/>
                <br>
                <button class="button-success" type="submit" label="SUBMIT">Submit</button>
                
            </form>
        </div>
        </div>
    </div>
    </body>
    <?php echo '<script src="' . ASSETS_JS . 'jquery.js"  type="text/javascript"></script>'; ?>
    <?php echo '<script src="' . ASSETS_JS . 'jquery-1.11.1.min.js"  type="text/javascript"></script>'; ?>
    <script>
        
    </script>
</html>