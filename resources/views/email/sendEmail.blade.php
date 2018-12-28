

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2> Hey {{$user['fname']}},</h2>
<br/>
Thanks for registering on our App!
Your registeration email-id is {{$user['email']}} . 
<br/>
<br>
Before we get started, we'll need to verify your email.
<br/>
<button class="btn btn-primary" type="submit"><a href="{{route('sendEmailDone',["email"=> $user->email, "verifyToken"=> $user->verifyToken])}}">Verify Email</a></button>
<!-- <a href="{{route('sendEmailDone',["email"=> $user->email, "verifyToken"=> $user->verifyToken])}}">Verify Email</a> -->
</body>
 
</html>

