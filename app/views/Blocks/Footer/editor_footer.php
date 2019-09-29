<?php echo '<script src="' . ASSETS_JS . 'jquery.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'jquery.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'dist/components/dropdown.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'dist/components/dropdown.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'froala_editor.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'align_min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'char_counter.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'code_beautifier.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'code_view.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'colors.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'draggable.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'emoticons.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'entities.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'file.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'font_size.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'font_family.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'fullscreen.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'image.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'image_manager.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'line_breaker.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'inline_style.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'link.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'lists.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'paragraph_format.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'paragraph_style.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'quick_insert.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'quote.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'table.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'save.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'url.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'video.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'help.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'print.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'spell_checker.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'special_characters.min.js"  type="text/javascript"></script>'; ?>
<?php echo '<script src="' . ASSETS_JS . 'word_paste.min.js"  type="text/javascript"></script>'; ?>
<script>
    
    (function () {
      new FroalaEditor("#edit")
    })()
      new FroalaEditor('.selector', {
    // Set the image upload URL.
    imageManagerLoadURL: 'upload.php',

    // Set the image delete URL.
    imageManagerDeleteURL: 'delete.php'
  });
   (function () {
      const editorInstance = new FroalaEditor('#edit', {
        events: {
          'image.beforeUpload': function (files) {
            const editor = this
            if (files.length) {
              var reader = new FileReader()
              reader.onload = function (e) {
                var result = e.target.result
                editor.image.insert(result, null, null, editor.image.get())
              }
              reader.readAsDataURL(files[0])
            }
            return false
          }
        }
      })
    })();  
	(function () {
      var editor
      document.getElementById('init').addEventListener('click', function (e) {
        console.log("Initializing Froala Editor...")
        document.getElementById('edit').classList.remove('fr-view')
        editor = new FroalaEditor("#edit")
      })
      document.getElementById('destroy').addEventListener('click', function (e) {
        console.log("Destroying Froala Editor...")
        editor.destroy()
        document.getElementById('edit').classList.add('fr-view')
      })
    })()
	
  </script>