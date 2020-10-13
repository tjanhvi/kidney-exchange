
<style>
  nav{
    width: 100%;
    background-color: rgb(0, 0, 0, 0.2);
    font-family: "Open Sans";
    font-size: 18px;
    line-height: 1em;
  }

  nav ul{
    text-align: center;
    margin: 0%;
  }

  nav ul li{
    list-style: none;
    display: inline-block;
  }

  nav ul li a{
    display: block;
    text-decoration: none;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 2px;
    padding: 22px;
    transition: all ease 0.5s;
  }

  nav ul li a:hover{
    background-color: #a28089;
  }
</style>

<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="pages/reg-form.php">Register (Patient)</a></li>
    <li><a href="pages/register_hospital.php">Register (Hospital)</a></li>
    <li><a href="pages/data.php">Data</a></li>
    <li id="login"><a href="pages/login.php">Login</a></li>
    <li id="login"><a href="pages/signup.php">Sign Up</a></li>
  </ul>
</nav>