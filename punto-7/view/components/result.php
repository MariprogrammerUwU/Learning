
<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <h2>Resultados:</h2>
        <p>Suma: <?php echo $sumResult; ?></p>
        <p>Resta: <?php echo $subtractionResult; ?></p>
        <p>Multiplicación: <?php echo $multiplyResult; ?></p>
    <?php endif; ?>