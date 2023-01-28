<!DOCTYPE html>

<html>

<head>

    <title>SIGN IN</title>

    <link rel="stylesheet" type="text/css" href="">

</head>
<style>
body {
 background: rgba(0,0,0,0.8)url(https://images.pexels.com/photos/12165315/pexels-photo-12165315.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center center fixed;
  background-size: cover;
  
  height: 100%;
}
@media only screen and (max-width:900px) {
    body {
        background-size: contain;
    }
}


*{

    font-family: sans-serif;

    box-sizing: padding-box;

}
select {
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px #ccc;
  margin-bottom: 20px;
  background-color: #fff;
  appearance: none;
}
select option {
  color: #666;
  font-size: 16px;
  padding:10px;
}
select hover, select:focus {
  box-shadow: 0px 0px 10px #666;
  background-color: #f9f9f9;
  outline: none;
}
form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 800px;
    height: 1000px;
    opacity: 50px;
    padding: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;

}

h2 {

    text-align: center;
    color: white;
    margin-bottom: 40px;
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 50px;
    opacity: 70%;
}
input:hover {
  opacity: 100%;
}
label {
    color: #888;
    font-size: 18px;
    padding: 10px;
}

button {
    background: rgb(35, 174, 202);
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    font-size: 16px;
    font-weight: bold;
    margin: 10px;
    width: 100%;
    padding: 10px 8px;
    width: 100%;
    border-radius: 50px;
    border: 0;
    background-color: pink;
}

button:hover{

    opacity: .10;

}

.error {

   background: #F2DEDE;

   color: #0c0101;

   padding: 10px;

   width: 95%;

   border-radius: 5px;

   margin: 20px auto;
}
h1 {
    text-align: center;
    color: rgb(134, 3, 3);
}
a {
  background: rgb(35, 174, 202);
  padding: 10px 15px;
  color: #fff;
  border-radius: 5px;
  margin-right: 10px;
  border: none;
  font-size: 16px;
  font-weight: bold;
  margin: 10px;
  width: 100%;
  padding: 10px 8px;
  width: 100%;
  border-radius: 50px;
  border: 0;
  background-color: pink;
  margin: auto;
  margin-top: 20px;

}

a:hover{

    opacity: .7;

}

.login-form {
  width: 350px;
  top: 50%;
  left: 50%;
  margin: auto;
  color: #fff;
  display: gripd;
  grid-template-columns: repeat(auto-fill,minmax(300px, 1fr));
  display: grid;
  justify-content: center;
  align-content: center;

}
label {
  color: white;
  font-family: cursive;
}
#role_id {
    margin-top: 20px;
}
</style>
<body>

     <form action="activate.php" method="post">
       <div class="container-fluid">
         <section class="section1">
           <div class="login-form">

        <h2>Create your account</h2>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <select id="role_id" name="role_id">
          <option value="01">Admin</option>
          <option value="10">HR</option>
          <option value="20">Employee</option>
        </select>
        <button type="submit">Create account</button>
        
        <p class="p">Have an account? </P><br> <a style="text-align:center;" class="ax" href="index.php">Log In</a>
          <br><br>

      </div>
      </sectiom>
      </div>
     </form>

</body>

</html>
