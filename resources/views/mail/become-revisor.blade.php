<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    {{-- <div>
        <h1>Un utente ha chiesto di lavorare con noi </h1>
        <h2>Ecco i suoi dati:</h2>
        <p>Nome: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Se vuoi renderl* revisor, clicca qui :</p>
        <a href="{{route('make.revisor',compact('user'))}}">Rendi revisor</a>
    </div> --}}
    <div class="container">
        <h1>Richiesta di Revisore</h1>
        <p>Gentile Amministratore,</p>
        <p>un utente ha espresso il desiderio di collaborare con noi come revisore. Ecco i suoi dati:</p>
        
        <p><strong>Nome:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        
        <p>Se desideri accettare la richiesta e assegnare il ruolo di revisore, clicca sul pulsante qui sotto:</p>
        
        <a href="{{route('make.revisor',compact('user'))}}" class="button">Assegna ruolo di Revisore</a>
        
        <p class="footer">Grazie per il tuo supporto,<br>Il team di 404_BRAIN_NOT_FOUND</p>
    </div>
</body>
</html>