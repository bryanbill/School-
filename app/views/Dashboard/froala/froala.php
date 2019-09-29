<?php
$data_values = $this->getData;

?>


<div id="editor">
    <form id="froala" action="../froala/xhrFroalaRun/" method="POST">
        <textarea id='edit' type="text" name="office" accesskey="Y" style="margin-top: 30px;" accesskey="E" required="true">
     
        </textarea>
        <input type="text" name="title"accesskey="T" class="form-control input-rounded"  placeholder="Title" required="true">
        <input class="ui button" accesskey="S"class="button button-success" type="submit"  value="save">
    </form>

</div>
<div id="inserts">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <th>UserId</th>
                <th>Title</th>
                <th>Action</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($data_values as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['userid'] . '</td>';
                        echo '<td>' . $value['title'] . '</a></td>';
                        echo '<td><a href="edit/'.$value['title'].'">Edit</a>&nbsp<a href="../froala/delete/'.$value['title'].'">Del</a></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>                    
            </table>
        </div>
    </div>
</div>

</div>

<script type="text/javascript">
    $(function () {

        $('#froala').submit(function () {
            var url = $(this).attr('action');

            var data = $(this).serialize();
            $.post(url, data, function (o) {
            });
            console.log(data);
            return false;
        });
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

