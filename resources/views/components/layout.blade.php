<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manila Police District</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
 

    <script>
    $(document).ready(function(){
        $("#flash").modal('show');
    });

    </script>

</head>
<body style="font-family: Open Sans, sans-serif">


 
    <section class="px-6 py-1 ">
        <x-nav />

            {{ $slot }}

       
            

        <footer class="card text-center">
            <img src="/images/mpdlogo.png" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <p>@ Manila Police District. All Right Reserved 2023. </p>

        </footer>
    </section>

  

</body>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
   