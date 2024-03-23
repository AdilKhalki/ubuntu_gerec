<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Gestion des Reclamations -Adil KHALKI-">
<meta name="keywords" content="adil, khalki, umt, ofppt, bureau, local, ista, maroc">
<meta name="author" content="Adil KHALKI">
<meta name="robots" content="noindex, nofollow">
<title>Gestion des reclamations</title>
    @include('layouts.css')
</head>
<body>
    
    <div class="main-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>
    @include('layouts.js')
</body>
</html>