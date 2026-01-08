<?php
session_start();
header('Content-Type: application/json');
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: same-origin');
header('Cache-Control: no-store, no-cache, must-revalidate');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

if (!empty($_POST['company'])) {
    exit; // bot detected
}

file_put_contents($file, time());

if (!isset($_POST['csrf']) || !isset($_SESSION['csrf']) || $_POST['csrf'] !== $_SESSION['csrf']) {
    echo json_encode(['success' => false, 'message' => 'Invalid session token.']);
    exit;
}

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (!str_contains($origin, 'solvraze.com')) {
    echo json_encode(['success' => false, 'message' => 'Unauthorized request.']);
    exit;
}


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

require __DIR__ . '/vendor/autoload.php';

$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));
$captcha = trim($_POST['g-recaptcha-response'] ?? '');

if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

if (strlen($message) > 2000) {
    echo json_encode(['success' => false, 'message' => 'Message too long.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

if (!$captcha) {
    echo json_encode(['success' => false, 'message' => 'Please verify reCAPTCHA.']);
    exit;
}

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Verify reCAPTCHA
$verify = file_get_contents(
    $_ENV['GOOGLE_CAPTCHA_VERIFY_URL'] . http_build_query([
        'secret' => $_ENV['GOOGLE_CAPTCHA_SECRET'],
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ])
);

$captchaResult = json_decode($verify, true);
if (!$captchaResult['success']) {
    echo json_encode(['success' => false, 'message' => 'reCAPTCHA failed.']);
    exit;
}

$ip = $_SERVER['REMOTE_ADDR'];
$file = sys_get_temp_dir() . "/rate_$ip";

if (file_exists($file) && time() - filemtime($file) < 30) {
    echo json_encode(['success' => false, 'message' => 'Please wait before sending again.']);
    exit;
}

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = $_ENV['EMAIL_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['EMAIL_USER'];
    $mail->Password   = $_ENV['EMAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom($_ENV['FROM_EMAIL_ADDRESS'], $_ENV['FROM_NAME']);
    $mail->addAddress($_ENV['FROM_EMAIL_ADDRESS']);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message';
    $mail->Body = "
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Message:</strong></p>
        <p>{$message}</p>
    ";

    $mail->send();

    echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Failed to send email.']);
}
