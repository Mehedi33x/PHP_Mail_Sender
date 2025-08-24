# PHPMailer Email Sending Script

This PHP script allows you to send emails to a list of recipients using PHPMailer with SMTP configuration (Gmail SMTP). It reads recipient data from a JSON object, sends a personalized email, and handles success or failure for each email.

## Requirements

- PHP 7.3 or higher
- Composer
- PHPMailer Library

## Installation

1. **Install Composer:**
   If you haven't installed Composer, follow the instructions here: https://getcomposer.org/download/

2. **Install PHPMailer via Composer:**
   Run the following command to install the PHPMailer library:

   ```bash
   composer require phpmailer/phpmailer

## Setup the Email Configuration
To configure the email settings, update the following dictionary in the script:

```bash
$mail->Username = 'your_email@gmail.com'; // Your Gmail address
$mail->Password = 'xxxx xxxx xxxx xxxx';  // Gmail App Password
```

## Customize the Email Body and Subject
```bash
$mail->Subject = "Subject Here";
$mail->Body    = "Write your email body here";
$mail->addAttachment('attachment.pdf'); //if you want to attach a file
```

## Customize Recipients
The script is designed to read a list of recipients from a JSON object. Here's an example JSON structure:
```bash
$jsonData = "[
  {"full_name": "Recipient Name", "email": "example@gmail.com"},
  {"full_name": "Another Name", "email": "another@example.com"}
]";
```

## Sending Emails
Once you've configured the script with your Gmail account details and recipient information, run the script:
```bash
php send_email.php
```

## Output
The script will loop through each recipient in the JSON object and send them a personalized email.
After sending each email, the script will print a success message, or if an error occurs, it will display the error message for that specific recipient.
```bash
✅ Email sent to Recipient Name (example@gmail.com)
✅ Email sent to Another Name (another@example.com)
```



