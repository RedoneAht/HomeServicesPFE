<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Rendez-vous</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0e992;
            margin: 0;
            padding: 0;
            color: #252C2E;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #FFEC9E;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #252C2E;
            margin-top: 0;
        }
        p {
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ED9455;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #FFBB70;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Annonce de réservation</h1>
        
        <p>Bonjour {{$serviceProvider->name}},</p>
        
        <p>Vous avez été sélectionné pour un rendez-vous :</p>
        
        <ul>
            <li>Date : {{ $reservation->date }}</li>
            <li>Heure : {{ $reservation->time }}</li>
        </ul>
        
        <p>Veuillez confirmer votre disponibilité en vous connectant à votre espace dans notre application pour voir les informations détaillées de la réservation et pour accepter ou rejeter l'offre.</p>
        
        <p>Vous pouvez accéder à votre espace en cliquant sur ce lien : <a href="{{route('login')}}" class="button">Valider la réservation</a>.</p>
        
        <p>Cette opportunité est limitée dans le temps. En cas de non-confirmation rapide, nous serons contraints de proposer le rendez-vous à un autre prestataire de services.</p>
        
        <p>Merci pour votre réponse rapide.</p>
        
        <p>Cordialement,</p>
        <p>L'équipe de ServiceNet</p>
    </div>
    
</body>
</html>
