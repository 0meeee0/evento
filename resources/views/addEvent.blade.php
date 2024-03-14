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
                <div class="alert alert-danger">
                    <strong> Validation Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success mt-4">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger mt-4">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>

        <div class="container col-7 mb-5" id="here">
          <form class="col-9 mx-auto text-white" method="POST" action="{{route('storeEvent')}}" enctype="multipart/form-data">
              @csrf
              @method('post')
              <div class="form-group">
                  <label for="title">Event Name:</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Event Name" required>
              </div>

              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" class="form-control" placeholder="Event Description" required></textarea>
              </div>

              <div class="form-group">
                  <label for="category">Category:</label>
                  <select name="categories_id" id="category">
                    @foreach ($categ as $c)
                        
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
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

              <div class="form-group">
                  <label for="name">N. of Places:</label>
                  <input type="number" name="number_places" id="number_places" class="form-control" placeholder="Event Location" required>
              </div>


              <div>
            <label for="status">Reservations :</label>
            <select id="status" name="status" class="block mt-1 w-full">
                <option value="auto">Automatic</option>
                <option value="manuel">Manual</option>
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