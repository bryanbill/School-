
<? echo DOCTYPE;?>

<html>
    <head>
        <!-- Standard Meta -->
 <? echo CHARSETS;?>
        <title>
            <? echo NAME;?>
        </title>
        <?php echo '<link href="' . ASSETS_CSS . 'bootstrap.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'bootstrap.min.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'styles.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'ionicons.min.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'flaticon.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'icomoon.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'all.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'font-awesome.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'font-awesome.min.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'froala_editor.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'froala_style.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'code_view.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'draggable.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'image_manager.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'colors.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'emoticons.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'image.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'line_breaker.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'table.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'char_counter.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'video.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'fullscreen.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'file.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'quick_insert.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'help.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'spell_checker.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'special_characters.css" rel="stylesheet" type="text/css">'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

        <?php echo '<link href="' . ASSETS_CSS . 'dist/bootstrap.min.css" rel="stylesheet" type="text/css">'; ?>

        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/reset.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/site.css" rel="stylesheet" type="text/css">'; ?>

        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/container.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/grid.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/header.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/image.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/menu.css" rel="stylesheet" type="text/css">'; ?>

        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/divider.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/dropdown.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/segment.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/button.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/list.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/icon.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/sidebar.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/transition.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/custom.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/login.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/reset.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/site.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/divider.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/segment.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/form.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/input.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/button.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/list.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/message.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/card.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/label.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/image.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/reveal.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/dimmer.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/rating.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/components/popup.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/easy-responsive-tabs.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'src/definitions/modules/accordion.less" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<link href="' . ASSETS_CSS . 'dist/semantic.css" rel="stylesheet" type="text/css">'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'jquery.min.js"  type="text/javascript"></script>'; ?>
        <?php echo '<script src="' . ASSETS_JS . 'jquery.js"  type="text/javascript"></script>'; ?>
        <style>
            body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 48px; /* Height of navbar */
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}

/*
 * Utilities
 */

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

            .hidden.menu {
                display: none;
            }

            .masthead.segment {
                min-height: 700px;
                padding: 1em 0em;
            }
            .masthead .logo.item img {
                margin-right: 1em;
            }
            .masthead .ui.menu .ui.button {
                margin-left: 0.5em;
            }
            .masthead h1.ui.header {
                margin-top: 3em;
                margin-bottom: 0em;
                font-size: 4em;
                font-weight: normal;
            }
            .masthead h2 {
                font-size: 1.7em;
                font-weight: normal;
            }

            .ui.vertical.stripe {
                padding: 8em 0em;
            }
            .ui.vertical.stripe h3 {
                font-size: 2em;
            }
            .ui.vertical.stripe .button + h3,
            .ui.vertical.stripe p + h3 {
                margin-top: 3em;
            }
            .ui.vertical.stripe .floated.image {
                clear: both;
            }
            .ui.vertical.stripe p {
                font-size: 1.33em;
            }
            .ui.vertical.stripe .horizontal.divider {
                margin: 3em 0em;
            }

            .quote.stripe.segment {
                padding: 0em;
            }
            .quote.stripe.segment .grid .column {
                padding-top: 5em;
                padding-bottom: 5em;
            }

            .footer.segment {
                padding: 5em 0em;
            }

            .secondary.pointing.menu .toc.item {
                display: none;
            }

            @media only screen and (max-width: 700px) {
                .ui.fixed.menu {
                    display: none !important;
                }
                .secondary.pointing.menu .item,
                .secondary.pointing.menu .menu {
                    display: none;
                }
                .secondary.pointing.menu .toc.item {
                    display: block;
                }
                .masthead.segment {
                    min-height: 350px;
                }
                .masthead h1.ui.header {
                    font-size: 2em;
                    margin-top: 1.5em;
                }
                .masthead h2 {
                    margin-top: 0.5em;
                    font-size: 1.5em;
                }
            }


    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
    #container {
           width: 940px;
           margin: 0 auto;
       }
       @media only screen and (max-width: 768px) {
           #container {
               width: 90%;
               margin: 0 auto;
           }
       }
  </style>


    </head>
    <body>
