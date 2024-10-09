<script>
    let username = '';
    let password = '';
    
    // Oh, wow, a function to handle login. Revolutionary.
    function handleLogin() {
      if (!username || !password) {
        alert('You need to fill out all the fields. Shocking, right?');
        return;
      }
      // This is where you'd usually handle authentication
      console.log(`Logging in with Username: ${username}, Password: ${password}`);
      // Maybe redirect or whatever you think is important here.
    }
  </script>
  
  <style>
    .login-form {
      display: flex;
      flex-direction: column;
      max-width: 300px;
      margin: auto;
    }
  
    input {
      margin-bottom: 10px;
      padding: 8px;
    }
  
    button {
      padding: 8px;
      background-color: #007BFF;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
  
  <div class="login-form">
    <h2>Login</h2>
    <input type="text" bind:value={username} placeholder="Username" />
    <input type="password" bind:value={password} placeholder="Password" />
    <button on:click={handleLogin}>Login</button>
  </div>