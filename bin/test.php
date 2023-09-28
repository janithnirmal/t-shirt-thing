<?php
$isAdmin = false;
?>

<section class="something">
    <div class="container">
        <div>1</div>
        <div>1</div>
        <div class="btn-container">
            <?php
            if ($isAdmin) {
            ?>
                <section>
                    <div>1</div>
                    <div>1</div>
                    <div>1</div>
                    <div>1</div>
                </section>
            <?php
            } else {
            ?>
                <button>User</button>
            <?php
            }
            ?>
        </div>
    </div>
</section>


<?php
