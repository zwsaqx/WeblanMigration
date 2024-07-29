<!DOCTYPE html>
<html lang="en">
@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>Data Link Protocol Modelling</h1>
        </div>
    </body>
    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
