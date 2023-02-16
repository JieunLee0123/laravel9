<h1>User Signin</h1>

<?php 
  $isErrors = $errors->all(); 
  if(!empty($isErrors)): 
?>

<div style="color:orange;">
  <h3>ERRORS</h3>
  <ul>
    @foreach ( $errors->all() as $error )
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>

<?php endif; ?>

<form action="users" method="POST">
  @csrf
  <input type="text" name="email" placeholder="enter user email" />
  <p style="color:red;">@error('email'){{ $message }}@enderror</p><br>

  <input type="password" name="password" placeholder="enter user password" />
  <p style="color:red;">@error('password'){{ $message }}@enderror</p><br>

  <button type="submit">Signin</button>
</form>
