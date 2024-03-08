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
    @include('layouts.nav')
    <section id="intro">
      <div class="intro-container wow fadeIn">
        <div class="container mt-5">
      <div class="heading_container heading_center">
        <h2 class="text-light" id="here">Create a New Event</h2>
      </div>
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

        <div class="container col-7 mb-5" id="here">
          <form class="col-9 mx-auto text-white" method="POST" action="" enctype="multipart/form-data">
              @csrf
              @method('post')
              <div class="form-group">
                  <label for="name">Event Name:</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Event Name" required>
              </div>

              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" class="form-control" placeholder="Event Description" required></textarea>
              </div>

              <div class="form-group">
                  <label for="category">Category:</label>
                  <select name="category" id="category">
                    <option value="">cat1</option>
                    <option value="">cat2</option>
                    <option value="">cat3</option>
                </select>
              </div>

              <div class="form-group row">
                <div class="col-sm-6">
                    <label for="start_date" class="col-form-label">Event Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                </div>
                <div class="col-sm-6">
                    <label for="end_date" class="col-form-label">Event End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                </div>
            </div>


              <div class="form-group">
                  <label for="name">Location:</label>
                  <input type="text" name="location" id="location" class="form-control" placeholder="Event Location" required>
              </div>

              <div>
            <label for="accept">Reservations :</label>
            <select id="accept" name="accept" class="block mt-1 w-full">
                <option value="auto">Automatic</option>
                <option value="manual">Manual</option>
            </select>
        </div>
              <button type="submit" class="btn btn-danger">Submit</button>
          </form>
        </div>
    </div>
    </section>

     @include('layouts.scripts')
    <!--=========================
        Footer
    ============================-->
    <footer id="footer">
        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>EVENTO</strong>. All Rights Reserved
        </div>
        </div>
    </footer>

</body>
</html>