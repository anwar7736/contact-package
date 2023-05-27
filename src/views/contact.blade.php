<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    #name, #email, #message{ 
        border: 1px solid red;
    }
  </style>
</head>
<body>
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> {{ Session::get('message') }}
</div>
@endif
<div class="container mt-3">
  <h1 class="text-center text-danger">Contact Us</h1>
  <form action="{{ route('send.message') }}" method="POST" class="col-md-6 offset-md-3">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>    
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>    
    <div class="mb-3 mt-3">
      <label for="message">Message:</label>
      <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write something..." required></textarea>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-success">Send Message</button>
    </div>
  </form>
</div>

</body>
</html>
