<?php
// JIM WORKS WEB STUDIO - Hostinger form handler
// Destination email:
$to = "jimy43saberon@gmail.com";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit;
}

function clean($value) {
    return trim(strip_tags((string)$value));
}

$name = clean($_POST["name"] ?? "");
$company = clean($_POST["company"] ?? "");
$email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
$phone = clean($_POST["phone"] ?? "");
$website_type = clean($_POST["website_type"] ?? "");
$cms = clean($_POST["cms"] ?? "");
$budget = clean($_POST["budget"] ?? "");
$launch_date = clean($_POST["launch_date"] ?? "");
$message = trim(strip_tags((string)($_POST["message"] ?? "")));
$authorization = clean($_POST["authorization"] ?? "");

if (!$name || !$company || !$email || !$website_type || !$message || $authorization !== "Yes" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Invalid application. Please go back and complete all required fields.";
    exit;
}

$subject = "NEW WEBSITE APPLICATION - " . $company;

$body = "JIM WORKS WEB STUDIO - WEBSITE APPLICATION\n\n";
$body .= "Full Name: $name\n";
$body .= "Company / Organization: $company\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Website Type: $website_type\n";
$body .= "Preferred CMS: $cms\n";
$body .= "Estimated Budget: $budget\n";
$body .= "Target Launch: $launch_date\n\n";
$body .= "Requirements / Message:\n$message\n\n";
$body .= "Applicant authorization: Yes\n";
$body .= "Submitted from: " . ($_SERVER["REMOTE_ADDR"] ?? "Unknown") . "\n";

$headers = "From: JIM WORKS WEB STUDIO <noreply@" . ($_SERVER["HTTP_HOST"] ?? "yourdomain.com") . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $body, $headers)) {
    header("Location: thank-you.html");
    exit;
}

http_response_code(500);
echo "We could not send the application. Please email jimy43saberon@gmail.com directly.";
?>
