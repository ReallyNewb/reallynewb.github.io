const params = new URLSearchParams();
const user = params.get("username");
const pwd = params.get("pwd");
const email = params.get("email");
const valid = params.get("validation")

async function testrequest(){
  const req = await fetch("https://reallynewb.github.io/server.php", {
     method: "GET",
     body: `user=${user}&pwd=${pwd}&email=${email}&validation=${valid}`;
  })

  return req
}

return testrequest();
