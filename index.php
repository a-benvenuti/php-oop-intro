<?php
include __DIR__ . "/classi/book.php";

// ISTANZE
$book1 = new Book("Harry Potter e la pietra filosofale", "J. K. Rowling");
$book1->setId("jkrhpelpf1");
$book1->year="1997";
$book1->publishingHouse="Salani Editore";
$book1->description="Harry Potter è un ragazzo di undici anni che vive con gli zii e il cugino, i Dursley, dopo essere rimasto orfano all'età di un anno; gli zii lo tormentano ogni giorno, tenendogli anche nascosta la verità sulla morte dei genitori. Il giorno del suo undicesimo compleanno Hagrid, un vecchio amico dei suoi genitori, gli rivela che lui in realtà è un mago, e che i suoi genitori sono stati uccisi dal più grande mago oscuro di sempre, Lord Voldemort, il quale aveva tentato di uccidere anche Harry, fallendo e perdendo tutti i poteri; gli rivela inoltre di essere iscritto ad una scuola di magia, Hogwarts, introducendolo quindi alla realtà del Mondo Magico. Ad Hogwarts Harry stringe amicizia con Ron Weasley e Hermione Granger, entra in conflitto con Draco Malfoy e conosce anche i professori Severus Piton, insegnante di Pozioni, e Albus Silente, preside della scuola. Nel corso dell'anno Harry, Ron e Hermione scoprono che nella scuola è custodita la pietra filosofale, in grado di rendere immortale chi la possiede, e che qualcuno stia cercando di rubarla: sebbene questi sospettino di Piton, scoprono che in realtà il colpevole è Quirinus Raptor, docente di Difesa contro le Arti Oscure, posseduto da Voldemort; lo stregone oscuro fallisce però nel suo intento grazie all'intervento di Harry e Silente. ";

$book2 = new Book("Harry Potter e la camera dei segreti", "J. K. Rowling");
$book2->setId("jkrhpelcds1");
$book2->year="1998";
$book2->publishingHouse="Salani Editore";
$book2->description="Harry, durante le vacanze estive, riceve la visita di Dobby, un elfo domestico che lo avverte di non tornare ad Hogwarts quell'anno. Messo in punizione dai Dursley viene liberato da Ron e dai suoi fratelli Fred e George e portato alla Tana, casa della famiglia Weasley. Qui fa conoscenza con i vari membri della famiglia, tra i quali Ginny, sorella minore di Ron. Al loro ritorno ad Hogwarts scoprono che qualcuno ha riaperto la camera dei segreti, un luogo sconosciuto di Hogwarts costruito da uno dei fondatori della scuola, Salazar Serpeverde: la camera può essere riaperta solo da un suo discendente, in grado anche di controllare il mostro che vi è rinchiuso; contestualmente, alcuni studenti nati babbani iniziano a essere pietrificati. Harry inizia a udire anche una voce incorporea e inudibile dagli altri, ed entra in possesso di un diario appartenuto ad un certo T. O. Riddle, studente ad Hogwarts cinquant'anni prima. Scopre inoltre di essere rettilofono come Serpeverde, facendo nascere il sospetto negli altri studenti che sia Harry il suo erede. Si scopre infine che la camera è stata aperta da Ginny Weasley manipolata da Riddle, ovvero Voldemort da giovane, attraverso il suo diario, e che il mostro rinchiuso nella camera è un basilisco, un enorme serpente in grado di pietrificare e uccidere con il solo sguardo. Harry riesce a uccidere il mostro e a distruggere il diario, liberando Ginny dalla possessione.";

$book3 = new Book("Harry Potter e il prigioniero di Azkaban", "J. K. Rowling");
$book3->setId("jkrhpeipda1");
$book3->year="1999";
$book3->publishingHouse="Salani Editore";
$book3->description="Sirius Black, ritenuto essere il sostenitore di Voldemort che gli consegnò i genitori di Harry, evade dalla prigione magica di Azkaban. Harry, al suo terzo anno ad Hogwarts, viene informato da Arthur Weasley che presumibilmente è intenzionato a ucciderlo, per vendicare così il mago oscuro. Nel corso dell'anno Harry scopre che Sirius era un grande amico dei suoi genitori, e in particolar modo di suo padre James; scopre inoltre che Sirius avrebbe assassinato un altro suo amico, Peter Minus, e che conosceva l'attuale professore di Difesa contro le Arti Oscure Remus Lupin. Dopo vari avvenimenti Harry scopre la realtà dei fatti: suo padre, Sirius, Lupin e Minus erano grandi amici a scuola, tanto da diventare animagus dopo aver appreso che Lupin è un lupo mannaro. Inoltre, colui che ha tradito i genitori di Harry non è Sirius ma Minus, che ha poi finto la sua morte trasformandosi in topo, diventando infine l'animale domestico di Ron. Minus riesce però a scappare, costringendo Sirius nuovamente alla fuga.";

$book4 = new Book("Harry Potter e il calice di fuoco", "J. K. Rowling");
$book4->setId("jkrhpeicdf1");
$book4->year="2000";
$book4->publishingHouse="Salani Editore";
$book4->description="Ad Hogwarts ha luogo un'importante competizione secolare tra scuole di magia, il torneo Tremaghi: nonostante siano ammessi a partecipare solo tre studenti, uno per ciascuna scuola, Harry si ritrova suo malgrado iscritto come quarto concorrente a causa di un individuo ignoto. Dopo aver superato le prime due prove, alla terza Harry viene trasportato in un cimitero tramite una passaporta: qui Minus usa il suo sangue come ingrediente di una pozione per permettere a Voldemort di riottenere un corpo fisico. Lo stregone prova a uccidere il ragazzo, ma una connessione anomala tra le bacchette dei due permette a Harry di fuggire e tornare a Hogwarts. Qui avverte Silente del ritorno di Voldemort, scoprendo anche che colui che l'aveva iscritto al torneo era Barty Crouch Jr., Mangiamorte al servizio di Voldemort introdottosi ad Hogwarts sotto le sembianze di Alastor Moody, vecchio amico di Silente.";

