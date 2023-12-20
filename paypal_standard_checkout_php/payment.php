<?php

require_once 'config_paypal.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>B&M - Payment</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID; ?>"></script>
        <link rel="stylesheet" href="payment_style.css">
    </head>
    <body>
        <div class="container">
            <div class="panel">
                <div class="overlay hidden"><div class="overlay-content"></div></div>
                <div class="panel-heading">
                    <h3 class="panel-title">Charge <?php echo 'Rp '.$itemPrice; ?> with PayPal</h3>
                    <!-- Product Info -->
                    <p><b>Item Name: </b><?php echo $itemName; ?></p>
                    <p><b>Price: </b><?php echo 'Rp '.$itemPrice; ?></p>
                </div>
                <div class="panel-body">
                    <!-- Display status message -->
                    <div id="paymentResponse" class="hidden"></div>

                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>
                    <center><a class="btn" href="javascript:self.history.back()">Back</a></center>
                </div>
            </div>
        </div>

        <script>
            paypal.Buttons({
                createOrder: (data, actions) => {
                    return actions.order.create({
                        "purchase_units": [{
                            "custom_id": "<?php echo $itemNumber; ?>",
                            "description": "<?php echo $itemName; ?>",
                            "amount": {
                                "value": <?php echo $itemPrice; ?>,
                                "breakdown": {
                                    "item_total": {
                                        "value": <?php echo $itemPrice; ?>
                                    }
                                }
                            },
                            "items": [
                                {
                                    "name": "<?php echo $itemName; ?>",
                                    "description": "<?php echo $itemName; ?>",
                                    "unit_amount": {
                                        "value": <?php echo $itemPrice; ?>
                                    },
                                    "quantity": "1",
                                    "category": "DIGITAL_GOODS"
                                },
                            ]
                        }] 
                    });
                },

                // Finalize the transaction after payer approval
                onApprove: (data, actions) => {
                    return actions.order.capture().then(function(orderData) {
                        setProcessing(true);

                        var postData = {paypal_order_check: 1, order_id: orderData.id};
                        fetch('paypal_checkout_validate.php', {
                            method: 'POST',
                            headers: {'Accept': 'application/json'},
                            body: encodeFormData(postData)
                        })
                        .then((response) => response.json())
                        .then((result) => {
                            if(result.status == 1) {
                                window.location.href = "payment-status.php?checkout_ref_id="+result.ref_id;
                            } else {
                                const messageContainer = document.querySelector("#paymentResponse");
                                messageContainer.classList.remove("hidden");
                                messageContainer.textContent = result.msg;

                                setTimeout(function () {
                                    messageContainer.classList.add("hidden");
                                    messageText.textContent = "";
                                }, 50000);
                            }

                            setProcessing(false);
                        })
                        .catch(error => console.log(error));
                    });
                }
            }).render('#paypal-button-container');

            const encodeFormData = (data) => {
                var form_data = new FormData();

                for (var key in data) {
                    form_data.append(key, data[key]);
                }
                return form_data;
            }

            // Show a loader on payment form processing
            const setProcessing = (isProcessing) => {
                if (isProcessing) {
                    document.querySelector(".overlay").classList.remove("hidden");
                } else {
                    document.querySelector(".overlay").classList.add("hidden");
                }
            }
        </script>
    </body>
</html>