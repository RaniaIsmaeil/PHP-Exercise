<!DOCTYPE html> 
    <head>
        <title>Tax Calculator</title>
        <link rel="stylesheet" href="stylecalc.css">
    </head>
<body>

    <?php
        if (isset($_POST['ammount']) && isset($_POST['taxRate']) && isset($_POST['date'])) {
            $ammount = (float) $_POST['ammount'];
            $taxRate= (float) $_POST['taxRate'];
            $date=(float) $_POST['date'];
            
        } else {
            $ammount = 0;
            $taxRate= 0;
            $date=0;
            $SocialSecurityFee=0;
        }
        if($ammount<10000){
            $taxAmount = round(($ammount * 0));
            $SocialSecurityFee=0;
        }
        elseif($ammount<25000 && $ammount>10000){
            $taxAmount = round(($ammount * 11) / 100, 2);
            $ssf = round(($monetaryAmmount * 4 ) /100 ,2);
        }
        elseif($ammount<50000 && $ammount>25000){
            $taxAmount = round(($ammount * 30) / 100, 2);
            $SocialSecurityFee = round(($ammount * 4 ) /100 ,2);
        }
        else{$taxAmount = round(($ammount * 45) / 100, 2);
            $SocialSecurityFee = round(($ammount * 4 ) /100 ,2);

        }
        $TotalAmount = round($ammount - $taxAmount-$SocialSecurityFee, 2);
    ?>

    <div class="content">
        <h1>Tax Calculator</h1>
        <form action="" method="POST" id="myForm">
            <label for="monetary">Salary in USD</label>
            <br>
            <input type="number" id="ammount" name="ammount" 
            value="<?=$ammount ?>" required pattern="[0-9]" step="0.01" min="0">
            <br>
            
            <label for="tax">Tax Rate</label>
            <br>
            <input type="number" id="taxRate" name="taxRate" 
            value="<?=$taxRate ?>" required pattern="[0-9]" step="0.01" min="0" max="100"><br><br>
            <label>Tax free</label>
            <input type="checkbox"><br>
            <br><label>Month/Year</label><br>
              <input type="radio" id="year" name="date" value="year" required>
                 <label fo
                 r="male">year</label><br>
                <input type="radio" name="date" value="month" required>
                <label for="month">month</label><br>


            <input type="Submit" value="Calculate" id="button">
        </form>
        <div id="overall">
             <p>Total Salary: </p>

            <p>Tax Ammount: 
                <span id="taxAmmount">
                    <?=$taxAmount ?>
                </span>
            </p>
             <p>Social Security Fee: 
                <span id="ssf">
                    <?=$ssf ?> 
                </span>
            </p>
            <p>Total Ammount: 
                <span id="finalAmmount">
                    <?=$TotalAmount ?> 
                </span>
            </p>
           
        </div>
    </div>
</body>
</html>