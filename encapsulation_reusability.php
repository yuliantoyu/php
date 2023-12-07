<?php
function validateEmail($email) {
    // Validation logic
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function sendWelcomeEmail($email) {
    if (validateEmail($email)) {
        // Send welcome email logic
        echo "Welcome email sent to $email";
    } else {
        echo "Invalid email address";
    }
}

sendWelcomeEmail("john@example.com");
?>
```
