<?php
/**
 * PHPMailer SMTP Configuration
 * 
 * Configure your SMTP credentials below or set them via environment variables:
 * SMTP_HOST, SMTP_USERNAME, SMTP_PASSWORD, SMTP_PORT, SMTP_SECURE
 */

$smtpHost     = getenv('SMTP_HOST') ?: '';        // e.g. 'smtp.gmail.com' or 'sandbox.smtp.mailtrap.io'
$smtpUsername = getenv('SMTP_USERNAME') ?: '';    // e.g. 'your_email@gmail.com'
$smtpPassword = getenv('SMTP_PASSWORD') ?: '';    // SMTP App Password (do not commit real passwords)
$smtpPort     = (int)(getenv('SMTP_PORT') ?: 587);// 587 (TLS) or 465 (SSL)
$smtpSecure   = getenv('SMTP_SECURE') ?: 'tls';   // 'tls' or 'ssl'

// SSL verification options (helpful for local environments / self-signed certs)
$smtpOptions = [
    'ssl' => [
        'verify_peer'       => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true,
    ],
];
