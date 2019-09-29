<? echo DOCTYPE;?>
<html>
    <head>
        <title>
            <? echo NAME;?>
        </title>
        <?php echo '<link href="' . ASSETS_CSS . 'bootstrap.css" rel="stylesheet" type="text/css">'; ?>
    </head>
    <body style="align-content: center; align-items: center;">
        <div class="container" contenteditable="TRUE">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class='jumbotron' style='align-content: center;'>
                        <div class="card">
                            <div class="card-header">
                                THIS IS AN ERROR
                            </div>
                            <div class="card-body">
                                <p>
                                    <code style="text-transform: uppercase; color: purple">
                                        CODe:: PAGE DOESN'T EXIST!
                                    </code>
                                </p>
                            </div>
                            <div class="card-footer" style="font-color: blue; font-family: helvetica;">
                                <p>
                                    <? echo CURRENT; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>


    </body>
</html>
