<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <title>Creaty Thang</title>
</head>
<body>
<header>
<section id="createuser">
    <form method="post" id="create-area" class="vertical center-text">
        <label>
            <input  name="fornavn" id="fname-input" placeholder="First name">
        </label>
        <label>
            <input  name="etternavn" id="lname-input" placeholder="Last name">
        </label>
        <label>
            <input  name="epost" id="email-input" placeholder="Email">
        </label>
        <label>
            <input  name="password" id="pass-input" placeholder="Password" type="password">
        </label>
        <button name="create"  type="submit" id="signup-button">Create</button>
        <div id="login-status"></div>
    </form>


</section>

<?php
include "insertuser.php";
?>

<!--<script src="/isloggedin.js"></script>-->

</body>
</html>