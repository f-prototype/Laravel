<!doctype html>
<html lang="en">
  <head>
    <title>News</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction:column;
            min-height:100vh;
            font-family: 'Nunito', sans-serif;
        }
        main {
            flex: 1 0 auto;
        }
        footer {
            color: #fff;
            background-color: #000;
            padding: 40px;
            display: flex;
            grid-gap: 50px;
            justify-content: center;
            align-items: center; 
        }

        footer h2, footer p {
            margin: 0;
        } 

        .hidden {
            display: none;
        }
    </style>
</head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="about">About us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Contacts</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="/article">Articles</a>
                    </li>     
                    <li class="nav-item">
                        <a class="nav-link" href="/article/create">Create articles</a>
                    </li>
   
                </ul>
            </div>
            <div class="navbar-nav d-flex justify-content-end">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/auth/create">SignUp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/login">SignIn</a>
                </li>
                @endguest
                @auth    
                <li class="nav-item">
                    <a class="nav-link" href="/auth/logout">Logout</a>
                </li>
                @endauth    
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <h2>Сазонов Алексей</h2>
        <p>Группа: 211-322</p>
    </footer>
</body>
</html>