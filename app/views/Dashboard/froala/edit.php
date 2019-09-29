
<div id="editor">
    <form id="froala" action="../froala/xhrFroalaUpdate/" method="POST">
        <textarea id='edit' type="text" name="office" accesskey="Y" style="margin-top: 30px;" accesskey="E" required="true">
     <?php
            $data = $this->edit;

            if (is_array($data)) {
                print_r($data['Content']);
            } else {
                echo $data;
            }
            ?>
        </textarea>
        <input class="ui button" accesskey="S"class="button button-success" type="submit"  value="save">
    </form>

</div>