<section id="resultado">
    <div>
        <h3>total a pagar</h3>

        <?php if ($message != "") { ?>
            <p><?php echo $message; ?></p>
        <?php } ?>

        <h3><?php echo "$" . number_format($totalPrice); ?></h3>
    </div>
</section>