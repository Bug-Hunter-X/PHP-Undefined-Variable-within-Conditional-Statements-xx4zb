The corrected code uses `isset()` to verify the variable `$user` before using it. This prevents the undefined variable error.  A default value is also assigned if the form is not submitted.
```php
<?php
$user = "guest"; // Default value
if (isset($_POST['submit'])) {
  $user = $_POST['username'];
}
if ($user == "admin") {
  echo "Welcome, admin!";
} else {
  echo "Welcome, " . $user . "!";
}
?>
```