<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    $to = "frizz2301@gmail.com"; 
    $subject = "Pesan Baru dari Website Portofolio";
    $body = "Nama: $name\nEmail: $email\nTelepon: $phone\n\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Gagal mengirim pesan. Coba lagi nanti.";
    }
} else {
    echo "Tidak menerima data.";
}
?>
