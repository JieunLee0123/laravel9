<h1>User Signin</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="email" placeholder="enter user email" /><br><br>
    <input type="password" name="password" placeholder="enter user PASSWORD" /><br><br>

    <button type="submit">Signin</button>
</form>
