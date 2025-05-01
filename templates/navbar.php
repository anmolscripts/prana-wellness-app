<nav class="navbar bg-body-tertiary shadow bg-white">
    <div class="container-fluid">
        <a class="navbar-brand">Prana Wellness App</a>
        <button onclick="logout()" class="btn btn-danger bg-gradiant rounded-pill">Logout</button>
    </div>
</nav>

<script>
    const logout = () => {
        fetch('../api/auth/logout.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded', // or 'application/json' if you prefer
            },
        })
            .then(response => response.json()) // or response.text() if PHP returns plain text
            .then(data => {
                console.log('Success:', data);
                window.location.href = '../'; // Redirect to index.php after logout
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

</script>