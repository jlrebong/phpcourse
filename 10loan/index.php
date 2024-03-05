<?php
include_once './inc/autoloader.inc.php';

if (isset($_POST['submit'])) {
    $loan = new Compute($_POST['amount']);
    $loan->computeInstallment();
    $loanDetails = $loan->getLoanDetails();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="index.php" method="post">
        <label for="amount">Type your desired amount</label>
        <input type="number" name="amount" value="<?=$_POST['amount']?>">
        <input type="submit" name="submit" class='btn' value="COMPUTE">
    </form>

    <?php if(isset($loanDetails)): ?>

    <div class="table-container">
        <h2>Your estimated monthly installments are as follows</h2>

        <div class="loan-table">
            <div class="loan-table-header">
                <div class="row1">
                    <div class="amount-title">Loan Amount</div>
                    <div class="amount-value"><?=number_format($_POST['amount']) ?></div>
                </div>
                
                <div class="term row2">Term</div>
                <div class="installment row2">Monthly Installment</div>
                
            </div>
            <div class="loan-table-body">
                <div class="loan-table-term">
                    <?php foreach($loanDetails as $detail): ?>
                        <div><?= $detail['term'] ?> Months</div>
                    <?php endforeach; ?>
                </div>
                <div class="loan-table-installments">
                    <?php foreach($loanDetails as $detail): ?>
                        <div><?= number_format($detail['value'], 2) ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<script src="apps.js"></script>
    
</body>
</html>