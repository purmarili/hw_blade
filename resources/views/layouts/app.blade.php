<!DOCTYPE html>
<html>
<head>
  <title>Quiz App</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    @yield('content')
  </div>
  <footer class="mt-5">
    <form action="/subscribe" method="POST">
      @csrf
      <input type="email" name="email" placeholder="Your email">
      <button type="submit">Subscribe</button>
    </form>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
