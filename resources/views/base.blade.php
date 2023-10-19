<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerekli</title>
</head>
<style>
    .nav-bar {
        display: flex;
        background-color: rgb(223, 223, 255);
        color: black;
        flex-direction: row;
        justify-content: space-between;
        padding: 5px;
        gap: 5px;
        align-items: center;
    }

    .nav-bar a {
        text-decoration: none;
        border: 3px solid rebeccapurple;
        border-radius: 10px;
        padding: 10px;
    }
</style>
<nav class="nav-bar">
    <h3><a href="/privatedb">Private</a></h3>
    <h3><a href="/hairmistdb">HairMist</a></h3>
    <h3><a href="/export">Export</a></h3>
    <h3><a href="/delete">DELETE</a></h3>
</nav>


<body>
    <main>
        @yield('content')
    </main>
</body>

</html>