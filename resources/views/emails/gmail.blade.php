<!DOCTYPE html>
<html>
<head>
    <title>Contact Inquiry</title>
</head>
<body>
    <h2>New Contact Inquiry Received</h2>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>WhatsApp:</strong> {{ $details['phone'] }}</p>
    <p><strong>Message:</strong> {{ $details['contactMessage'] }}</p>
    <p><strong>What Are You Looking For?:</strong> {{ $details['contactMessage1'] }}</p>
    <p><strong>Which Concept Are You Interested In?:</strong> {{ $details['contactMessage2'] }}</p>
    <p><strong>When Do You Plan To Invest Or Start A Project?:</strong> {{ $details['contactMessage3'] }}</p>
</body>
</html>
