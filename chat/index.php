<!-- Views -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT-ROOM | Discussion</title>
    <!-- stylesheet links -->
    <link rel="stylesheet" href="./../css/chat.css">
</head>
<body>

    <!-- Global container -->
    <div class="container">
        <!-- En-tête de navigation -->
        <div class="header">
            <div class="logo">
                <h1><a href="./../">OOKIE</a></h1>
            </div>

            <!-- Raccourcis -->
            <nav>
                <ul>
                    <li><a href="./">Actualiser</a></li>
                </ul>
            </nav>
        </div>

        <!-- TODO: Constuire l'affichage des 10 derniers messages-->
        <div class="listMsg">
            <div class="msg">
                <h2>Jack.</h2>
                <div>
                    <p>Salut Tom ! Comment vas-tu ?</p>
                </div>    
            </div>
            <div class="msg">
                <h2>Tom.</h2>
                <div>
                    <p>Salut, je vais bien et toi ?</p>
                </div>    
            </div>
            <div class="msg">
                <h2>Jack.</h2>
                <div>
                    <p>Tout avance pour le mieux, merci -:)</p>
                </div>    
            </div>
        </div>

        <!-- TODO: Construire le formulaire HTML(envoi message) -->
        <div class="sndMsg">
            <form action="#" method="post" autocomplete="off">
                <div class="inputField">
                    <input type="text" name="#" id="msg" placeholder="Entrer votre message...">
                </div>
                <button name="snd">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>