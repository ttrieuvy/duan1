<div id="data">
    <?php
    foreach ($data as $d) {
        if (isset($d['ten'])) {

            echo '<p>' . chuhoa($d['ten']) . '-' . get_gia($d['gia']) . '</p>';
        } else {
            if (is_string($d) == true) {
                echo  "<p>" . chuhoa($d)  . '</p>';
            }
        }
    }
    ?>
</div>