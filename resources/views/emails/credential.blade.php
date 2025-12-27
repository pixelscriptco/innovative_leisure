<!DOCTYPE html>
<html>
<head>
    <title>Login Credentials for Innovative Leisure</title>
</head>
<body>
    <p>Dear {{ $details['name'] }},</p>
    <div style="text-align: center;">
        <h1>Welcome to Innovative Leisure!</h1>
    </div>
    <p>Please find below your login credentials to access the system:</p>
    <p><b>Portal URL: <a href="{{url('/')}}/login"></a>{{ url('/') }}/login</b></p>
    <p><b>Username: {{ $details['email'] }}</b></p>
    <p><strong>Password:</strong> {{ $password }}</p>
    <p>&nbsp;</p>
    <p>If you face any issues while accessing the portal, feel free to contact support.</p>
    <p>Best regards,<br>
    Innovative Leisure Team</p>
</body>
</html>
