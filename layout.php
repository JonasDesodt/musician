<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?> | Firstname Lastname</title>
    </head>

    <body>
        <header>
            <div>
                <h1>Firstname Lastname</h1>
            </div>

            <nav>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/agenda">Agenda</a></li>
                </ul>
            </nav>
        </header>

        <?php require($view_path) ?>

        <footer>
            <p>&copy; 2024 Firstname Lastname</p>
        </footer>
    </body>
</html>