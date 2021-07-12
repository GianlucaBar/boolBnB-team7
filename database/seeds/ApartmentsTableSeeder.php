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
