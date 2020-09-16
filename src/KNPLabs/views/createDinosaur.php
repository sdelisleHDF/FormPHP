<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/FormPHP">Dinosaurs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/FormPHP">List</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/create">Create<span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <form method="GET" action="http://localhost/FormPHP" class="form-inline my-2 my-lg-0 pull-right ml-2">
          <input type="search" name="q" placeholder="Search" class="form-control mr-sm-2" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container">
      <h1>Create a dinosaur</h1>
      <form method="POST">
        <div class="form-group">
          <label for="name">Name:</label>
          <input id="name" name="name" type="text" class="form-control" />
        </div>
        <div class="form-group">
          <label for="race">Race:</label>
          <select id="race" name="race" class="form-control">
              <option value="Tyrannosaurus">Tyrannosaurus</option>
              <option value="Triceratops">Triceratops</option>
              <option value="Pterodactyl">Pterodactyl</option>
          </select>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input id="age" name="age" type="number" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary mb-2">Create</button>
      </form>
    </div>
  </body>
</html>
