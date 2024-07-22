<p align="center"><a href="# target="_blank"><img src="public/img/logo.png" width="400" alt="Laravel Logo"></a></p>

<p align="center"><img src="public/img/ScreenFlow.gif" width="480" alt="Laravel Logo"></p>

## Esercizio Recap

Vi è stato consegnato un progetto sviluppato dal reparto frontend, non esiste alcuna dinamicità nelle pagine. 
- Avete un database (per il momento un array) gia popolato di film e serie tv a cui accedere;
- Avete le 3 rotte definite nel file `routes/web.php` da configurare e implementare;
- Avete le 3 viste definite dentro `resources/views` da configurare e implementare (foreach, route, ecc);
- Dentro la cartella `public/img` avete tutte le cover dei film e delle serie tv da implementare


Suggerimenti
- Sistemate il file delle rotte: SoC, Named Routes e PageController
- Create appunto un controller per gestire la parte logica con tutti i metodi necessari
- Create un main Layout e create una navbar come componente anonimo. 
- Prendete l'array che vi è stato consegnato e SENZA MODIFICARLO gestitelo in modo tale da stampre tutti i dati  accessibili tramite la chiave URI di ogni array.


## ARRAY DA UTILIZZARE


```php

$database = [
   
        ['uri' => 'barbie', 'name' => 'Barbie', 'cover' => '/img/films/barbie.jpg', 'Barbie, che vive a Barbie Land, viene cacciata dal paese perché non è una bambola dall\'aspetto perfetto. Senza un posto dove andare, parte per il mondo umano e cerca la vera felicità.'],
        ['uri' => 'guardiani-della-galassia', 'name' => 'Guardiani della Galassia', 'cover' => '/img/films/gog3.jpg', 'Il terzo capitolo della saga Marvel "Guardiani della Galassia" che vede come protagonisti Peter Quill e i suoi amici supereroi.'],
        ['uri' => 'interstellar', 'name' => 'Interstellar', 'cover' => '/img/films/interstellar.jpg', 'In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l\'agricoltura. Il granturco è l\'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.'],
        ['uri' => 'lotr', 'name' => 'Il Singore degli Anelli', 'cover' => '/img/films/lotr.jpg', 'Frodo vuole gettare in un vulcano l\'anello magico forgiato sa Sauron per dominare la terra. Con lui alcuni amici. (Sinossi reale scritta dalla rivista Telesette)'],
        ['uri' => 'matrix', 'name' => 'Matrix', 'cover' => '/img/films/matrix.jpg', 'Esistono due realtà: una è l\'esistenza che conduciamo ogni giorno, l\'altra è nascosta. Neo vuole scoprire la verità su Matrix, mondo virtuale elaborato al computer creato per tenere sotto controllo le persone. Morpheus potrebbe aiutarlo.'],
        ['uri' => 'padrino', 'name' => 'Il padrino', 'cover' => '/img/films/padrino.jpg', 'A New York, alla fine degli anni 70, Michael Corleone riesce a convertire i numerosi affari di famiglia in operazioni lecite. Aumentando le sue donazioni alla Chiesa, l\'uomo entra nelle grazie dell\'arcivescovo Gilday.'],
        ['uri' => 'pulp', 'name' => 'Pulp Fiction', 'cover' => '/img/films/pulp.jpg', 'Si incrociano le strade di personaggi legati al crimine. Un pugile che mente a un capo banda, due sicari che discutono massaggi ai piedi e panini, una coppia che rapina una caffetteria e altri danno vita a un dramma criminale comico quanto brutale.'], 
        ['uri' => 'breaking-bad', 'name' => 'Breaking bad', 'cover' => '/img/tv-series/breaking-bad.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
        ['uri' => 'cesaroni', 'name' => 'cesaroni', 'cover' => '/img/tv-series/cesaroni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
        ['uri' => 'dahmer', 'name' => 'Dhamer', 'cover' => '/img/tv-series/dhahmer.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
        ['uri' => 'don-matteo', 'name' => 'Don Matteo', 'cover' => '/img/tv-series/don-matteo.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
        ['uri' => 'hof', 'name' => 'House of the Dragon', 'cover' => '/img/tv-series/hof.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
        ['uri' => 'stranger', 'name' => 'Stranger Things', 'cover' => '/img/tv-series/stranger.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
        ['uri' => 'the-boys', 'name' => 'The Boys', 'cover' => '/img/tv-series/the-boys.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
        ['uri' => 'the-office', 'name' => 'The Office', 'cover' => '/img/tv-series/the-office.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'],
   
];
```

P.S. Usate sempre la logica di estendere e mai modificare, solo in caso di refusi o errori miei siete autorizzati a modificare il codice!
