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
            'image'=>'rtx2080.jpg']
       ]);
    }
}