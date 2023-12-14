function register() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', './php/register.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if ( xhr.status === 200) {
            if (xhr.responseText === 'success') {
                alert('Registration successful! Redirecting to login page.');
                window.location.href = './login.html';
            } else {
                alert('Registration failed. Please try again.');
            }
        }
    };
    var data = 'username=' + encodeURIComponent(username) +
               '&password=' + encodeURIComponent(password) +
               '&email=' + encodeURIComponent(email);

    xhr.send(data);
}
