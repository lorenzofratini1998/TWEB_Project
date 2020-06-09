<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodotto')->insert ([
           ['nome'=> 'CORSAIR Memoria Dimm Vengeance LPX 16GB',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"La memoria Vengeance LPX è progettata per un overclocking ad alte prestazioni. Il dissipatore di calore è realizzato in puro alluminio per una dissipazione del calore più rapida, mentre il PCB ad otto strati ti aiuta a gestire il calore e fornisce un margine di overclocking di livello superiore. Ciascun circuito integrato è selezionato individualmente per un potenziale prestazionale. Il fattore di forma DDR4 è ottimizzato per le schede madri Intel 100 Series di ultima generazione ed offre alte frequenza, una maggiore larghezza di banda ed un consumo energetico maggiormente ridotto rispetto ai moduli DDR3. I moduli DDR4 Vengeance LPX sono testati per la compatibilità sulle schede madri 100 Series per la massima velocità di prestazione ed affidabilità. È presente il supporto XMP 2.0 per un overclocking automatico senza problemi. E sono disponibili in diversi colori per abbinarsi alla scheda madre, ai componenti o semplicemente al tuo stile.",
            'prezzo'=>118.17,
            'percSconto'=>14,
            'sconto'=>1,
            'image'=>'vegeance_lpx.jpg'],
            ['nome'=> 'HYPERX Memoria Dimm Fury Refresh 16 GB',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"HyperX Fury Refresh DDR4 esegue automaticamente l'overclocking alla più alta frequenza pubblicata (fino a 3466MHz, producendo così un sensibile aumento delle prestazioni per gaming, video editing e rendering con il semplice inserimento del modulo (Plug N Play). FURY DDR4 è XMP-ready ed è disponibile in velocità a partire da 2400MHz fino a 3466MHz, con latenze CL15–16 e capacità da 4GB a 16GB, nel caso di moduli singoli, e da 16GB a 64GB, nel caso di kit. È dotata di una funzione di overclocking automatico Plug N Play che porta le velocità fino a 2400MHz e 2666MHz ed è compatibile con le CPU Intel e AMD più recenti. HyperX FURY DDR4 può definirsi cool sia per lo stile che per l'efficacia del dissipatore di calore a basso profilo. Velocità testate al 100% e garanzia a vita contribuiscono a fare di FURY DDR4 la scelta preferibile per efficienza e costo.",
            'prezzo'=>116.19,
            'percSconto'=>27,
            'sconto'=>1,
            'image'=>'fury.jpg'],
            ['nome'=> 'CORSAIR Memoria Dimm VENGEANCE RGB PRO 16 GB ',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"La memoria overclockata VENGEANCE RGB PRO Series DDR4 illumina il tuo PC con un'illuminazione RGB multi-zona ipnotizzante e dinamica, offrendo allo stesso tempo il meglio delle prestazioni DDR4. Il potente software CORSAIR iCUE dà vita al sistema con il controllo dinamico dell'illuminazione RGB, sincronizzato su tutti i prodotti iCUE compatibili, tra cui memoria, ventole, strisce luminose a LED RGB, tastiere, mouse e altro ancora. Personalizza dozzine di profili di illuminazione preimpostati, sperimenta un'enorme varietà di colori regolabili dall'utente e regola la luminosità del LED per adattarla perfettamente al tuo sistema. Ottimizzato per le massime prestazioni sulle ultime schede madri Intel e AMD DDR4. Non richiede cavi o cavi aggiuntivi per un'installazione pulita e senza interruzioni. Fornisce la più alta qualità del segnale per il massimo livello di prestazioni e stabilità. IC accuratamente schermati per un potenziale di overclock esteso.",
            'prezzo'=>120,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'vegeance_rgb.jpg'],
            ['nome'=> 'PATRIOT Memoria Dimm Viper Elite 16 GB ',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"I moduli di memoria Viper Elite di Patriot affilano il tuo lento computer desktop con una velocità eccezionale e una stabilità assoluta. Testati sulle ultime piattaforme Intel e AMD, offrono al tuo PC le risorse di cui ha bisogno per funzionare senza problemi di compatibilità. Il diffusore di calore in alluminio assicura una rapida dissipazione del calore per sostenere le sue eccellenti prestazioni. Le memorie Viper Elite DDR4 sono offerte in kit a doppio canale fino a 3200 MHz. Realizzata utilizzando solo IC di altissima qualità e testati al 100% su piattaforme Intel e AMD di ultima generazione, la memoria VDR Elite di DDR4 garantisce un sistema generale più veloce e reattivo per gestire applicazioni ad alta intensità di memoria.",
            'prezzo'=>79.90,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'viper.jpg'],
            ['nome'=> 'MSI Scheda Madre B450 GAMING',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Soddisfacendo i gamers con ciò di cui hanno realmente bisogno, B450 GAMING PLUS MAX è dotata di Core Boost, Turbo M. 2, DDR4 Boost, Connettore USB 3.2 Gen2. Supporta processori AMD Ryzen™ 1a, 2a e 3a generazione / Ryzen™ con Radeon™ Vega Graphics e AMD Ryzen™ 2a generazione con Radeon™ Graphics Desktop Processors per socket AM4 / Athlon™ con Radeon™ Vega Graphics Desktop Processors per Socket AM4. Supporta memorie DDR4 fino a 4133 (OC) MHz. Esperienza Gaming ultra veloce: TURBO M. 2, StoreMI, AMD Turbo USB 3.1 GEN2. Core Boost: Layout premium e design di potenza digitale con supporto a più core. DDR4 Boost: Aumenta le prestazioni delle memorie DDR4 con A-XMP. Audio Boost: Premia le tue orecchie con la miiglior qualità audio possibile. Tasto Flash BIOS: Basta usare una chiave USB per eseguire il flashing di qualsiasi BIOS in pochi secondi, senza installare CPU, memoria o scheda grafica.",
            'prezzo'=>153.46,
            'percSconto'=>24,
            'sconto'=>1,
            'image'=>'msi_b450.jpg'],
            ['nome'=> 'MSI Scheda Madre MPG X570',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Scheda Madre MPG X570 Gaming Edge. Produttore del processore: AMD, Presa per processore: Plug AM4, Processore compatibile: AMD Ryzen. tipi di memoria compatibili: DDR4-SDRAM, tipo di slot di memoria: DIMM, velocità di memoria supportata: 1866.2133,2400.2666 MHz. Interfacce disco di archiviazione supportate: Serial ATA III. Supporto per processi paralleli: CrossFireX a 2 vie, Risoluzione massima: 4096 x 2160 pixel. Ethernet tipo di interfaccia: Gigabit Ethernet, controller LAN: Realtek RTL8111H, standard Wi-Fi: 802.11a, 802.11b, 802.11g Wi-Fi 4- (802.11n) Wi-Fi 5 (802.11ac).",
            'prezzo'=>221.99,
            'percSconto'=>3,
            'sconto'=>1,
            'image'=>'msi_mpgx570.jpg'],
            ['nome'=> 'GIGABYTE Scheda Madre B450 Aorus Elite',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il chipset B450 è il cuore della scheda madre Gigabyte B450 Aorus Elite ed è stato ottimizzato specificamente per le CPU Ryzen della serie 2000 (Pinnacle Ridge). Le schede madri B450 supportano tutte le funzionalità dei processori Ryzen di seconda generazione, come la nuova funzione di overclock XFR2. Inoltre, le schede madri supportano fino a 64 GB di RAM con un clock rate garantito di 2,667 MHz. Grazie all'overclocking, sono possibili frequenze di clock molto più elevate, a seconda della scheda madre, e il chipset B450 consente anche l'overclocking del processore. Fattore di forma ATX; (30,5 cm x 23,5 cm).",
            'prezzo'=>118.73,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'gigabyte_b450.jpg'],
            ['nome'=> 'ASUS TUF Gaming X570-Plus ',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"TUF Gaming X570-Plus (Wi-Fi) distilla gli elementi essenziali dell'ultima piattaforma AMD e li combina con le caratteristiche pronte per il gioco e la comprovata durata. Progettate con componenti di livello militare, soluzioni di alimentazione potenziate e un set completo di opzioni di raffreddamento, queste schede madri garantiscono prestazioni straordinarie con una stabile stabilità di gioco. La CPU VRM del TUF Gaming X570-Plus (Wi-Fi) utilizza 12 + 2 stadi di potenza Dr. MOS che combinano MOSFET e driver high-side e low-side in un unico pacchetto, offrendo la potenza e l'efficienza degli ultimi processori AMD richiesta. Gli slot Dual PCIe 4.0 M. 2 supportano fino al 22110 e forniscono il supporto RAID SSD NVMe per un incredibile incremento delle prestazioni. Crea una configurazione RAID con un massimo di due dispositivi di archiviazione PCIe 4.0 per goderti le più veloci velocità di trasferimento dati sulla piattaforma di terza generazione AMD Ryzen. Il layout della traccia di memoria OptiMem di ASUS libera tutto il potenziale delle prestazioni dell'architettura Infinity Fabric di AMD consentendo frequenze di memoria più elevate e latenze più basse. TUF Gaming Alliance è una collaborazione tra ASUS e marchi di componenti per PC affidabili per garantire la compatibilità con un'ampia gamma di componenti, come custodie per PC, alimentatori, dissipatori di CPU, kit di memoria e altro. Con più partnership e componenti aggiunti regolarmente, TUF Gaming Alliance continuerà a crescere ancora più forte. Prova i giochi ultra-veloci con l'esclusivo Realtek® L8200A Gigabit Ethernet ASUS. Con miglioramenti delle prestazioni e della stabilità, la LAN è ottimizzata per trasferimenti di dati a bassa latenza ed efficienti in termini di CPU.",
            'prezzo'=>289.99,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'asus_tuf.jpg'],
            ['nome'=> 'AMD Processore AMD Ryzen 5 3600',
            'codCat'=>7,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il processore AMD Ryzen 5 3600 Wraith Spire (3,6 GHz / 4,2 GHz) è uno dei primi processori per PC 7nm compatibile con l'interfaccia PCIe 4.0. La terza generazione Ryzen, con nome in codice Matisse, impressiona con 6 core e 12 thread, una frequenza di base di 3,6 GHz fino a 4,2 GHz e 32 MB di cache L3 e solo 65W di TDP! Viene fornito con il suo sistema di raffreddamento AMD Wraith Stealth ultra-efficiente e silenzioso. Il Ryzen 5 3600 offerto da AMDconsente di scoprire prestazioni di fascia alta per il gioco, la creazione di contenuti e il multitasking intensivo. Con 12 thread e una GameCache da 35 MB, il doppio della cache offerta dalla seconda generazione di Ryzen 5, ti consente di fare tutto in modo più veloce e più fluido.",     
            'prezzo'=>219.98,
            'percSconto'=>13,
            'sconto'=>1,
            'image'=>'amd_ryzen5.jpg'],  
            ['nome'=> 'INTEL Processore Core i5-9400F',
            'codCat'=>7,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"La memoria Intel Optane è una nuova categoria rivoluzionaria di memoria non volatile che risiede tra la memoria del sistema e lo storage per accelerare le prestazioni e i tempi di risposta del sistema. Quando combinata con il driver della tecnologia Intel® Rapid Storage, gestisce direttamente molteplici livelli di storage presentando al sistema operativo una sola unità virtuale e assicura che i dati usati più di frequente si trovino nel livello di storage più veloce. La memoria Intel® Optane™ richiede una specifica configurazione hardware e software. La tecnologia Intel® Turbo Boost aumenta in modo dinamico la frequenza del processore all'occorrenza usufruendo della capacità aggiuntiva di temperatura e alimentazione per fornire accelerazioni e ridurre il consumo energetico all'occorrenza. La Intel® Virtualization Technology (VT-x) consente a un'unica piattaforma hardware di fungere da piattaforme virtuali multiple. Intel® Virtualization Technology for Directed I / O (VT-d) aggiunge all'attuale supporto della virtualizzazione per le piattaforme IA-32 (VT-x) e Itanium® (VT-i) il supporto per la virtualizzazione dei dispositivi di I / O. Intel® VT-x con Extended Page Tables (EPT), anche noto come Second Level Address Translation (SLAT), fornisce l'accelerazione per le applicazioni virtualizzate che richiedono un uso intensivo di memoria. L'architettura Intel® 64 rende disponibile l'elaborazione a 64 bit sulle piattaforme server, workstation, desktop e mobile se abbinata a software di supporto¹. L'architettura Intel 64 offre un aumento delle prestazioni grazie alla possibilità per i sistemi di utilizzare oltre 4 GB di memoria virtuale e fisica.",
            'prezzo'=>119.98,
            'percSconto'=>11,
            'sconto'=>1,
            'image'=>'intel_i5.jpg'],
            ['nome'=> 'INTEL Processore Intel Core i7-9700K',
            'codCat'=>7,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il Core i7-9700K è un processore a 8 core senza Hyper-Threading, con una frequenza base di 3,6 GHz e un Turbo boost massimo di 4,9 GHz su un singolo core. Il Turbo boost con tutti i core attivi si ferma invece a 4,6 GHz. Per il resto il processore offre 12 MB di cache L3, una GPU integrata HD Graphics 630, 16 linee PCI Express 3.0 e ha un TDP di 95 watt. Litografia processore: 14 nm, Memoria interna massima supportata dal processore: 64 GB, Scalabilità: 1S, Descrizione della soluzione termica: PCG 2015D.",
            'prezzo'=>449.99,
            'percSconto'=>11,
            'sconto'=>1,
            'image'=>'intel_i7.jpg'],
            ['nome'=> 'INTEL Processore Intel Core i9-9900K ',
            'codCat'=>7,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Compatibile solo con le schede madri basate su chipset serie 300, il processore Core i9-9900K da 3,6 GHz 8 Core LGA 1151 di Intel è progettato per il gioco, la creazione e la produttività. Ha una velocità di clock di base di 3,6 GHz ed è dotato di funzionalità come supporto Intel Optane Memory, crittografia AES-NI, tecnologia Intel vPro, Intel TXT, Intel Device Protection con Boot Guard, tecnologia di virtualizzazione Intel VT-d per I / O diretto e la tecnologia Intel Hyper-Threading per il multitasking a 16 vie. Con la tecnologia Intel Turbo Boost Max 3.0, la frequenza turbo massima che questo processore può raggiungere è di 5,0 GHz. Inoltre, questo processore dispone di 8 core con 16 thread in un socket LGA 1151, ha 16 MB di memoria cache e 24 linee PCIe. Avere 8 core consente al processore di eseguire più programmi contemporaneamente senza rallentare il sistema, mentre i 16 thread consentono di passare o elaborare una sequenza ordinata di istruzioni ordinata da un singolo core della CPU.",
            'prezzo'=>570.00,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'intel_i9.jpg'],
            ['nome'=> 'ZOTAC GeForce GTX 1660 ',
            'codCat'=>5,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"GeForce GTX 1660 6 GB GDDR5. La nuovissima generazione di schede grafiche ZOTAC GAMING GeForce GTX è qui. Basato sulla nuova architettura NVIDIA Turing, è ricco di memoria veloce GDDR5. Preparati a diventare veloce e il gioco forte. Super compatto. Predisposizione per 4K e VR. Ventole a doppio offset ottimizzate per pressione statica e flusso d'aria. Utilità FireStorm. Colore: Nero.",
            'prezzo'=>323.23,
            'percSconto'=>21,
            'sconto'=>1,
            'image'=>'gtx1050.jpg'],    
            ['nome'=> 'MSI GeForce RTX 2070 Super Gaming X Trio',
            'codCat'=>5,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"GeForce RTX 2070 Super Gaming X TRIO MSI. TRI-FROZR THERMAL DESIGN: utilizzando tre dei pluripremiati Torx Fans 3.0, Tri-Frozr è l'apice del raffreddamento ad aria. TORX FAN 3.0: Design di fan pluripremiato che combina due diversi modelli di pinne per giochi cool e tranquilli. MASTERY OF AERODYNAMICS: utilizzando tecniche aerodinamiche innovative, il dissipatore è ottimizzato per un'efficiente dissipazione del calore. ZERO FROZR: Elimina il rumore della ventola fermando le ventole in situazioni di basso carico in modo da poterti concentrare sul tuo gioco. PCB CUSTOM: un design PCB ottimizzato con una maggiore erogazione di potenza fornisce una solida base per giochi ad alte prestazioni. RGB MYSTIC LIGHT: personalizza i colori e gli effetti LED con l'esclusivo software MSI e sincronizza l'aspetto con altri componenti. MSI AFTERBURNER: il software di overclocking con opzioni di controllo avanzate e monitor hardware in tempo reale.",
            'prezzo'=>679.99,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'gtx1660.jpg'],
            ['nome'=> 'MSI GeForce RTX 2080 Super',
            'codCat'=>5,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"La GeForce RTX 2080 SUPER è alimentata dalla pluripremiata architettura NVIDIA Turing e ha una GPU superveloce con più core e orologi più veloci per liberare la tua produttività creativa e il dominio del gioco. È ora di prepararsi e ottenere superpoteri. Ogni supereroe di gioco ha bisogno di superpoteri. Le nuove schede GeForce RTX SUPER Series ti offrono tutto ciò che ti serve per dominare il tuo gioco. Sono alimentati dall'architettura di Turing e presentano più core e clock più alti. Questo offre prestazioni fino al 25% più veloci rispetto alle serie RTX 20 e 6X originali delle prestazioni delle GPU della serie 10 di precedente generazione. La nuova serie GeForce RTX SUPER ha ancora più core e clock più elevati per prestazioni superveloci rispetto alle GPU di generazione precedente. Preparati e ottieni superpoteri.",
            'prezzo'=>999.99,
            'percSconto'=>10,
            'sconto'=>1,
            'image'=>'rtx2070.jpg'],
            ['nome'=> 'MSI GeForce GTX 1050 Ti',
            'codCat'=>5,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Preparati al gioco con GeForce GTX. Le schede grafiche GeForce GTX sono le più avanzate mai create. Scopri le prestazioni senza precedenti, l'efficienza energetica e le esperienze di gioco di nuova generazione. Pascal è progettato per soddisfare le esigenze degli schermi di nuova generazione, tra cui la risoluzione ultra elevata e più monitor. Presenta le tecnologie NVIDIA GameWorks per un'esperienza di gioco estremamente fluida ed esperienze cinematografiche. Inoltre, include una nuova e rivoluzionaria acquisizione di immagini a 360 gradi. Le schede grafiche alimentate a Pascal offrono prestazioni e efficienza energetica superiori, realizzate utilizzando il FinFET ultraveloce e supportando le funzionalità di DirectX 12 per offrire le esperienze di gioco più veloci, fluide e più efficienti. Frequenza del processore: 1341 MHz. Memoria Grafica Dedicata: 4 GB, Tipo memoria adattatore grafico: GDDR5, Ampiezza dati: 128 bit, Velocità memoria: 7008 MHz. Risoluzione massima: 7680 x 4320 Pixel. Versione DirectX: 12.0, Versione OpenGL: 4.5, Dual Link DVI. Tipo interfaccia: PCI Express x16 3.0. Tipo di raffreddamento: Attivo.",
            'prezzo'=>239.99,
            'percSconto'=>40,
            'sconto'=>1,
            'image'=>'rtx2080.jpg'],
            ['nome'=> 'APPLE AirPods 2',
            'codCat'=>10,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"AirPods con custodia di ricarica. Più magici che mai! I nuovi AirPods reinventano gli auricolari wireless. Appena li togli dalla custodia di ricarica sono già pronti per il tuo iPhone, Apple Watch, iPad o Mac. Per la prima impostazione basta un tap, poi tutto funziona come per magia: si accendono automaticamente e restano sempre connessi, capiscono quando li indossi e vanno in pausa quando li togli. Se vuoi regolare il volume, cambiare canzone, telefonare o anche ricevere indicazioni stradali, di’ “Ehi Siri” e poi chiedi. Puoi indossare entrambi gli AirPods o soltanto uno, e per riprodurre un brano o un podcast o passare a quello successivo, ti basta fare doppio tap. Gli AirPods offrono 5 ore di ascolto e 3 ore di conversazione con una sola carica. E sono fatti per seguirti ovunque: la custodia ti permette di ricaricarli più volte, per un totale di oltre 24 ore di ascolto. Serve una ricarica al volo? 15 minuti nella custodia ti danno 3 ore di ascolto o 2 ore di conversazione. Grazie al nuovissimo chip Apple H1, gli auricolari AirPods sanno quando li indossi, perché i sensori ottici e gli accelerometri di movimento rilevano il contatto con l’orecchio. Il chip H1 attiva automaticamente il microfono e può indirizzare l’audio a entrambi gli auricolari o solo a quello che stai usando. E quando parli al telefono o con Siri, un secondo accelerometro per il riconoscimento vocale si affianca ai microfoni beamforming per escludere i rumori di fondo ed enfatizzare il suono della tua voce.",
            'prezzo'=>179.99,
            'percSconto'=>28,
            'sconto'=>1,
            'image'=>'airpods2.jpg'],
             ['nome'=> 'APPLE AirPods Pro',
            'codCat'=>10,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Con gli AirPods Pro puoi immergerti nell’ascolto grazie alla cancellazione attiva del rumore, ma puoi anche sentire quello che succede intorno a te con la modalità Trasparenza. Scegli la taglia di cuscinetti che fa per te, e indossali comodamente tutto il giorno. Proprio come gli AirPods, anche gli AirPods Pro si collegano in un lampo al tuo iPhone o Apple Watch: li togli dalla custodia e sono già pronti. Pur essendo leggerissimi, gli AirPods Pro ti isolano dall’ambiente, per un ascolto senza distrazioni. Merito della cancellazione attiva del rumore, una tecnologia capace di adattarsi continuamente alla forma interna dell’orecchio e alla posizione del cuscinetto. In questo modo il mondo esterno scompare e ti concentri al meglio su musica, podcast e chiamate. I cuscinetti ti assicurano un comfort su misura, con tre diverse taglie fra cui scegliere e un design interno affusolato: adattandosi alla forma dell’orecchio, tengono ben saldi gli AirPods Pro e isolano il suono così bene da garantire una cancellazione del rumore estremamente efficace.",
            'prezzo'=>279.99,
            'percSconto'=>18,
            'sconto'=>1,
            'image'=>'airpodspro.jpg'],
             ['nome'=> 'GEMINI DJ Controller CDM-4000',
            'codCat'=>9,
            'descCorta'=>'descrizione breve',
            'desclunga'=>"CDM-4000 USB di Gemini / CD Media Console è uno strumento potente e conveniente, lettore multimediale con 2 mixer canali Compatibile con CD audio, CD-R e MP3 ingresso USB per dispositivi di archiviazione USB Ampio display LCD retroilluminato blu controllo midollo variabile con 3 Impostazioni: 4, 8 e 16% 2 grandi touch-sensitive jog ruote con tre modalità selezionabili: Ricerca effetto scratch / cue / pitch bend 1 loop senza soluzione di continuità per lato con reloop Anti-shock con buffer di memoria RAM immediata start & cue con anteprima Fader Start capacità singola e continua modalità di gioco Pitch bend tramite jog wheel e pulsanti: il 16% di tempo di 3 modalità di selezione della cornice accurata ricerca Completamente programmabile con funzione di ripetizione 2-band EQ con controllo del guadagno quarto uscita per cuffie XLR e 1/4 di ingresso microfono ingressi Aux per i dispositivi Phono o Line.",
            'prezzo'=>301.41,
            'percSconto'=>17,
            'sconto'=>1,
            'image'=>'gemini_1.jpg'],
             ['nome'=> 'PIONEER XDJ-1000MK2',
            'codCat'=>9,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Pioneer XDJ-1000MK2. Connettore USB: USB Type-A, USB Type-B. Tipo alimentazione: AC. Tipo di display: LCD. Larghezza: 305 mm, Profondità: 382,5 mm, Altezza: 110 mm. Cavi inclusi: AC, Audio (3.5mm) , LAN (RJ-45)",
            'prezzo'=>1325.00,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'pioneer_xdj.jpg'],
            ['nome'=> 'PIONEER Console Dj DDJ-RB / SXJ Rekorbox',
            'codCat'=>9,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il modello DDJ-RB prende spunto dai controller Pioneer pro-DJ per rekordbox dj, il DDJ-RZ e il DDJ-RX. Questo controller a 2 canali alimentato via USB è tutto quello che serve per iniziare a utilizzare il nostro software per le performance rekordbox dj. Perfetto da utilizzare in viaggio, il DDJ-RB è un controller compatto e leggero ricco di funzioni avanzate. E' dotato di un layout intuitivo, jog wheel sensibili e Performance Pad tattili per avviare Hot Cue, Pad FX, Slicer e Sampler, oltre a un pulsante per richiamare le sequenze di sample direttamente dall'apparecchiatura. Per godere della massima flessibilità, puoi scegliere di ascoltare il mix attraverso i diffusori interni del computer, diffusori da tavolo collegati o, ancora, di riprodurre con un diffusore wireless. Nel contempo, puoi utilizzare le cuffie per cue indipendenti dall'uscita Master.",
            'prezzo'=>890.00,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'pioneer_ddj-rb.jpg'],
            ['nome'=> 'CORSAIR Cuffie Gaming HS50',
            'codCat'=>8,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"La cuffia gaming con microfono CORSAIR HS50 PRO STEREO offre comfort e qualità grazie ai padiglioni auricolari in memory foam, ai driver audio personalizzati in neodimio da 50 mm e al microfono unidirezionale rimovibile con cancellazione del rumore. I padiglioni regolabili in morbida memory foam offrono un comfort eccezionale, che ti consentirà di giocare per ore. Grazie ai driver audio personalizzati in neodimio da 50 mm e di alta qualità potrai sfruttare una nitidezza audio eccezionale, che ti consentirà di ascoltare qualsiasi suono sul campo di battaglia. Il microfono unidirezionale completamente rimovibile riduce i rumori ambientali per farti sentire in modo cristallino: è dotato di certificazione Discord che garantisce una comunicazione nitidissima e un audio eccezionale. Gioca su PC, PS4, Xbox One, Switch e dispositivi mobili mediante un connettore universale da 3,5 mm.",
            'prezzo'=>74.30,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'hs50.jpg'],
            ['nome'=> 'JBL Cuffie Supra-Aurali Bluetooth TUNE500BT',
            'codCat'=>8,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Le cuffie JBL TUNE500BT trasmettono, via Bluetooth, un suono potente fino a 16 ore di puro piacere. Semplici da usare, dotate di driver JBL da 32 mm e suono JBL Pure Bass, queste cuffie offrono un suono eccezionale. E se arriva una chiamata mentre stai guardando un video su un altro dispositivo, JBL TUNE500BT la passa senza interruzioni al tuo cellulare. Le cuffie JBL TUNE500BT consentono anche di connettersi a Siri o Google Now senza utilizzare il dispositivo mobile. Pieghevoli per una facile trasportabilità, le cuffie JBL TUNE500BT sono una soluzione prendi e vai che ti consente di acoltare la tua musica preferita in ogni momento della tua vita frenetica. Driver dinamico da 32 mm. Risposta in frequenza 20Hz - 20kHz. Potenza del trasmettitore Bluetooth <4 dBm. Modulatore trasmettitore Bluetooth GSFK, p / 4 DQPSK, 8DPSK. Frequenza Bluetooth 2,402 - 2,480 GHz. Profilo Bluetooth BT 4.1, A2DP v1.2, AVRCP v1.5, HFP v1.6, HSP v1.2. Tipo di batteria Polimero agli ioni di litio (3,7 V, 300 mAH). Tempo di ricarica 2 ore. Tempo di riproduzione musicale con BT 16 ore. Peso 155 g. Contenuto della confezione: Cuffie TUNE500BT, Cavo di ricarica.",
            'prezzo'=>49.98,
            'percSconto'=>20,
            'sconto'=>1,
            'image'=>'tune500BT.jpg'],
            ['nome'=> 'LOGITECH Cuffie Gaming G332',
            'codCat'=>8,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Le cuffie con microfono per gaming Logitech G332 producono un suono eccezionale per farti entrare nel gioco. Prova il brivido di un'esperienza di gioco completa in cui riesci a sentire tutto e tutti ti sentono. I grandi driver audio da 50 mm producono un suono completo ed espansivo per un'esperienza di gioco più coinvolgente. Potrai ascoltare l'audio dei tuoi giochi nel modo in cui merita essere ascoltato: impressionante. grandi driver audio da 50 mm producono un suono completo ed espansivo per un'esperienza di gioco più coinvolgente. Potrai ascoltare l'audio dei tuoi giochi nel modo in cui merita essere ascoltato: impressionante. La cuffia funziona con il tuo PC o Mac o con le console di gioco quali PlayStation 4™, Xbox One™, Nintendo Switch™ e i dispositivi mobili tramite un cavo da 3,5 mm.",
            'prezzo'=>59.99,
            'percSconto'=>27,
            'sconto'=>1,
            'image'=>'g332.jpg'],
            ['nome'=> 'HUAWEI FreeBuds Auricolari Bluetooth',
            'codCat'=>8,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Huawei freebuds auricolari senza fili in-ear. Suono di alta qualità grazie alla tecnologia aac e ai 4 microfoni. Controllo touch delle chiamate/musica direttamente sugli auricolari. Autonomia 3 ore / fino a 10 ore con la scatola di ricarica.",
            'prezzo'=>131.00,
            'percSconto'=>24,
            'sconto'=>1,
            'image'=>'freebuds.jpg'],
            ['nome'=> 'PHILIPS Registratore tascabile',
            'codCat'=>11,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il registratore tascabile Memo 388 è dotato delle seguenti funzioni: attivazione vocale per registrazioni a mani libere, turbo wind per trovare velocemente il punto della registrazione che serve, autoricarica per caricare le batterie in fase di registrazione, segnale fine nastro.",
            'prezzo'=>464.89,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'philips_388.jpg'],
             ['nome'=> 'PHILIPS Registratore vocale digitale DVT1000',
            'codCat'=>11,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il dispositivo Voice Tracer 1000 è un registratore vocale perfetto per acquisire note, idee e pensieri ovunque. Grazie a 2 microfoni per la registrazione stereo, potrai acquisire la migliore qualità stereo. Con 2 GB di memoria incorporata, il dispositivo Voice Tracer può acquisire fino a 22 giorni di registrazione continua. Capacità di registrazione virtualmente illimitata grazie alla scheda di memoria micro SD che supporta fino a un massimo di 32 GB di memoria aggiuntiva. Display a matrice di punti ad alta risoluzione incorporato nel Voice Tracer con supporto di 8 lingue e informazioni chiare sullo stato della registrazione.",
            'prezzo'=>118.08,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'philips_dvt1000.jpg'],
            ['nome'=> 'NEW MAJESTIC Micro Registratore vocale',
            'codCat'=>11,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"New Majestic Micro Registratore vocale, Memoria flash integrata 4GB, Display LCD, Altoparlante integrato, Funzione pausa automatica nei momenti di silenzio (VOX) . Tempo di registrazione massimo: 280 h, Modalità registrazione: Fine Quality (FQ) , High Quality (HQ) , Low Quality (LQ) , Standard Play (SP) , Formati audio supportati: WAV. Tipo di display: LCD. Interfaccia: USB, Connettore USB: Mini-B. Dimensioni della batteria compatibile: AAA, Voltaggio della batteria: 1,5 V. Formati supportati: Flash card, Tipi schede di memoria: MicroSD (TransFlash) , Capacità memoria integrata: 4 GB",
            'prezzo'=>49.89,
            'percSconto'=>8,
            'sconto'=>1,
            'image'=>'newmajestic.jpg'],
            ['nome'=> 'Monodeal Registratore Vocale Monodeal Portatile 8gb',
            'codCat'=>11,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il registratore vocale e lettore mp3 portatile è ideale per conferenze, corsi, e la conversazione telefonica, ecc, con un design compatto e pulsante di interfaccia user-friendly (24 lingue disponibili). il registratore vocale portatile monodeal è un buon compagno per importanti incontri di lavoro, telefonate, conferenze e dettatura personale, ecc essa aiuta a registrare tutti i momenti importanti. Il built-in 8 gb di memoria flash supporta fino a 20 ore per il record. Raccoglie tutti i suoni in modo molto chiaro con 4 modalità di registrazione e microfono omnidirezionale. monodeal portatile dittafono supporta la registrazione wav e modalità eq con lunghi riproduzione in tempo di audio o musica mp3. Supporta mp3, wma, mp1, mp2 e il formato audio. Riproduzione la registrazione / musica tramite l'altoparlante ad alta potenza, o collegare le cuffie per l'ascolto privato. si tratta di un dispositivo multifunzionale con funzione a-b di ripetizione, funzione mp3, memoria usb flash disk, cov e funzione vor, e la funzione elimina. una porta usb integrata rende più semplice e veloce per trasferire i file registrati su un computer. design pulsante compatto lo rende facile controllare il pannello. 24 lingue disponibili nell'interfaccia utente offrono molto comodo da usare per consumatori di diversi paesi. specifiche tecniche: memoria: 8 gb con display lcd altoparlante incorporato funzione di riproduzione di musica indicazione di registrazione funzione di controllo sana disponibile built-in batteria al litio, ricaricabile connessione usb per upload e download temperatura di funzionamento: 0 ~ 40 ° c dimensioni: 8.4 * 3.3 * 1.3cm.",
            'prezzo'=>60.70,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'monodeal.jpg'],
            
             ['nome'=> 'ANON Kit Fotocamera EOS 2000D Kit + Obiettivo EF-S 18-55 IS',
            'codCat'=>12,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Tipo di prodotto: reflex digitale | Colore: nero | Dimensioni schermo: 7,6 cm (3,0 ) | Touch screen: No | Risoluzione sensore: 24,1 megapixel | Zoom ottico / digitale: 3 / -. Scatta splendide foto e filmati con lo sfondo sfocato, Semplifica la connessione, scatta e condividi in movimento. Esprimi la tua creatività con una guida facile da seguire. Esplora la potenza della DSLR e degli obiettivi intercambiabili. Scatta con velocità e sicurezza in situazioni difficili Fai il primo passo nella DSLR la fotografia e inizia a raccontare le tue storie con lo zoom compatto EOS 2000D e EF-S 18-55 mm IS II. Questa fotocamera intuitiva e intuitiva è adatta ai principianti.",
            'prezzo'=>498.99,
            'percSconto'=>32,
            'sconto'=>1,
            'image'=>'canon_2000d.jpg'],
             ['nome'=> 'CANON EOS 80D',
            'codCat'=>12,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Una fotocamera potente, versatile e reattiva per esprimere la tua creatività. EOS 80D è perfetta per la fotografia sportiva, di ritratti, paesaggistica, urbana e di viaggio, ma è anche adatta per realizzare filmati grazie a tecnologie innovative che ti consentono di ottenere risultati incredibili in qualsiasi situazione. Non perdere nemmeno un istante grazie alla velocità massima di scatto continuo pari a 7 fps a piena risoluzione, ideale per immortalare scene naturalistiche e azioni sportive davvero spontanee. Grazie ai 27 punti AF che supportano la messa a fuoco f / 8, il sistema AF assicura immagini sempre nitide anche con diverse combinazioni di obiettivi e moltiplicatori.",
            'prezzo'=>1500.75,
            'percSconto'=>21,
            'sconto'=>1,
            'image'=>'canon_80d.jpg'],
            ['nome'=> 'NIKON D750 Nero',
            'codCat'=>12,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Liberate la vostra visione con la veloce, versatile e agile D750. Il nuovo sensore in formato FX da 24,3 Mpx offre un'ampia gamma dinamica abbinata a riprese ben definite con ogni valore di sensibilità per regalare foto di sorprendente nitidezza e ricchezza di tonalità. L'intervallo di sensibilità ISO 100-12800 è estendibile fino a 50-51200 (equivalente) . Il solido monitor si inclina aumentando l'angolatura fino a 90° e riducendola a 75°. Riprendete foto e filmati da prospettive insolite. Wi-Fi incorporato, Velocità di scatto in sequenza fino a 6,5 fps. Il processore Expeed 4 Ottimizza le prestazioni complessive della fotocamera per ottenere risultati straordinari. Include il corpo macchina della D750, nonché il maneggevole e potente obiettivo AF-S NIKKOR 24–120mm f / 4G ED VR. Grazie all'ampio intervallo da grandangolo a teleobiettivo e un'apertura costante f / 4, questo versatile obiettivo garantisce foto e video incredibili con qualsiasi lunghezza focale.",
            'prezzo'=>2490.78,
            'percSconto'=>36,
            'sconto'=>1,
            'image'=>'nikon_d750.jpg'],
       ]);
    }
}
