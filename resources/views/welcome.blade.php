<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('images/bmw-logo.png')}}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- -- My Style & Script -- -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Crowfunding | BMW S1000RR</title>
</head>
<body>
    <header>
        <div>
            <img src="{{asset('images/bmw-logo.png')}}" alt="img moto" id="logo">
        </div>
        <nav>
            <div class="lang-select">
           
            </div>
            <div><a href="">Come donare</a></div>
            <div><a href="#anchor-r">Regole per la donazione</a></div>
        </nav>
    </header>

    <main>
        <div class="big-container">

            <p>
                CIAO A TUTTI! SONO GABRIELE, HO 24 ANNI ed insieme alla mia compagna abbiamo un bellissimo bimbo di nome Leonardo e per il quale stiamo facendo tantissimi sacrifici. Finalmente siamo riusciti a trovare una casa ma lavorando entrambi ed avendo una sola macchina siamo in difficoltà. All'inizio dell'anno scorso vendetti la mia moto, una bellissima KTM 690 SMCR,
             per affrontare le spese dell'avere un bambino e poiché allora solo mia moglie lavorava, presi questa scelta.
             Ad oggi non riuscirei a comprarmi la moto né tantomeno riuscirei a prendere un'altra macchina, perciò ho deciso di iniziare questa raccolta fondi, la quale vi permetterà, tramite la donazione, di poter inserire il vostro nome o una scritta scelta da voi tramite un adesivo che verrà stampato ed attaccato sulla carena della moto nella posizione da voi scelta, oltre che avere la mia più grande gratitudine <span>&#x2665;</span> .
            
            </p>
            <div>
                <h2>L'obiettivo è raggiungere i 10'000€</h2>
                <small>Il grafico verrà costantemente aggiornato ad ogni donazione per continuare a tenervi aggiornati.</small>

                <div class="container">
                    <div class="label">Completamento: <span id="percentualeNumero"></span>%</div></div>
                    <div class="bar">
                        <div id="fill" class="fill"></div>
                    </div>
                    <div class="totale">Totale donato: <span id="tot"></span>€</div>
                </div>
            </div>

            <div id="funding">
                <div id="external">
                    <div class="gfm-embed" data-url="https://www.gofundme.com/f/qpsq58-sogno-nel-cassetto/widget/medium?sharesheet=firstTime"></div>
                    <script defer src="https://www.gofundme.com/static/js/embed.js"></script>
                </div>
            </div>
            <div id="img-moto">
                <div>
                    <img src="{{asset('images/bmw-1.webp')}}" alt="immagine 1 moto">
                </div>
                <div>
                    <img src="{{asset('images/bmw-2.png')}}" alt="immagine 2 moto">
                </div>
                <div>
                    <img src="{{asset('images/bmw-3.png')}}" alt="immagine 3 moto">
                </div>
                <div>
                    <img src="{{asset('images/bmw-logo.png')}}" alt="img 4 moto">
                </div>
            </div>

            <div>
                foto 3D con rotazione per visuale a 360° della moto
            </div>
            <div id="anchor-r"></div>
            <div class="small-container">
                <p id="Regole">Per poter effettivamente avere un proprio spazio sulla moto con una scritta a vostro piacimento è molto importante compilare il form sottostante prima o dopo aver effettuato la donazione. Dopo aver ricevuto la donazione controllerò se i dati inseriti nel form corrispondano alla donazione effettuata, se così dovesse essere verrete inseriti nella lista dei donatori.
                    Una volta inseriti nella lista la vostra richiesta sarà a tutti gli effetti registrata e al momento dell'acquisto della moto l'adesivo con la vostra scritta e/o logo verrà poi attaccata alle carene della moto. <br>
                    <strong>È MOLTO IMPORTANTE</strong> compilare il modulo per specificare il tipo di scritta che si vuole far aggiungere. Il più piccolo formato è un 2cm x 2cm e costerà 5€. Per scritte fino a 15cm x 2cm il costo sarà di 10€. Per loghi di dimensioni più grandi il prezzo parte dai 25€, in questo caso è consigliabile compilare il form <strong>PRIMA</strong> di effettuare la donazione in modo
                    da controllare se lo spazio desiderato è ancora disponibile e per concordare un prezzo simbolico.
                </p>
                <small>Spero possiate capire che ovviamente lo spazio sulla moto non è molto e quindi al termine dello spazio si potranno comunque continuare le donazioni e le scelte delle scritte, che però verranno inserite sul casco</small>
            </div>

            <div class="small-container">
                <form action="">
                    <label for=""></label>
                    <input type="text">

                    <label for=""></label>
                    <input type="text">
                </form>
            </div>
        </div>
    </main>
    
    <footer>
        <div>
            <p>Per controllare e visionare altri miei lavori potete visitare le mie repository su <a href="https://github.com/Gabridg?tab=repositories">GitHub</a>.</p>
            <small>Il sito è stato interamente ideato e sviluppato da me stesso, per rendere le donazioni il più limpide e aggiornate possibili.<br/>
                Inoltre troverete la mia campagna fondi su <a href="https://www.gofundme.com/f/qpsq58-sogno-nel-cassetto?utm_source=customer&utm_medium=copy_link&utm_campaign=p_lico+share-sheet-first-launch&attribution_id=sl:644d26d3-9c72-4ab8-b796-0e34e4c3c250">GoFundMe</a>
            </small>
        </div>
    </footer>
</body>
</html>