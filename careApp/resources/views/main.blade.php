@vite(['resources/js/main.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <script defer src="{{ asset('js/app.js') }}" type="module"></script> -->
    
    <title>Dashboard</title>
</head>
<body>
  <main id="app">
    
    <h1><center>WELCOME TO BOOKCARE</center></h1>
    <h3><center>What do you want to do today?</center></h3>


    <div class="d-grid gap-2 col-2 mx-auto">
      <!-- // routes for new booking -->
      <a @click="newBooking" href="{{ route('patient.booking') }}" class="btn btn-primary" type="button">
        New Booking</a>

      <a @click="newBooking" href="{{ route('patient.booking') }}" class="btn btn-primary" type="button">
        Manage Booking</a>
    </div>
  
  </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>     
    
    </body>
</html>