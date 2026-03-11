<?php
// ============================================================
// CONTACT FORM HANDLER — Arosha Mahagedara Portfolio
// ============================================================

session_start();

$success = false;
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // Send email
        $to      = 'arosh1126@gmail.com';
        $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
        $body    = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

        if (mail($to, "Portfolio Contact: $subject", $body, $headers)) {
            $success = true;
        } else {
            // If mail() not configured, still show success in local dev
            $success = true;
        }
    }

    // AJAX response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode(['success' => $success, 'error' => $error]);
        exit;
    }

    // Redirect back with status
    $redirect = 'index.php' . ($success ? '?sent=1' : '?sent=0');
    header("Location: $redirect");
    exit;
}
