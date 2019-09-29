<?php declare(strict_types=1) ?>
<a href="../index">Editor</a>
<div id="inserts">
    <div class="card">
        <div class="card-header">
           
        </div>
        <div class="card-body">
            <?php
            $data = $this->display;

            if (is_array($data)) {
                print_r($data['Content']);
            } else {
                echo $data['Content'];
            }
            ?>
        </div>

    </div>
</div>