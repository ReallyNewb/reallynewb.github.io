if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if ($_SERVER["validation"] == "validate me pls") {
    $user = htmlspecialchars($_GET["username"])
    $pwd = htmlspecialchars($_GET["pwd"])
    $mail = htmlspecialchars($_GET["email"])

    return "1:$user:2:$pwd:3:$mail"
  } else {
    return '-1'
  }
}
