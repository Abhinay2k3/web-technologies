<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
</head>
<body>
    <h1>Payment Form</h1>
    <form action="process.php" method="POST">
        <label for="card_number">Card Number:</label>
        <input type="text" name="card_number" id="card_number" required><br><br>

        <label for="expiry_date">Expiry Date:</label>
        <input type="text" name="expiry_date" id="expiry_date" required><br><br>

        <label for="cvv">CVV:</label>
        <input type="text" name="cvv" id="cvv" required><br><br>

        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" required><br><br>

        <input type="submit" value="Pay Now">
    </form>
</body>
</html>

Process.php:
<!DOCTYPE html>
<html>
<head>
    <title>Payment Processing</title>
</head>
<body>
    <h1>Payment Processing</h1>
    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Simulate payment processing (not secure, for educational purposes)
        $card_number = $_POST['card_number'];
        $expiry_date = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];
        $amount = $_POST['amount'];

        // Simulate a successful payment
        if (validatePayment($card_number, $expiry_date, $cvv, $amount)) {
            // Set a session variable to store payment details
            $_SESSION['payment_details'] = [
                'Card Number' => $card_number,
                'Expiry Date' => $expiry_date,
                'Amount' => $amount,
            ];

            // The payment is successful
            echo "<h2>Payment Successful</h2>";
            echo "Card Number: $card_number<br>";
            echo "Expiry Date: $expiry_date<br>";
            echo "Amount: $amount<br>";
        } else {
            echo "Payment failed. Please check your payment information.";
        }
    } else {
        echo "No data submitted.";
    }

    // Function to validate payment (simplified for educational purposes)
    function validatePayment($card_number, $expiry_date, $cvv, $amount) {
        // Simulate a valid payment
        return true;
    }
    ?>
</body>
</html>
