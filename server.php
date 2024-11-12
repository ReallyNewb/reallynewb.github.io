if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_SERVER["validation"] == "validate me pls") {
    echo '1:$_POST["username"]:2:$_POST["pwd"]:3:$_POST["email"]'
  }
}
