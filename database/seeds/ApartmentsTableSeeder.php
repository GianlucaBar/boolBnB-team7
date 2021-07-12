<?php

use Illuminate\Database\Seeder;
use Illuminate\SUpport\Str;
use App\Apartment;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $apartments = [

            [
                'title'=> 'Porta Nuova centralissimo appartamento',
                'user_id'=> '1',
                'description'=> 'Centralissimo appartamento in Porta Nuova (Brera / Moscova / Isola), situato nella zona dove hanno luogo gli eventi di maggior rilevanza e al centro della vita notturna della città. Dotato di ogni comfort: cucina, wi-fi e TV LED Full HD, 2. piano con ascensore e letto matrimoniale. Ideale per poche notti o anche per permanenze più lunghe. Ideale per chi ha bisogno di un punto di appoggio e vuole vivere e pernottare nel cuore di Milano.',
                'rooms'=> '1',
                'beds'=> '2',
                'baths'=> '1',
                'square_meters'=> '120',
                'price'=> '150',
                'address'=> 'Via Amerigo Vespucci, 11, 20124 Milano MI',
                'latitude'=> '45.48132',
                'longitude'=> '9.19282',
                'cover'=>'null'
            ],

            [
                'title'=> 'PrimoPiano - Calvi Studio',
                'user_id'=> '1',
                'description'=> 'Monolocale con cucina separata, letto a soppalco, Wifi, Tv LCD, riscaldamento ed aria condizionata. Zona centrale molto comoda coi mezzi pubblici.',
                'rooms'=> '2',
                'beds'=> '4',
                'baths'=> '1',
                'square_meters'=> '200',
                'price'=> '160',
                'address'=> 'Via Comasina, 36, 20161 Milano MI',
                'latitude'=> '45.52477',
                'longitude'=> '9.16576',
                'cover'=>'null'
            ],

            [
                'title'=> 'Beautiful & quiet flat near Loreto',
                'user_id'=> '1',
                'description'=> 'Mini duplex apartment close to the major public transports: Loreto or Piola metro station (about 10 minutes by walk)or bus 81 and 55 . Historic building in a nice quiet street. 1 floor with view on the private court and gardens.Charming.',
                'rooms'=> '2',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '90',
                'price'=> '80',
                'address'=> 'Piazzale Martiri della Deportazione, 1, 20161 Milano MI',
                'latitude'=> '45.52899',
                'longitude'=> '9.18143',
                'cover'=>'null'
            ],

            [
                'title'=> 'Bright Room with A/C',
                'user_id'=> '1',
                'description'=> 'Il nostro appartamento è situato in posizione centrale e a pochi passi da tutti i tipi di trasporto pubblico e dai veri quartieri di Milano. Sarai in grado di raggiungere a piedi praticamente qualsiasi cosa tu voglia fare durante la visita.',
                'rooms'=> '1',
                'beds'=> '2',
                'baths'=> '1',
                'square_meters'=> '70',
                'price'=> '90',
                'address'=> 'Via Filippo Palizzi, 69, 20157 Milano MI',
                'latitude'=> '45.50776',
                'longitude'=> '9.13714',
                'cover'=>'null'
            ],

            [
                'title'=> 'Monolocale/Studio flat - Netflix & Wi-Fi-',
                'user_id'=> '1',
                'description'=> 'Monolocale ben strutturato con sala principale e con un letto matrimoniale/divano e un letto singolo a scomparsa, guardaroba e Smart tv, bagno e cucinino. Nell’appartamento é presente macchinetta del caffè Lavazza e microonde. È presente un balconcone lungo.
                Well-structured studio with main room and with a double bed / sofa and a foldaway single bed, wardrobe and Smart TV, bathroom and kitchenette.',
                'rooms'=> '2',
                'beds'=> '3',
                'baths'=> '2',
                'square_meters'=> '120',
                'price'=> '50',
                'address'=> 'Viale Piave, 38/B, 20129 Milano MI',
                'latitude'=> '45.47262',
                'longitude'=> '9.20676',
                'cover'=>'null'
            ],

            [
                'title'=> 'Cozy 1bdr in the heart of Milan',
                'user_id'=> '1',
                'description'=> 'Confortevole bilocale di circa 40mq sito al 1 piano (con ascensore) di un edificio storico di Milano nel centro di Milano, con il Duomo raggiungibile facilmente a piedi e vicinissimo alla fermata di metropolitana Crocetta della linea gialla.',
                'rooms'=> '2',
                'beds'=> '4',
                'baths'=> '1',
                'square_meters'=> '40',
                'price'=> '70',
                'address'=> 'Corso di Porta Romana, 126, 20122 Milano MI',
                'latitude'=> '45.45299',
                'longitude'=> '9.20075',
                'cover'=>'null'
            ],

            [
                'title'=> 'The Nine - Penelope',
                'user_id'=> '1',
                'description'=> 'ICS HOUSE è lieta di accogliervi nelle sue nuove splendide suite con finiture di pregio. L\'obiettivo è far vivere ai nostri ospiti un\'autentica e armoniosa esperienza di viaggio. Self check-in, massima riservatezza e privacy. Possibilità di early check in e late check out se disponibile.',
                'rooms'=> '2',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '60',
                'price'=> '70',
                'address'=> 'Via S. Barnaba, 50, 20122 Milano MI',
                'latitude'=> '45.45993',
                'longitude'=> '9.20231',
                'cover'=>'null'
            ],

            [
                'title'=> 'Schiapparelli A Flat',
                'user_id'=> '1',
                'description'=> 'Appartamento su due livelli dotato gli ogni comfort (aria condizionata, riscaldamento, collegamento WiFi in fibra ottica, TV) a pochi passi dalla Stazione Centrale in una zona ricca di ristoranti e servizi. I terminal delle navette per gli aeroporti di Linate, Malpensa ed Orio sono a meno di 5 minuti a piedi!',
                'rooms'=> '2',
                'beds'=> '5',
                'baths'=> '2',
                'square_meters'=> '110',
                'price'=> '120',
                'address'=> 'Via Melchiorre Gioia, 194, 20125 Milano MI',
                'latitude'=> '45.49762',
                'longitude'=> '9.2084',
                'cover'=>'null'
            ],

            [
                'title'=> 'Grazioso bilocale in zona Bocconi',
                'user_id'=> '1',
                'description'=> 'L\'appartamento, in zona Bocconi, è a circa 500 mt dall\'università, è completamente arredato e corredato e pronto da abitare. È composto da un ingresso, un ampio soggiorno con cucina abitabile a vista nuova, con tutti gli elettrodomestici nuovi, anche la lavastoviglie, un bagno finestrato dotato sia di box doccia che di vasca da bagno e da un ampia camera da letto. Piano rialzato, all interno del giardino condominiale, in contesto signorile e con portineria tutto il giorno.',
                'rooms'=> '2',
                'beds'=> '2',
                'baths'=> '1',
                'square_meters'=> '60',
                'price'=> '900',
                'address'=> 'Via Eugenio Curiel 25, 20089 Rozzano',
                'latitude'=> '45.39264',
                'longitude'=> '9.17603',
                'cover'=>'null'
            ],

            [
                'title'=> 'LA MIA TERRAZZA SU MILANO',
                'user_id'=> '1',
                'description'=> 'Splendido appartamento con terrazza a 3 minuti dalla metro e 15 minuti dal centro. La stazione centrale è a 15/20 minuti a piedi e il tram sotto casa porta direttamente davanti al teatro La Scala. Il quartiere è pieno di supermercati e negozi. Splendido miniappartamento ammobiliato con mobili di design, al 3° piano con un\' incantevole terrazzo gazebo e una vista ampia sulla strada di porfido dove passa un caratteristico tram in legno che porta direttamente in stazione centrale e davanti a Piazza della Scala. La casa si trova a un minuto a piedi dalla metropolitana MM1 Rovereto ed è caratterizzata da una moderna cucina a vista con penisola all\'americana, due sedie trasparenti della Kartell e uno sgabello in metallo Kartell. La penisola è un ottimo angolo su cui lavorare con il pc. Il tavolo separa l\'angolo cucina dalla zona notte che presenta un letto singolo e un divano letto che diventa matrimoniale. Il soggiorno è separato dal bagno da un pratico disimpegno con cabina armadio. Dal disimpegno si arriva al bagno con doccia, bidet e lavatrice. La parte più interessante della casa è un meraviglioso terrazzo piantumato di mq 35 con gazebo coperto, tavolo in legno con sedie e bellissime piante.',
                'rooms'=> '4',
                'beds'=> '3',
                'baths'=> '1',
                'square_meters'=> '150',
                'price'=> '1900',
                'address'=> 'Via Antonio Cechov, 20098 San Giuliano Milanese',
                'latitude'=> '45.38083',
                'longitude'=> '9.30626',
                'cover'=>'null'
            ],

            [
                'title'=> 'Stanza in appartamento a Milano/ Single room metro',
                'user_id'=> '1',
                'description'=> 'Appartamento in zona S.Siro-Certosa a pochi minuti dal parcheggio Lampugnano Flixbus (12 minuti), le fiere di Milano e Rho, la metropolitana Linea Rossa M1 Uruguay (6 minuti), tangenziali autostrade, Stadio di S.Siro. Comodo per raggiungere il centro. Palazzina signorile con portineria. Piano alto, tutto incluso utenze e pulizie.',
                'rooms'=> '5',
                'beds'=> '3',
                'baths'=> '2',
                'square_meters'=> '100',
                'price'=> '1300',
                'address'=> 'Strada Consortile Vecchia Paullese 9, 20048 Pantigliate',
                'latitude'=> '45.42878',
                'longitude'=> '9.36434',
                'cover'=>'null'
            ],

            [
                'title'=> 'La casa nel borgo tra milano/pavia/humanitas/forum',
                'user_id'=> '1',
                'description'=> 'Ampio bilocale, sala con cucina, camera matrimoniale, bagno con vasca idromassaggio locale lavanderia, decoder sky ( serve portare la tessera) , a 15 km da milano , 18 km da Pavia a pochi km dall\'istituto Humanitas, Ieo- istituto dei tumori , dal Forum e metropolitana di Assago, e dalle principali tangenziali ed autostrade.',
                'rooms'=> '2',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '130',
                'price'=> '1200',
                'address'=> 'Via Lambretta, 20054 Segrate',
                'latitude'=> '45.48619',
                'longitude'=> '9.26562',
                'cover'=>'null'
            ],
            
            [
                'title'=> 'Villa Azzurra',
                'user_id'=> '1',
                'description'=> "situato nel quartiere di boccadasse, antico borgo di pescatori, con spiaggia libera e locali, a 4 km dalla stazione pricipale di genova brignole ad 1 km dall'ospedale gaslini

                                Lo spazio
                                la stanza matrimoniale ha il bagno privato ad uso esclusivo della stanza ma esterno, nella struttura è presente una macchinetta automatica per le bevande calde e l'acqua a € 0, 50",
                'rooms'=> '4',
                'beds'=> '3',
                'baths'=> '2',
                'square_meters'=> '90',
                'price'=> '63',
                'address'=> 'Corso Italia, 16145 Genova',
                'latitude'=> '44.39257',
                'longitude'=> '8.96116',
                'cover'=>'null'
            ],

            [
                'title'=> 'Casa Brambilla',
                'user_id'=> '1',
                'description'=> 'L\'appartamento è situato al piano rialzato di un palazzo stile vecchia Milano. Lo spazio è ben distribuito, la cucina ampia e ben fornita. Avrai tutto ciò che ti occorre sia per un breve soggiorno che per una permanenza più lunga.',
                'rooms'=> '5',
                'beds'=> '3',
                'baths'=> '1',
                'square_meters'=> '80',
                'price'=> '56',
                'address'=> 'Via Crema, 20135 Milano',
                'latitude'=> '45.47138',
                'longitude'=> '9.19408',
                'cover'=>'null'
            ],

            [
                'title'=> 'ISOLA COZY HOUSE',
                'user_id'=> '1',
                'description'=> 'In una posizione invidiabile, in una delle zone milanesi fulcro della movida, vicino al Blue Note Milano, Frida, Nord Est Cafè, Casa Ramen e Mulligans.
                                La posizione, l\'ambiente, e l\'atmosfera del quartiere lo rendono particolarmente interessante per giovani e coppie',
                'rooms'=> '10',
                'beds'=> '20',
                'baths'=> '50',
                'square_meters'=> '2000',
                'price'=> '41',
                'address'=> 'Via Antonio Pollaiuolo, 20159 Milano',
                'latitude'=> '45.48909',
                'longitude'=> '9.18752',
                'cover'=>'null'
            ],

            [
                'title'=> 'Brioschi Apartment',
                'user_id'=> '1',
                'description'=> "Molto vicino alla IULM e NABA, a pochi minuti a piedi dagli storici Navigli e dall'università Bocconi. Appartamento molto luminoso in una palazzina storica. Ben collegato con le principali zone di Milano e Duomo. Ampio soggiorno con balcone, una camera da letto matrimoniale e cucina abitabile con secondo balcone. Lavatrice, asciugatrice, WiFi, smart TV",
                'rooms'=> '3',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '60',
                'price'=> '67',
                'address'=> 'Via Francesco Brioschi, 20136, 20141 Milano',
                'latitude'=> '45.4426',
                'longitude'=> '9.18134',
                'cover'=>'null'
            ],

            [
                'title'=> 'Mascagni studio flat',
                'user_id'=> '1',
                'description'=> "Monolocale tranquillo e silenzioso con divano letto, bagno privato con doccia e cucina separata. Posizione centrale a 5 minuti a piedi da Piazza San Babila, ben servita da mezzi pubblici e metro. Ideale per una persona o per una coppia, per vacanza o per lavoro.
                                Lo spazio
                                Il monolocale è situato al 5° piano di un edificio signorile con portineria. Ampio spazio living con divano letto, tavolo da pranzo e un ampio armadio, bagno privato con doccia e cucina separata dalla zona giorno. Gli ospiti avranno accesso ad un appartamento completamente arredato e completo di tutti gli elettrodomestici (lavatrice, lavastoviglie, ferro da stiro...). Ogni ospite avrà lenzuola e asciugamani puliti oltre a shampoo, sapone e detersivi. Qualora si avessero esigenze particolare, non esitate a chiedere!
                                Per qualsiasi altra informazione sono a vostra disposizione!",
                'rooms'=> '1',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '40',
                'price'=> '63',
                'address'=> 'Viale Bianca Maria, 20122, 20129 Milano',
                'latitude'=> '45.46521',
                'longitude'=> '9.20635',
                'cover'=>'null'
            ],

            [
                'title'=> 'Il naviglio di Simone Bilocale con self check-in e wifi veloce',
                'user_id'=> '1',
                'description'=> "Questo grazioso e confortevole bilocale per 3 persone è arredato con cura del dettaglio e pensato per il comfort dei suoi ospiti. Si trova nel cuore della movida milanese, in una tipica corte Lombarda affacciata sul noto quartiere dei Navigli. L'antica stazione di porta Genova con la sua metropolitana è 5 minuti a piedi e il Duomo è raggiungibile con una passeggiata di 20 minuti e qui, tra i suoi mercati, i palazzi storici o visitando una mostra respirerete l'atmosfera unica di Milano.
                                Lo spazio
                                I colori caldi di questo bilocale, lo rendono accogliente e lo studio degli spazi garantisce una buona vivibilità anche per 3 persone. E' composto dalla zona living con una nuova e accessoriata cucina, un tavolo allungabile ed un divano letto molto comodo. La zona notte ha un letto matrimoniale e guardaroba molto capiente, davanti alla camera da letto, trovate il bagno privato con doccia.
                                Nella recente ristrutturazione i proprietari hanno voluto mantenere caratteristiche e finiture originali dell'epoca, rendendolo al contempo funzionale ed accogliente.
                                L'appartamento è dotato di Wifi gratuito , riscaldamento autonomo ed aria condizionata.
                                Accesso per gli ospiti
                                L’appartamento è interamente a disposizione degli ospiti ed è dotato di televisore led 32’’, lavastoviglie, forno a microonde,macchina del caffè, frigorifero, freezer, tostapane, bollitore, asciugacapelli, ferro da stiro, stoviglie, lenzuola, piumini, asciugamani, detersivi e il necessario per la toilette.
                                Non mancano in cucina alimentari base come caffé, té, sale, zucchero, olio e spezie.
                                Gli ospiti possono utilizzare tutte le attrezzature della cucina.
                                Una piantina della città ed altro materiale turistico sono inoltre a disposizione degli ospiti.
                                Non sono presenti posti auto in strada ed il parcheggio non è incluso nel prezzo. Parcheggi sono disponibili in zona, ma considerando la comodità della zona, l'auto in realtà non serve, perchè tutto è raggiungibile con i mezzi.
                                Altre cose da tenere a mente
                                Ingresso tramite comodo e veloce self-check-in: le chiavi sono in una cassaforte e l host è a disposizione telefonicamente durante tutto il soggiorno.
                                L'appartamento si trova al primo piano e non c'è l'ascensore.
                                è inserito in una tipica Corte Lombarda la cui caratteristica è quelle di avere delle accoglienti abitazioni sviluppate in spazi raccolti, costruite intorno ad un cortile che un tempo era dedicato alle attività agricole create per delle piccole comunità che condividevano alcuni servizi situati nell’aia. Chi sceglie questo appartamento deve saperne apprezzare la storia, il suo ambiente rustico e il fatto che si sono dovuti mantenere gli spazi originali per rispettare la sua originalità, quindi non è adatto a persone che cercano spazi molto ampi e le comodità dei condomini moderni. ",
                'rooms'=> '3',
                'beds'=> '2',
                'baths'=> '1',
                'square_meters'=> '55',
                'price'=> '80',
                'address'=> 'Via Mario Fusetti, 20143 Milano',
                'latitude'=> '45.45071',
                'longitude'=> '9.17477',
                'cover'=>'null'
            ],

            [
                'title'=> 'Live the Magic of Isola District from Peacefull Bright Attic',
                'user_id'=> '1',
                'description'=> "Admire Porta Nuova skyline from the South oriented balcony of this wonderful top-floor, piano attic flat. The inviting open-plan living area offers a bright aspect and features a mezzanine sleeping area with a double bed (please note this sleeping area has a 1,40/1,50 meter height). Wooden floorboards and lovely details lend warmth for an unforgettable stay.",
                'rooms'=> '1',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '40',
                'price'=> '102',
                'address'=> 'Via Traù, 20159 Milano',
                'latitude'=> '45.49005',
                'longitude'=> '9.18979',
                'cover'=>'null'
            ],

            [
                'title'=> 'Lussuoso appartamento vicino al Cenacolo Vinciano',
                'user_id'=> '1',
                'description'=> "Informazioni su questo spazio
                                CODICE CIR: 015146-CIM-00246
                                Splendido e Lussuoso appartamento in pieno centro storico, vicinissimo alla stazione Cadorna e a tutte le principali attrazioni di Milano. A piedi potrete raggiungere comodamente il Cenacolo vinciano, il Teatro Alla Scala, Duomo, Triennale, Castello sforzesco, Parco Sempione.
                                Sarete sorpresi dall'atmosfera, lo stile e l'eleganza degli arredi.
                                La casa è adatta a coppie, chi viaggia per lavoro, famiglie e grandi gruppi.
                                Lo spazio
                                Elegante e Lussuoso appartamento con due camere matrimoniali separate e grande soggiorno con divano letto a due passi dalla stazione Cadorna, punto di arrivo del Malpensa Express e centro nevralgico della città grazie alle linee della metropolitana, al passante ferroviario e ai diversi mezzi di superficie come tram e autobus che attraversano Piazzale Cadorna.
                                L'appartamento, arredato e corredato con le diverse tonalità del colore Blu, si apre su un ingresso con un comodo ripostiglio in cui poter lasciare i vostri bagagli e i soprabiti, sulla sinistra troviamo la prima camera matrimoniale con un comodo spazio relax al suo interno e anche un bagno interno. Il bagno principale, completo di tutto ivi compreso un box doccia ampio e di grande eleganza si trova proprio prima dell'ingresso in soggiorno, da cui si ha poi accesso alla cucina ed alla camera da letto principale.
                                La cucina è completa di ogni comodità: piano cottura a induzione, lavastoviglie, lavatrice e asciugatrice, forno elettrico, bollitore etc... sono solo alcune delle comodità presenti. Appena davanti all'ingresso della cucina troverete un ampio e comodo tavolo da pranzo.
                                In soggiorno troviamo un ampio divano letto, una grande parete attrezzata e l'ingresso alla camera da letto padronale, elegantissima con le sue sfumature Blu e diversi giochi di luce che la rendono davvero una camera da mille e una notte.
                                Non potrete non innamorarvi di questo immobile, che, ne siamo sicuri, vi rimarrà nel cuore!
                                Accesso per gli ospiti
                                Avrete accesso autonomamente all'appartamento, Vi sono diversi Garages privati nelle vicinanze.
                                Altre cose da tenere a mente
                                Possiamo offrirvi molti servizi aggiuntivi come il transfer dai principali aeroporti e/o stazioni, la spesa a domicilio o il disbrigo di qualsiasi commissione (acquisto biglietti per teatri o eventi, disbrigo commissioni varie o accompagnamento allo shopping).
                                Su richiesta è possibile richiedere un personal chef che potrà deliziarvi con un menu studiato apposta per voi, cucinato e servito comodamente a casa!",
                'rooms'=> '5',
                'beds'=> '4',
                'baths'=> '1',
                'square_meters'=> '100',
                'price'=> '85',
                'address'=> 'VVia Giovanni Boccaccio, 20123 Milano',
                'latitude'=> '45.46766',
                'longitude'=> '9.17077',
                'cover'=>'null'
            ],

            [
                'title'=> 'Realkasa Senzanome Flat',
                'user_id'=> '1',
                'description'=> 'Il Realkasa Senzanome Flat è un bilocale dotato di tutti i comfort, silenzioso e molto accogliente.',
                'rooms'=> '1',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '35',
                'price'=> '40',
                'address'=> 'Via Gaetano Giardino, 20123 Milano',
                'latitude'=> '45.46272',
                'longitude'=> '9.18895',
                'cover'=>''
            ],

            [
                'title'=> 'elegante e confortevole monolocale',
                'user_id'=> '1',
                'description'=> 'Ampio appartamento completamente arredato e corredato situato all\'ottavo piano di un palazzo con portinaio e ascensore',
                'rooms'=> '1',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '48',
                'price'=> '55',
                'address'=> 'Via Tommaso Grossi, 3, 20121 Milano MI',
                'latitude'=> ' 45.46444',
                'longitude'=> '9.18731',
                'cover'=>''
            ],

            [
                'title'=> 'As living in the sky',
                'user_id'=> '1',
                'description'=> 'ELEGANTE E COMFORTEVOLE MINI MONOLOCALE , COMPLETAMENTE NUOVO, SITUATO IN VIA TRANQUILLA E VICINO A TUTTI I SERVIZI. NEGOZI, SUPERMERCATI, METRO, BUS RAGGIUNGIBILI A PIEDI IN POCHI MINUTI.',
                'rooms'=> '1',
                'beds'=> '2',
                'baths'=> '2',
                'square_meters'=> '60',
                'price'=> '99',
                'address'=> '"Via Orefici, 20123 Milano',
                'latitude'=> ' 45.4656',
                'longitude'=> '9.1881',
                'cover'=>''
            ],

            [
                'title'=> 'Tranquillo appartamento Ripamonti',
                'user_id'=> '1',
                'description'=> 'Tranquillo appartamento in zona Ripamonti perfetto per tre persone. Fermata tram vicino casa',
                'rooms'=> '2',
                'beds'=> '3',
                'baths'=> '2',
                'square_meters'=> '78',
                'price'=> '88',
                'address'=> 'Piazza Castello, 20121 Milano MI',
                'latitude'=> '45.46962',
                'longitude'=> '9.18043',
                'cover'=>''
            ],

            [
                'title'=> 'ELEGANTE E CONFORTEVOLE MINI MONOLOCALE',
                'user_id'=> '1',
                'description'=> 'Ampio appartamento completamente arredato e corredato situato all\'ottavo piano di un palazzo con portinaio e ascensore',
                'rooms'=> '1',
                'beds'=> '1',
                'baths'=> '1',
                'square_meters'=> '48',
                'price'=> '55',
                'address'=> 'Via Tommaso Grossi, 3, 20121 Milano MI',
                'latitude'=> ' 45.46444',
                'longitude'=> '9.18731',
                'cover'=>''
            ],

            [
                'title'=> 'Quiet, Clean, Bright Flat near Convention Center',
                'user_id'=> '1',
                'description'=> 'Very quiet apartment, surrounded by trees and lawns. Perfect place for businessmen and leasure travelers alike. A short walk to the subway and only five stops to the Milan Convention Center in Rho',
                'rooms'=> '1',
                'beds'=> '2',
                'baths'=> '2',
                'square_meters'=> '130',
                'price'=> '150',
                'address'=> 'Via Giovanni Boccaccio 18, 20123 Milano',
                'latitude'=> '45.46779',
                'longitude'=> '9.17181',
                'cover'=>''
            ],

            [
                'title'=> 'Prezioso bilocale Città Studi',
                'user_id'=> '1',
                'description'=> 'Situato nel quartiere di Città studi, il nostro bilocale saprà accogliervi sia per una breve e veloce visita della città sia per motivi di studio o lavoro. A pochi minuti di tram da Corso Buenos Aires, dal Passante e dalla Stazione centrale di Milano',
                'rooms'=> '3',
                'beds'=> '6',
                'baths'=> '3',
                'square_meters'=> '148',
                'price'=> '60',
                'address'=> 'Via Filippo Corridoni, 11, 20122 Milano MI',
                'latitude'=> '45.46348',
                'longitude'=> '9.20143',
                'cover'=>''
            ],

            [
                'title'=> 'VIRGILIO - attico posizione unica!',
                'user_id'=> '1',
                'description'=> 'Situato nel quartiere di Città studi, il nostro bilocale saprà accogliervi sia per una breve e veloce visita della città sia per motivi di studio o lavoro. A pochi minuti di tram da Corso Buenos Aires, dal Passante e dalla Stazione centrale di Milano',
                'rooms'=> '3',
                'beds'=> '4',
                'baths'=> '3',
                'square_meters'=> '160',
                'price'=> '248',
                'address'=> 'Via Francesco Pecorari, 3, 20122 Milano MI',
                'latitude'=> '45.46247',
                'longitude'=> '9.19185',
                'cover'=>''
            ]


        ];

        foreach ($apartments as $apartment) {
        $newApartment = new Apartment();
        $newApartment->user_id = $apartment['user_id'];
        $newApartment->title = $apartment['title'];
        $newApartment->description = $apartment['description'];
        $newApartment->rooms = $apartment['rooms'];
        $newApartment->beds = $apartment['beds'];
        $newApartment->baths = $apartment['baths'];
        $newApartment->square_meters = $apartment['square_meters'];
        $newApartment->price = $apartment['price'];
        $newApartment->address = $apartment['address'];
        $newApartment->latitude = $apartment['latitude'];
        $newApartment->longitude = $apartment['longitude'];
        $newApartment->cover = $apartment['cover'];
        $newApartment->slug = Str::slug($newApartment->title, '-');
        $newApartment->save();
        }    
    }
}
