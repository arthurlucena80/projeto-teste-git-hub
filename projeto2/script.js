const users = [
  { username: "usuario1", password: "senha1" },
  { username: "usuario2", password: "senha2" },
]

document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault()
    const username = document.getElementById("username").value
    const password = document.getElementById("password").value

    const user = users.find(
      (u) => u.username === username && u.password === password
    )

    if (user) {
      document.getElementById("message").textContent = "Login bem-sucedido!"
      // Você pode redirecionar o usuário para outra página aqui.
    } else {
      document.getElementById("message").textContent =
        "Credenciais inválidas. Tente novamente."
    }
  })
