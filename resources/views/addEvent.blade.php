<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New EVENt</title>
     @include('layouts.head')
</head>
<body class="">
      <!--==========================
    Header
  ============================-->
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <!-- Uncomment below if you prefer to use a text logo -->
          <h1><a href="{{ route('home') }}">E<span>V</span>ento</a></h1>
          <a href="#intro" class="scrollto"
            ><img src="img/logo.png" alt="" title=""
          /></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
              <li><a href="#">Login</a></li>
              <li><a href="#">Signup</a></li>
              <li><a href="#">Account</a></li>
            <li class="buy-tickets"><a href="">Dashboard</a></li>
            <li class="buy-tickets"><a href="{{ route('addEvent') }}">New</a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
        <section id="intro">
      <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">
          Create an<br /><span>Event</span> Now
        </h1>
        <p class="mb-4 pb-0">
          Create, Reserve and Enjoy
        </p>
        
        <a href="#here" class="about-btn scrollto">Let's Go</a>
      </div>
    </section>

    <div class="container mt-5">
      <!-- <div class="heading_container heading_center">
        <h2 id="here">Create a New Recipe</h2>
      </div> -->
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
            @endif
        </div>

        <div class="container mb-5" id="here">
          <form class="col-9 mx-auto" method="POST" action="" enctype="multipart/form-data">
              @csrf
              @method('post')
              <div class="form-group">
                  <label for="name">Event Name:</label>
                  <input type="text" name="name" id="name" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" class="form-control" required></textarea>
              </div>

              <div class="form-group">
                  <label for="category">Category:</label><br>
                  <select name="category" id="category">
                    <option value="">cat1</option>
                    <option value="">cat2</option>
                    <option value="">cat3</option>
                </select>
              </div>

              <div class="form-group">
                  <label for="date">Event Date:</label>
                  <input type="date" name="date" id="date" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="image">Image:</label>
                  <input type="file" name="image" id="image" class="form-control" accept="image/*">
              </div>

              <button type="submit" class="btn btn-danger">Submit</button>
          </form>
        </div>
    </div>

     @include('layouts.scripts')

</body>
</html>