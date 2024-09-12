<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>contact</title>
</head>
<header>
    <x-navbar />
</header>
<body>
    <h2>contact</h2>

    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>

    <div class= "naam">
        <label for="naam">naam:</label>
        <br>
        <input type="text">
    </div>
    <div class= "email">
        <label for="email">email:</label>
        <br>
        <input type="text">
    </div>
    <div class= "onderwerp">
        <label for="onderwerp">onderwerp:</label>
        <br>
        <input type="text">
    </div>
    <div class= "tekst">
        <label for="tekst">tekst:</label>
        <br>
        <textarea rows="5"></textarea>
    </div>
    <div class= "verstuur">
        <label for="verstuur"></label>
        <input type="submit">
    </div>
</body>
<div class='contactFooter'>
<footer>
    <x-footer />
</footer>
</div>
</html>
