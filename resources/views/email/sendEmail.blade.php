<!-- To verify your account <a href="{{route('sendEmailDone',["email"=> $user->email, "verifyToken"=> $user->verifyToken])}}">click here</a>
 -->

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2> {{$user['fname']}},Thank you for registering on our site</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<a href="{{route('sendEmailDone',["email"=> $user->email, "verifyToken"=> $user->verifyToken])}}">Verify Email</a>
</body>
 
</html>