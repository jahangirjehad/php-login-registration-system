Yes. I’ll give you a **simple Registration + Login + Home Page system using PHP + MySQL + XAMPP** step by step, beginner-friendly.

You’ll build:

✅ Registration page
✅ Login page
✅ Home page after login
✅ Logout system
✅ MySQL database connection

---

# Step 1: Start XAMPP

Open **XAMPP Control Panel**

Start:

* Apache ✅
* MySQL ✅

---

# Step 2: Create Database

Open browser:

```text
http://localhost/phpmyadmin
```

Create database:

```sql
user_system
```

Now click SQL and run:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)
);
```

---

# Step 3: Create Project Folder

Go to:

```text
C:\xampp\htdocs\
```

Create folder:

```text
login_system
```

Inside create files:

```text
db.php
register.php
login.php
home.php
logout.php
```

---

# Step 4: db.php (Database Connection)

```php
<?php
$conn = mysqli_connect("localhost","root","","user_system");

if(!$conn){
    die("Connection Failed");
}
?>
```

---

# Step 5: register.php

```php
<?php
include 'db.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    mysqli_query($conn,$sql);

    echo "Registration Successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<h2>Registration Page</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>

    <button type="submit" name="register">Register</button>
</form>

<br>
<a href="login.php">Go to Login</a>

</body>
</html>
```

---

# Step 6: login.php

```php
<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['email'] = $email;
        header("Location: home.php");
    }else{
        echo "Invalid Login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<h2>Login Page</h2>

<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

<br>
<a href="register.php">Create Account</a>

</body>
</html>
```

---

# Step 7: home.php

```php
<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>

<h2>Welcome User</h2>

<p>You are logged in.</p>

<a href="logout.php">Logout</a>

</body>
</html>
```

---

# Step 8: logout.php

```php
<?php
session_start();
session_destroy();

header("Location: login.php");
?>
```

---

# Step 9: Run Project

Open browser:

```text
http://localhost/login_system/register.php
```

---

# Full Flow

### Register First

➡ Create account

### Then Login

➡ Enter email/password

### Then Home Page

➡ Logout

---

# Important Note (For Real Project)

This is basic for learning.

For professional project use:

✅ password_hash()
✅ Prepared Statement
✅ Validation
✅ Bootstrap Design
✅ Session Security

---

# If you want, I can give you **Beautiful Bootstrap Design Registration + Login + Dashboard using PHP MySQL** (Professional look for viva/exam/job task).
