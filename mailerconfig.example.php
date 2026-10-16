<?php
/**
 * PHPMailer SMTP Configuration Template
 * 
 * Rename this file to `mailerconfig.php` and fill in your SMTP credentials,
 * or configure them using environment variables (.env).
 */

$smtpHost     = 'smtp.gmail.com';             // SMTP Server Host
$smtpUsername = 'your_email@gmail.com';       // SMTP Username / Email
$smtpPassword = 'your_app_password_here';     // SMTP Password or Google App Password
$smtpPort     = 587;                          // 587 (TLS) or 465 (SSL)
$smtpSecure   = 'tls';                        // 'tls' or 'ssl'

// SSL Options (helpful for local environments like XAMPP/WAMP)
$smtpOptions = [
    'ssl' => [
        'verify_peer'       => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true,
    ],
];
