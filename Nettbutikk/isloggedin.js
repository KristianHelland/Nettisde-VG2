
if (localStorage.getItem('data')) {
    document.getElementById('loginbtn').innerHTML = "Loged in";
    document.getElementById('loginbtn').href = "/users/profile.php";
} else {
    document.getElementById('loginbtn').innerHTML = "Log in";
}

function getData() {
    if (localStorage.getItem('data')) {
        return JSON.parse(localStorage['data']);
    }
}

const data2 = getData();
