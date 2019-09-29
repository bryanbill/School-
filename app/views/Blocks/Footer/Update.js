
<script>
 $(function () {

        $('#froala').submit(function () {
            var url = $(this).attr('action');

            var data = $(this).serialize();
            $.post(url, data, function (o) {
                window.alert('Save Successful');
            });
            console.log(data);
            return false;
        })
    });
    function labelButton(button) {
        if (button.accessKeyLabel)
            button.value += ' (' + button.accessKeyLabel + ')';
    }
    var inputs = document.getElementsByTagName('input'+'textarea');
    for (var i = 0; i < inputs.length; i += 1) {
        if (inputs[i].type === "submit"+"text")
            labelButton(inputs[i]);
    }
    </script>