$book5 = new Book("Harry Potter e l'Ordine della Fenice", "J. K. Rowling");
$book5->setId("jkrhpelodf1");
$book5->year="2003";
$book5->publishingHouse="Salani Editore";
$book5->description="Harry viene a sapere dell'esistenza dell'Ordine della Fenice, un'organizzazione segreta capeggiata da Silente per contrastare Voldemort e i suoi Mangiamorte, questi ultimi alla ricerca di una fantomatica arma; scopre inoltre che il Ministero della Magia rigetta la notizia del ritorno dello stregone oscuro, e che ha iniziato una campagna diffamatoria contro Harry e Silente. Nel corso dell'anno il ragazzo si ritrova a dover sopportare Dolores Umbridge, membro del Ministero assunta a Hogwarts come docente, che vieta l'apprendimento pratico di incantesimi difensivi: per fronteggiarla Harry fonda un'organizzazione studentesca segreta, chiamata poi Esercito di Silente. Nel mentre si rende conto di avere una connessione mentale e empatica con Voldemort: sfruttandola, lo stregone attira Harry al Ministero per fargli ottenere la registrazione di una profezia lì custodita. Harry viene salvato dall'Ordine, ma nella battaglia Sirius muore. Dopo gli scontri Silente rivela a Harry che la profezia, andata distrutta, prevedeva la morte di Voldemort per mano di Harry, e che è stata questa la causa dell'attacco dello stregone alla sua famiglia.";

$book6 = new Book("Harry Potter e il principe mezzosangue", "J. K. Rowling");
$book6->setId("jkrhpeipm1");
$book6->year="2005";
$book6->publishingHouse="Salani Editore";
$book6->description="Dopo la rivelazione del contenuto della profezia, Harry e Silente cercano di ricostruire il passato di Voldemort attraverso dei ricordi appartenenti a persone che lo hanno conosciuto prima di diventare il Signore Oscuro. I due scoprono così l'esistenza degli Horcrux, oggetti in cui il mago ha nascosto parte della sua anima così da rendersi immortale. Durante l'anno Harry entra in possesso di un libro di proprietà di un certo principe mezzo sangue, nel quale sono annotati incantesimi inventati dal principe stesso, e scopre che Draco Malfoy è diventato un Mangiamorte. Al termine dell'anno Harry e Silente provano a distruggere uno degli Horcrux, ma l'avventura si conclude con l'assassinio del preside per mano di Piton, rientrato tra i ranghi dei Mangiamorte e rivelatosi essere il principe mezzosangue.";

$book7 = new Book("Harry Potter e i Doni della Morte", "J. K. Rowling");
$book7->setId("jkrhpeiddm1");
$book7->year="2007";
$book7->publishingHouse="Salani Editore";
$book7->description="Dopo aver deciso di andare alla ricerca degli Horcrux rimasti, Harry, Ron e Hermione non ritornano ad Hogwarts per il loro ultimo anno. Durante la caccia agli oggetti oscuri Harry apprende varie informazioni sul passato di Silente e sul suo coinvolgimento con Gellert Grindelwald, mago oscuro sconfitto dallo stesso Silente, facendo vacillare in lui la fiducia nell'anziano mentore. I tre vengono inoltre a conoscenza dell'esistenza dei Doni della Morte, tre antichi e potenti manufatti che renderebbero invincibile chiunque li possieda. Dopo aver scoperto che l'ultimo Horcrux è a Hogwarts i tre ritornano alla scuola, avvertendo i professori e costringendo alla fuga Piton, nominato preside in quell'anno. I Mangiamorte nel mentre attaccano il castello e Piton viene assassinato da Voldemort, convinto che la sua morte lo renda il legittimo padrone della bacchetta di sambuco, uno dei Doni; prima di morire, però, Piton consegna a Harry i suoi ricordi, che rivelano il suo amore verso la madre del ragazzo, la pianificazione della morte di Silente ad opera del preside stesso ma soprattutto il fatto che Harry stesso sia un Horcrux, decretando quindi il destino del ragazzo. Pur di distruggere l'ultimo frammento di anima, Harry si lascia uccidere da Voldemort: nonostante ciò non muore poiché sua madre, sacrificandosi, gli aveva fornito una protezione impenetrabile. Harry affronta quindi Voldemort in un duello dal quale ne esce vincitore mentre Voldemort, privato di tutti gli Horcrux, muore definitivamente.";

$books = [$book1, $book2, $book3, $book4, $book5, $book6, $book7];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HP-Books</title>
</head>

<body>
    <div class="container">
        <?php foreach ($books as $book) { ?>
            <div class="book">
                <h2><?php echo $book->title; ?></h2>
                <h3><?php echo $book->author; ?></h3>
                <h4><?php echo $book->publishingHouse; ?> - <?php echo $book->year; ?></h4>
                <p><?php echo $book->abstract(150); ?></p>
                <!-- <span><?php echo $book->getId(); ?></span> -->
            </div>
        <?php } ?>
    </div>
</body>

</html>