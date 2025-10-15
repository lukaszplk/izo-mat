<?php
// Contact Form Handler
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $service = htmlspecialchars($_POST['service'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    // Basic validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Imię i nazwisko jest wymagane';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Prawidłowy email jest wymagany';
    }
    
    if (empty($phone)) {
        $errors[] = 'Telefon jest wymagany';
    }
    
    if (empty($message)) {
        $errors[] = 'Wiadomość jest wymagana';
    }
    
    if (empty($errors)) {
        // Prepare email content
        $subject = "Nowa wiadomość z formularza kontaktowego - IZO-MAT";
        $email_content = "
Nowa wiadomość z formularza kontaktowego:

Imię i nazwisko: $name
Email: $email
Telefon: $phone
Usługa: $service
Wiadomość: $message

---
Wiadomość wysłana z formularza kontaktowego na stronie IZO-MAT
        ";
        
        // Email headers
        $headers = [
            'From: ' . $company_email,
            'Reply-To: ' . $email,
            'Content-Type: text/plain; charset=UTF-8',
            'X-Mailer: PHP/' . phpversion()
        ];
        
        // Send email
        $mail_sent = mail($company_email, $subject, $email_content, implode("\r\n", $headers));
        
        if ($mail_sent) {
            $success_message = "Wiadomość została wysłana pomyślnie. Skontaktujemy się z Państwem w ciągu 24 godzin.";
        } else {
            $error_message = "Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie lub skontaktuj się telefonicznie.";
        }
    } else {
        $error_message = implode('<br>', $errors);
    }
}

// Redirect back to contact page with message
$redirect_url = url_for('kontakt');
if (isset($success_message)) {
    $redirect_url .= '?success=' . urlencode($success_message);
} elseif (isset($error_message)) {
    $redirect_url .= '?error=' . urlencode($error_message);
}

header('Location: ' . $redirect_url);
exit;
?>
