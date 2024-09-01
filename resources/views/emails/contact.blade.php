<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Message</title>
</head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $contact->fname }} {{ $contact->lname }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Message:</strong><br>{{ $contact->message }}</p>
</body>
</html>
