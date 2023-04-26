<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora" />
    <title>GoGreen</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" href="../res/GoGreen-vuoto.png">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <?php include './components/header.html'; ?>
    <div class="MidPage">
        <div id="Motto">
            <h1>Rendi i tuoi viaggi sempre più <br> sostenibili</h1>
            <button onclick="myFunction()" id="Prenota">Prenota il tuo veicolo</button>
            <h3>Non sei ancora cliente GoGreen?</h3>
            <a href=" "> Registrati </a>
        </div>
    </div>
    <article>
        <h1>La mobilità sostenibile è una priorità per noi di GoGreen.</h1>
        <p> Il nostro servizio di car sharing con macchine <b>full eletric</b> è ora disponibile in tutta italia. </p>
        <p>Offriamo un’opzione <b>ecologica</b> ed <b>economica</b> per soddisfare le esigenze di trasporto. <br> Nella sezione successiva, esamineremo in dettaglio i vantaggi del nostro servizio e dimostreremo come può aiutare a ridurre i costi, aumentare l’efficienza e contribuire a un futuro più sostenibile. Scopri come il nostro servizio può essere la <b>soluzione ideale</b> per le tue esigenze di mobilità.</p>
        <section>
            <div class="iconePrimaLinea">
                <img src="../res/icone/3.png">
                <h2>Sostenibilità ambientale</h2>
                <p>Le nostre macchine elettriche sono alimentate da fonti di energia pulita e rinnovabile, riducendo l’impatto ambientale del trasporto su strada.</p>
            </div>
            <div class="iconePrimaLinea">
                <img src="../res/icone/2.png">
                <h2>Convenienza economica</h2>
                <p>Risparmiate sui costi associati alla proprietà di un’auto personale e godete dei vantaggi economici dell’elettricità rispetto al carburante tradizionale</p>
            </div>
            <div class="iconeSecondaLinea">
                <img src="../res/icone/4.png">
                <h2>Flessibilità</h2>
                <p>Prenotate un’auto quando ne avete bisogno e restituitela quando avete finito, il tutto con pochi semplici clic.</p>
            </div>
            <div class="iconeSecondaLinea">
                <img src="../res/icone/1.png">
                <h2>Tecnologia all’avanguardia</h2>
                <p>Godete di un’esperienza di guida piacevole e sicura grazie alle avanzate funzionalità di assistenza alla guida e ai sistemi di intrattenimento a bordo delle nostre macchine elettriche.</p>
            </div>
        </section>
    </article>
    <footer>
        <h3>GoGreen - Il tuo servizio di car sharing ecologico</h3>
        <p>
            Seguici sui social media: <br> <img src="../res/iconeSocial/1.png"> <img src="../res/iconeSocial/2.png"> <img src="../res/iconeSocial/3.png"> 
            <br>
            Contattaci: info@gogreen.com | +39 123 456 789
            <h5> © 2023 GoGreen. Tutti i diritti riservati.</h5>
            <h6>Ivan Tenga e Rebecca Sanua</h6>
        </p>
    </footer>
    <script>
        function myFunction() {
            var element = document.getElementById("Prenota");
            element.style.transform ="scale(0.95)";
            setTimeout(function() {
                element.style.transform = "";
            }, 150);
        }
        </script>
</body>
</html>