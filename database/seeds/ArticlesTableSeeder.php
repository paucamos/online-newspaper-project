<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => "Les llàgrimes que ho paralitzen tot",
            'description' => "Els gironins van sorprendre el conjunt anglès amb la pressió inicial i el van liquidar en un contraatac executat per Kevin Soni quan més patien",
            'body' => "Si les victòries en pretemporada són relatives, quan estan acompanyades per jugades tan preocupants i esgarrifoses com la que es va viure ahir al Pride Park de Derby, perden tot l’interès. El Girona va aconseguir el tercer triomf en tres partits però cap dels seus integrants recordarà el resultat sinó les llàgrimes de Valery Fernández. El jove futbolista de l’Escala va sortir plorant, conscient que s’havia fet molt mal al genoll esquerre. Sembla que la lesió és molt seriosa.

            Amb valentia

            Per al Derby County, era l’estrena de Phillip Cocu a la banqueta de Pride Park, el penúltim partit de preparació, l’únic que havien programat al seu estadi, i a onze dies de començar la Championship. Un grapat d’elements que, teòricament, apujaven el grau d’exigència per a un Girona encara experimental i, una altra vegada, carregat de jugadors joves, majoria clara en l’onze inicial. La posada en escena dels gironins, però, va ser seriosa i compacta. La voluntat de Cocu de jugar des del darrere, amb participació del porter inclosa, va provocar una mena d’admiració a la graderia, però també un bon exercici de pressió alta del Girona, que va robar diverses pilotes, una de les consignes en què insisteix el seu tècnic. Unzué va recuperar el 4-3-3, amb Granell de pivot, Jofre i Boselli d’interiors, i Soni, Andzouana i Choco Lozano de trio ofensiu.

            La primera ocasió clara va ser a l’àrea de Juan Carlos, que va desviar amb el peu un xut de Shinnie (4’). Els gironins, però, van començar a inquietar la porteria local a partir de pilotes recuperades. Boselli la va robar molt lluny i va buscar Andzouana, amb una jugada que va acabar amb xut desviat de Granell (9’). El capità ja ho havia provat un cop. I a la tercera, va tenir premi. Amb la col·laboració d’un rival, que li va desviar el xut des de fora l’àrea, Àlex Granell va situar el 0-1 en el marcador (10’). El Girona se sentia segur i valent. Sabia fer circular amb tranquil·litat la pilota i trobava l’activitat de joves com Soni, Boselli i Andzouana. També amb un grapat de joves a l’alineació, els rams (marrans) no acabaven de trobar el seu lloc. La segona arrencada seguida d’Andzouana va acabar amb un xut de Jofre aturat per Mitchell (23’). Un córner (molt celebrat) després d’una pèrdua innocent de Soni va animar una mica el conjunt local, que va tenir molt a prop l’empat en una combinació que havia enxampat la defensa gironina però que Whittaker no va saber resoldre (26’). Va ser una fase de més descontrol del Girona, tot i que els locals només van tenir una rematada, alta, de Dowell.

            El rival accelera

            A diferència dels dos partits anteriors, Unzué només va fer dos canvis després de la represa, amb l’entrada de Porro i Pachón per Maxi Villa i Lozano. El dibuix no es va alterar. La segona meitat va començar amb una falta directa executada per Chris Martin que Juan Carlos va rebutjar. El porter també es va haver d’estirar per desviar una centrada xut d’Anya (51’). El pas endavant dels rams va provocar problemes als gironins, que perdien la pilota amb rapidesa. El Derby County començava a merèixer el gol. Els d’Unzué eren incapaços de superar la pressió, i el domini local s’anava intensificant. Curiosament, però, el Girona va treure verí en la primera arribada que va generar. Va ser en una jugada ràpida de contraatac, en què Soni va quedar habilitat i va definir molt bé, amb un xut de sobrebot (60’). Tot va quedar en no res amb la lesió de Valery Fernández, que va quedar estès a la gespa i va marxar plorant, amb llitera i ovacionat pels espectadors.

            La lesió va deixar paralitzat el Girona. El Derby County, després d’un altre reguitzell de canvis, va tornar a insistir, però li va faltar l’encert que va tenir el Girona en una jugada puntual. Tot i que per celebrar, res de res.",
            'photo' => "gironafc.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 1,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "El port d’Empúries es deixa veure",
            'description' => "Les excavacions del 73è Curs d’Arqueologia posen al descobert la façana portuària de la ciutat grega",
            'body' => "Les excavacions del 73è Curs d’Arqueologia d’Empúries han tornat a donar els seus fruits i han posat al descobert la façana portuària de la ciutat grega. Els treballs d’excavació, que han durat tres setmanes i en els quals han pogut participar els vint-i-set alumnes del curs d’enguany, han tret a la llum la part superior del penya-segat que marcava el límit d’aquesta zona amb la fondalada de l’antic port i han permès de documentar construccions i nivells que pertanyen a la primera ocupació del nucli en la segona meitat del segle VI aC i també altres edificis d’època hel·lenística i romana.

            Els arqueòlegs, que treballen a l’extrem nord del nucli grec de la neàpolis, han posat al descobert diferents nivells i construccions que remeten a la primera etapa d’ocupació, durant la segona meitat del segle VI aC, a la vegada que s’han documentat altres edificacions que pertanyen a períodes més recents de la ciutat. L’excavació d’algunes tombes ha permès igualment de completar el coneixement de la reocupació d’aquest sector com a espai funerari durant l’època tardoromana, segles més tard de l’abandonament del nucli urbà.

            Paral·lelament, davant aquest mateix barri portuari han començat a rebaixar parcialment les sorres que avui omplen l’antiga fondalada del port, fet que ha fet possible de recuperar visualment el promontori rocós que, en alguns punts, formava un petit penya-segat obert a la mar. Es tracta d’una important actuació que continuarà en futures campanyes amb l’objectiu de deixar al descobert aquesta façana portuària de la ciutat i conèixer la morfologia de l’antic paisatge litoral.

            A més dels treballs d’excavació, els alumnes del curs d’arqueologia han pogut assistir a diverses conferències, participar en sessions pràctiques de prospecció geofísica i col·laborar en la realització de sondatges geològics previstos en el projecte per a la reconstrucció de l’evolució del paleoambient.

            El Museu d’Arqueologia d’Empúries , a més de ser visitable, ha programat aquests dies l’exposició temporal Bacus, les màscares del déu, que es mantindrà oberta fins al 15 de setembre.",
            'photo' => "empuries.jpg",
            'user_id' => 2,
            'is_published' => 1,
            'featured' => 2,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => 'La delegada a Berlín porta l’espionatge del ministeri a la fiscalia alemanya',
            'description' => "Marie Kapretz presenta denúncia penal i sospita dels serveis secrets estatals",
            'body' => 'La delegada de la Generalitat a Berlín, Marie Kapretz, ha presentat una denúncia penal davant la fiscalia alemanya per haver estat víctima d’un presumpte delicte d’espionatge per part de “col·laboradors desconeguts d’autoritats de seguretat espanyoles en relació amb les activitats del govern de Catalunya a Alemanya”. És a dir, per haver estat víctima del Borrellgate que el govern denuncia que va afectar, a més de la de Berlín, les delegacions de Londres i Ginebra, si bé aquesta és la primera denúncia penal que es posa. Això sí, a títol personal. “Interposo una denúncia a la Fiscalia General Federal d’Alemanya pel seguiment que em va fer (i possiblement segueix fent) el Ministeri d’Interior. Hi veig una infracció de l’article 99 del Codi Penal alemany i contra les meves llibertats personals”, anunciava ella mateixa ahir al migdia a Twitter.
                        Kapretz sosté en el text que la “sospita” que ha estat espiada pels serveis secrets de l’Estat la va aixecar el mateix govern espanyol, quan el 26 de juny va demanar al TSJC el tancament cautelar d’aquestes tres delegacions –denegat aquesta setmana–, tot justificant-ho en un informe que, com a annex, adjunta un dossier de la secretaria d’estat de Seguretat enviat a l’ambaixada alemanya amb diversa informació sobre les activitats de Kapretz, com ara la seva participació en conferències de premsa, esdeveniments, entrevistes i reunions amb tercers. La delegada admet que “bona part de la informació” pot provenir de fonts públiques com Facebook o Twitter, però denuncia que “també conté informació resultant del seguiment del trànsit de correu electrònic i/o d’una font humana present a cada esdeveniment”, ja que en diversos casos fins i tot s’adjunten fotografies d’ella.
                        A més, Kapretz denuncia que també la van seguir en la seva activitat privada com a ciutadana, durant el període en què no ocupava el càrrec –entre el novembre del 2017 i el juliol del 2018– perquè l’havien fet cessar, i la delegació havia estat clausurada, arran de l’aplicació del 155, fet que denotaria que el govern del PP volia assegurar-se que l’anul·lació de l’activitat fos realment efectiva. Així per exemple, l’annex inclou referències a un esdeveniment a Berlín al qual Kapretz va assistir el gener del 2018, en què ni tan sols participava, i la seva presència en la conferència de premsa que el president Carles Puigdemont va fer aquell 7 d’abril en sortir de la presó de Neumünster, o en una manifestació al juliol a Potsdamer Platz, abans que, al setembre, es fes del tot efectiva la seva restitució en el càrrec. L’informe fa referència també a altres activitats en què va participar després, entre el setembre i el març passat, per la qual cosa Kapretz manté la “sospita inicial” que el seguiment “continua tenint lloc”.',
            'photo' => "mariekapretz.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 1,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Jordi Masmartí surt escollit president d’ERC a Figueres",
            'description' => "Encapçalarà una àmplia i renovada executiva formada per quinze persones.",
            'body' => 'L’assemblea local d’ERC ha decidit que sigui Jordi Masmartí i Recasens (Figueres, 1974) el nou president de la secció local en substitució de Lluís Valero, que l’ha encapçalat en el darrer mandat.
                        A banda de Masmartí, la nova executiva d’ERC Figueres està formada per Guillem Massallé (secretaria d’organització); Gregori Peral (secretaria de finances); Angi Afonso (secretaria de la dona); Toni Soler (secretaria de política municipal); Agnès Figueres (secretaria d’imatge i comunicació); Montse Roig (secretaria d’entorn); Joan Carné (secretaria de nova ciutadania); Montserrat Segura (secretaria de formació); Xavier Besora (secretaria d’activitats); Ferran Quintana (secretaria de campanyes), Nàdia Fernàndez i Jordi Torrent (vocals). Arnau Deu hi és en representació del Jovent Republicà i Josep Alegrí, com a representació del grup municipal.',
            'photo' => "erc_figueres.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Detinguts sis activistes per desordres varis els últims mesos",
            'description' => "Els acusen de fins a nou delictes en protestes independentistes",
            'body' => 'Almenys sis activistes dels CDR i de col·lectius de l’esquerra alternativa com Arran i el Sindicat d’Estudiants dels Països Catalans, tres d’ells menors, van ser detinguts a casa o citats a comissaria al llarg del dia d’ahir pels Mossos, per la presumpta implicació en aldarulls públics els últims mesos, com els que hi va haver arran del Consell de Ministres del desembre a Barcelona, la vaga general del 21 de febrer contra l’inici del judici al procés (se’ls acusa d’asseure’s a les vies) o una protesta a l’abril contra un acte de Vox. Segons l’advocat Xavier Monge, els acusen de fins a nou delictes “que es barregen de forma matussera”, per englobar-los en una “suposada organització criminal”. Segons ell, la detenció “és inversemblant” i només pot respondre a “una lògica repressiva” per desincentivar des del govern les protestes a la imminent sentència, fet que veu “del tot incomprensible”. “És inexplicable; com a màxim són actes de desobediència pacífica”, ressaltava a les portes de la comissaria de les Corts, on van declarar, i davant la qual es van concentrar un centenar de persones des del migdia. Els tres majors d’edat seguien anit reclosos, i per aquest matí s’han tornat a convocar protestes.',
            'photo' => "activistes.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 2,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Malcom a punt de marxar del Barça",
            'description' => "El Barça i el Zenit de Sant Petersburg tanquen un acord que porta el brasiler a Rússia per 40 milions d’euros més cinc en variables",
            'body' => 'El brasiler Malcom Oliveira ja és història en el Barça. El club blaugrana va arribar ahir a un acord molt satisfactori amb el Zenit de Sant Petersburg que portarà el brasiler a Rússia per 40 milions d’euros més cinc en variables. Malcom, que va arribar al Camp Nou tot just fa un any des del Girondins de Bordeus per 41 milions d’euros, signarà un contracte per cinc temporades amb el Zenit, que li pagarà sis milions d’euros nets per temporada. El jugador encara es va entrenar ahir a la Ciutat Esportiva Joan Gamper a les ordres d’Ernesto Valverde mentre els dos clubs i els seus representants miraven de tancar l’operació, però ja es va acomiadar de la majoria dels seus companys conscient que avui ja no formaria part de la primera plantilla del Barça.
                        Malcom, que volia marxar del Barça en cerca de més minuts, va tenir molt poca presència en l’equip d’Ernesto Valverde la temporada passada. Només va participar en 24 partits i va fer quatre gols. Important va ser el que va fer contra el Real Madrid en les semifinals de copa. El brasiler va ser una aposta del secretari tècnic, Éric Abidal. El Barça, en una operació llampec, es va anticipar a la Roma, que esperava el jugador a l’aeroport per ser presentat, però el davanter no ha acabat d’adaptar-se al joc blaugrana. De fet, el club català no es reserva ni una opció de compra ni un tempteig, tot i que sí un tant per cent d’una futura venda. Ha decidit desprendre’s definitivament de Malcom només un any després de la seva arribada perquè no veu gaire futur en el brasiler.',
            'photo' => "malcom.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 1,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "El Barça pendent de Junior Firpo",
            'description' => "Després d’un nou ingrés, el club blaugrana accelerarà l’arribada del lateral esquerre que demana Valverde i Junior Firpo és la prioritat",
            'body' => 'Els diners que el Barça ingressarà per Malcom haurien d’accelerar l’arribada del lateral esquerre que el tècnic ha demanat perquè pugui competir amb Jordi Alba. La plaça té nom. L’escollit és el jugador del Betis Junior Firpo, un futbolista molt ofensiu que acaba de guanyar el campionat d’Europa sub-21 amb la selecció espanyola. El club sevillà dona per perdut el seu jugador, però exigeix 25 milions d’euros. El Barça no volia pagar més de 20 milions, però després d’ingressar una bona suma per Malcom podria arribar a les exigències del Betis amb una sèrie de variables. Les negociacions es poden accelerar en els propers dies. Tant la secretaria tècnica del Barça com l’àrea econòmica voldrien que el jugador participés ja en la gira que farà l’equip blaugrana la setmana vinent pels Estats Units i en la qual jugarà dos partits contra el Napoli, un a Miami i un segon a Michigan.
                        Els dos equips, Betis i Barça, podrien negociar per més jugadors aprofitant les converses per Junior Firpo. Agraden al club andalús dos futbolistes del planter blaugrana: Juan Miranda i Abel Ruiz. El primer, lateral esquerre, arribaria al Betis per cobrir la baixa de Junior Firpo. El jugador, que va arribar a la Masia procedent del planter del Betis, està encantat amb la idea de tornar a casa després que Valverde no tingui confiança en ell, però té més ofertes després d’haver fet un bon Europeu sub-19. Pel que fa a Abel Ruiz, també campió d’Europa sub-19 amb la selecció espanyola, ni el Barça vol desfer-se ara per ara d’ell ni el davanter vol marxar.',
            'photo' => "junior.jpeg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 2,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Per agafar embranzida",
            'description' => "Amb l’eliminatòria solucionada, el conjunt blanc-i-blau vol tornar a agafar moral amb una victòria en un partit oficial amb vistes a la propera eliminatòria de classificació",
            'body' => 'Tothom té més o menys coll avall que l’Espanyol passarà a la propera ronda de classificació a la fase de grups de l’Europa League. L’equip Gallego s’ho va guanyar gràcies a una fantàstica segona meitat contra l’Stjarnan islandès a l’RCDE Stadium que li va donar un resultat de 4-0 per al partit de tornada. L’equip públicament està alerta i no vol vendre la pell de l’os abans d’hora, com és lògic, però l’enfrontament pot resultar més pràctic del tràmit que pot semblar.

                        D’entrada els condicionants no ajuden gens ni mica. Després de menys d’un mes d’haver començat els entrenaments, un viatge en avió cap a Islàndia no és el que necessita el cos per recuperar la fatiga de les sessions. Tampoc que a Stjörnuvöllur, l’estadi local, la gespa sigui artificial. Però el conjunt periquito té molts motius per anar a pel partit. La moral que va donar el 4-0 en el xoc d’anada i, molt especialment, la connexió en la davantera entre Borja Iglesias i Facundo Ferreyra pot ser necessària per començar amb bon peu la temporada i sobretot amb vistes per a la següent eliminatòria que es disputarà la setmana que ve. El Luzern suïs i el KI de les Illes Fèroe seran el segon dels tres passos que l’Espanyol ha de donar per accedir a la fase de grups. Els suïssos porten un avantatge respecte el partit d’anada (1-0).

                        Rodatge

                        De portes enfora, l’Espanyol no vol cap mena de confiances per molt que el resultat del partit d’anada sigui una garantia que als periquitos no se’ls pot escapar el passi. “La setmana que ve [per avui] no juguem contra el següent rival. Juguem contra el mateix. Això vol dir que encara queden 90 minuts i que l’eliminatòria no s’ha acabat”, va dir David Gallego al finalitzar l’enfrontament de la setmana passada en què va apel·lar a la lògica del temps i l’espai per explicar que vol un partit seriós dels seus. “Encara pot passar de tot”, explicava el capità Javi López: “Serà un futbol més directe i haurà aspectes del joc que haurem d’estar molt més pendents. Hem d’anar a guanyar el partit sense pensar en el resultat d’anada perquè des de l’inici intentaran ficar-nos a la nostra àrea”, va assenyalar.

                        L’Espanyol va disputar un partit amistós diumenge passat (empat a dos contra el Sheffield Wednesday) que va servir per donar més minuts als jugadors que no havien gaudit de protagonisme. Es van quedar a Barcelona bona part dels homes que havien disputat minuts en el xoc d’Europa League, de manera que tot fa pensar que aquesta dinàmica es mantindrà també en el dia d’avui. La llista que ha presentat Gallego, de vint jugadors, conté tots els homes que van disputar el partit d’anada i el més raonable és que la gran majoria repeteixin d’entrada perquè l’equip continuï creixent físicament.

            ',
            'photo' => "espanyol.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 2,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "El BBVA guanya un 3,7% menys fins al juny",
            'description' => "El resultat recula fins als 2.442 milions per la desinversió de la filial del banc a Xile",
            'body' => 'El BBVA va obtenir un resultat net de 2.442 milions d’euros durant el primer semestre d’enguany, una xifra que representa un 3,7% menys que el mateix període de l’any passat. Així ho va informar ahir l’entitat a la Comisión Nacional del Mercado de Valores (CNMV), a més de puntualitzar que, excloent l’impacte de la desinversió de la filial del BBVA a Xile, el benefici trimestral hauria crescut un 6%.

            Al llarg dels primers sis mesos de l’exercici, el grup va aconseguir ingressos per valor d’11.989 milions d’euros, un 1,1% més que en el mateix període del 2018, segons van detallar fonts del banc, tot i les dificultats que comporta un entorn amb tipus d’interès baixos. L’augment dels ingressos va ser conseqüència de l’augment del marge d’interessos, un 4,6%, fins als 8.987 milions, ja que les comissions netes van disminuir un 0,%4, fins als 2.470 milions, i el resultat de les operacions financeres va caure un 22%, fins als 542 milions. Les despeses del banc es van reduir un 0,4% i van quedar en 5.874 milions.

            Per regions, Mèxic i l’Amèrica del Sud van ser les que van tenir un comportament més dinàmic, mentre que als Estats Units i Turquia es van registrar caigudes superiors al 20%. Tanmateix, el conseller delegat de l’entitat, Onur Genç, va emetre ahir un comunicat en què valorava els resultats del primer semestre de l’any com a positius i “excel·lents”. En aquest sentit, Genç puntualitzava que tornen a ser “al capdavant, en termes de rendibilitat, per sobre de la mitjana de les entitats comparables a Europa”.',
            'photo' => "bbva.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Els Estats Units abaixen tipus 11 anys després i tanquen una era",
            'description' => "La Reserva Federal abarateix el diner un quart de punt i matisa que no s’esperen noves retallades",
            'body' => "Fi d’un cicle històric. El president Donald Trump pot estar content. Per primera vegada en 11 anys, la Reserva Federal va decidir ahir una rebaixa dels tipus d’interès d’un quart de punt, per la qual cosa el preu del diner queda ara en una forquilla d’entre el 2% i el 2,25%. La decisió, que vol protegir el creixement nord-americà contra els riscos econòmics globals, és la més important des que el 2008, amb la crisi financera en plena ebullició, els tipus van quedar virtualment a zero i es van mantenir intactes durant set anys.
            És la cinquena vegada en 25 anys en què es retalla el preu del diner, i podria no ser l’última en els pròxims mesos. Almenys així ha passat en les quatre ocasions anteriors, malgrat que el president de la Fed, Jerome Powell, es va limitar a aventurar que la seva institució actuarà “de manera adequada per mantenir l’expansió”. Al capdavant de la institució des de ja fa un any i mig, després de substituir Janet Yellen, amb qui la Fed va començar el cicle de pujades dels tipus d’interès, Powell va definir la mesura com un “ajust de meitat de cicle” cap a una política econòmica “més acomodatícia” i no va anticipar que fos el començament d’un llarg cicle de rebaixes propi de temps de recessió. També va anunciar que avança dos mesos el programa de reducció del seu balanç, actualment de 3,8 bilions de dòlars.

             Què suposa per a l'economia mundial la decisió de la Reserva Federal?
            Què suposa per a l'economia mundial la decisió de la Reserva Federal?

            Powell va assegurar en roda de premsa que “les perspectives per a l’economia dels Estats Units segueixen sent favorables”, tot i que la Fed va explicar en un comunicat que “les implicacions de l’evolució mundial per al panorama econòmic, així com la baixa pressió inflacionista”, justifiquen la retallada. Entre els factors de risc hi ha la guerra comercial amb la Xina protagonitzada per Trump, que feia mesos que demanava una rebaixa de tipus de fins a un punt percentual. Powell va assegurar que la decisió no té res a veure amb aquestes pressions: “No gestionem la política monetària per provar la nostra independència”.

            Amb aquest gir, el banc central nord-americà busca l’estímul de l’economia i generar una inflació més gran. Powell va reconèixer que, amb la inflació a l’1,6% en els últims 12 mesos, l’objectiu d’assolir el 2% “pot retardar-se encara més”. Si seguissin per sota de l’objectiu, “a llarg termini podria derivar en una tendència a la baixa preocupant i difícil de revertir”. Interrogat per si la rebaixa d’un quart de punt serà suficient per tornar al camí del 2% d’inflació, Powell es va remetre a la política desenvolupada per la Fed al llarg de l’any. De les expectatives inicials de pujada de la taxa d’interès, la Reserva Federal va passar a una política “pacient” de contenció que ara ha derivat en una baixada anunciada. “L’economia s’ha comportat de la manera esperada”, va afirmar Powell, que va defensar que les seves decisions “han mantingut l’economia en el bon camí, i les perspectives, favorables”.

            El president de la Reserva Federal va reconèixer que en la reunió del mes de juny es va avaluar la possibilitat d’una retallada, però van preferir esperar els esdeveniments. “Des d’aleshores hem vist desenvolupaments tant positius com negatius”, va explicar Powell. “El creixement de l’ocupació va ser fort al juny” i el pronòstic apunta que seguirà així, malgrat que va anticipar: “Serà més lent que l’any passat, però per sobre del que creiem que és necessari per mantenir estable la taxa d’atur”. Igualment, Powell va apuntar que el PIB del segon trimestre ha estat “a prop de l’esperat”, dins d’una economia el consum de la qual s’ha sustentat “en els salaris més alts” (que creixen moderadament) i l’“alta confiança” de les famílies.

            Vots discordants
            En la part negativa, el president de la Fed va assenyalar que “la producció industrial ha caigut durant dos trimestres consecutius i la inversió fixa comercial va caure en el segon trimestre”. Però on va apuntar Powell que hi ha decepció és en l’economia estrangera, amb la caiguda de la producció, “especialment a la zona euro i la Xina”.

            Igual que va passar fa poc més d’un mes, quan hi va haver un vot de dissens, la decisió d’ahir va tenir l’oposició d’Esther George, presidenta de la Fed de Kansas, i Eric Rosengren, de la de Boston, que no veien motius per a la rebaixa dels tipus d’interès amb l’atur en el 3,7%, el més baix en l’últim mig segle, i amb l’economia creixent un 2,1%, un punt percentual menys que en el primer trimestre de l’any.

            Les borses van caure després que Powell comencés la roda de premsa, al veure que no estan previstes noves retallades en un futur immediat, com volien els inversors.

            ",
            'photo' => "america.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Continua l'alentiment de l'economia europea mentre Espanya aguanta",
            'description' => "El creixement del PIB de la zona euro cau a la meitat el segon trimestre d'aquest any",
            'body' => "L'economia de la zona euro va créixer un 0,2% en el segon trimestre d'aquest any, just la meitat del que va augmentar en el mateix període de l'any passat i una dècima menys que en el primer trimestre del 2019, segons dades de l'Eurostat, l'agència europea d'estadística. Aquestes dades reforcen la tendència a la progressiva desacceleració que experimenta el conjunt de l'economia europea i que, en canvi, l'economia espanyola i la catalana estan resistint millor.

            En comparació amb un any enrere, l'economia de l'Eurozona va augmentar un 1,1%. El pronòstic de Brussel·les per al 2019 és que el PIB dels estats que comparteixen la moneda única augmentarà un 1,2%.

            De fet, la ministra d'Economia, Nadia Calviño, va anunciar que el govern espanyol incrementarà la previsió inicial de creixement d'Espanya per al 2019, seguint el camí de la Comissió Europea, el Fons Monetari Internacional i el Banc d'Espanya, que les últimes setmanes han apujat els pronòstics de creixement del producte interior brut espanyol després de constatar que l'economia avança millor del que es preveia mesos enrere. Concretament, tant l'FMI com l'executiu comunitari auguren un creixement del 2,3% –dues dècimes més que no preveien inicialment tots dos–, mentre que l'organisme monetari la va apujar fins al 2,4%.

            Calviño ha fet aquest anunci després de la publicació de la taxa de creixement del PIB espanyol, que va ser del 0,5% el segon quart de l'any i del 2,3% respecte a un any enrere. Tot i que el segon trimestre del 2018 l'economia espanyola va créixer a un ritme més alt –un 0,7% davant del 0,5% actual–, Espanya manté un ritme de creixement molt per damunt de la mitjana europea i superior també a les perspectives en acabar l'any, fet que explica la revisió a l'alça de les previsions.

            A nivell català, el PIB manté un ritme de creixement similar a l'espanyol i, igual que aquest, està superant les expectatives després d'un final de 2018 en què el pessimisme es va apoderar d'institucions i analistes: el segon trimestre, Catalunya va créixer un 0,6% -una dècima més que entre gener i març-, mentre que a nivell interanual, el PIB català va augmentar un 2%, una dècima més que al segon quart de 2018, segons dades de l'Idescat. De fet, dilluns passat la Cambra de Comerç de Barcelona també va incrementar la seva perspectiva de creixement de l'economia catalana per al 2019, concretament del 2,1% al 2,3%.

            Després d'anys de creixement un cop passada la crisi, l'economia europea està patint un alentiment causat per la caiguda del comerç mundial i europeu, que s'ha ressentit de les incertes geopolítiques provocades per les tensions comercials dels Estats Units amb la UE i la Xina, així com del Brexit. Aquestes tensions han tingut efectes negatius sobre el creixement dels grans països emergents, principalment la Xina, la qual cosa ha impactat sobre l'economia alemanya, molt exportadora.

            El fet que Alemanya, que és la locomotora europea, estigui vorejant la recessió des de fa mesos repercuteix negativament en la resta de la zona euro. Això explica l'alentiment de l'economia catalana i espanyola, que, malgrat tot, poden mantenir taxes de creixement més elevades.",
            'photo' => "europa.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "'Fast & Furious: Hobbs & Shaw', la família creix amb un 'spin-off' concebut per Dwayne Johnson",
            'description' => "Crítica de la nova entrega de la saga d'acció més popular de l'última dècada",
            'body' => "Director: David Leitch. Guió: Chris Morgan a partir de personatges creats per Gary Scott Thompson i Drew Pearce. 135 min. Estats Units i Regne Unit (2018). Amb Dwayne Johnson, Jason Statham, Idris Elba i Vanessa Kirby.

            A 'Fast & Furious' se li ha de reconèixer una resiliència notable per ser una franquícia que porta gairebé dues dècades en actiu, anant sempre a més pel que fa a la capacitat de generar estrèpit i teixir una serialitat aparentment simple però efectiva. La darrera entrega, 'Fast & Furious: Hobbs & Shaw', no encaixa dins la saga com una seqüela, sinó com un 'spin-off' a través del qual Dwayne 'The Rock' Johnson posa el focus en el musculat agent Luke Hobbs, acompanyat en aquesta ocasió per Deckard Shaw (Jason Statham), que abans-d'ahir se'ns presentava com a nèmesi i avui com a antiheroi redimit; potser perquè ell també té una família per estimar i protegir, i aquesta és la clau de la supervivència en l'univers 'Fast & Furious'. És precisament la seva germana Hattie (Vanessa Kirby, inesperada heroïna d'acció amb pestanyes a l'estil Amy Winehouse) qui posa en marxa els esdeveniments, perquè és portadora d'un virus letal perseguit per una pèrfida corporació que vol provocar una epidèmia global i que té com a braç executor un Idris Elba mig home, mig màquina. Tot i constatar que actualment la sèrie té més a veure amb la hipèrbole superheroica que amb les carreres de cotxes clandestines dels seus inicis, 'Hobbs & Shaw' funciona, sobretot, com a 'buddy movie' en negatiu, on els protagonistes no desaprofiten cap ocasió per perdre's en digressions a còpia de dards verbals, cosa que contribueix a la sensació d'esgotament que s'apodera del film en el darrer acte, quan pretén recuperar el fil i aprofundir en les arrels del personatge principal sense que ningú ho hagi demanat.",
            'photo' => "fast.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "S'entrega als Mossos el sospitós de segrestar la seva exparella a Quart",
            'description' => "L'home s'hauria endut la víctima a un descampat i l'hauria agredit amb un objecte punxant",
            'body' => "L'home sospitós d'haver segrestat i agredit la seva exparella diumenge passat a la nit a Quart (Gironès) s'ha entregat als Mossos d'Esquadra aquest dimecres a la tarda, segons ha informat a Europa Press el cos policial. Segons el relat de la víctima, la seva exparella la va retenir, se la va endur fins a un mas situat a les Gavarres i l'hi va tenir tancada durant hores. En plena matinada, pels volts de les tres, l'home la va lligar i se la va endur amb el cotxe fins a un descampat situat enmig de la zona boscosa. Allà l'agressor la va fer baixar del vehicle i la va agredir. Primer li va llançar un líquid irritant a la cara i després la va ferir amb un objecte punxant.

            Ella va aconseguir fugir i arribar caminant fins a Quart, on va demanar ajuda a uns veïns. A causa de les ferides que tenia, la van haver de traslladar a l'Hospital Josep Trueta de Girona.

            En les següents 48 hores el detingut passarà a disposició judicial. La policia havia engegat dilluns una investigació per trobar-lo. ",
            'photo' => "quart.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Pedro Sánchez inicia amb entitats feministes 'el diàleg' per convèncer amb la seva proposta de govern a la portuguesa",
            'description' => "El president en funcions insisteix en demanar responsabilitat a totes les forces polítiques",
            'body' => 'Davant la negativa d\'Unides Podem a acceptar la insistent proposta del PSOE d\'acordar un govern a la portuguesa en el qual els de Pablo Iglesias donin suport des de fora de l\'executiu i basant-se en el programa, el president en funcions Pedro Sánchez ha arrencat aquest dijous l\'agenda amb entitats socials per tal de convèncer-los. Ho ha fet en una trobada, acompanyat de la vicepresidenta en funcions Carmen Calvo, amb entitats feministes a Madrid.
            "Totes les forces polítiques han de posar de la seva part per tal que no es doni un escenari que no volem ningú, una repetició electoral al novembre", ha dit Sánchez, que no va aconseguir els suports necessaris per governar a la investidura del passat dia 25 de juliol. "Desgraciadament, no ha funcionat", ha dit Sánchez sobre el govern de coalició,  ha insistit sobre "explorar altres vies" i ha posat com a exemple "altres països", en referència al govern portugués, on els socialistes governen amb acords programàtics amb el suport extern del Bloco d\'Esquerda i el Partit Comunista de Portugal.
            ',
            'photo' => "pedro.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 1,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Batlle anuncia un pla de xoc per a la seguretat al Port Olímpic",
            'description' => "Hi haurà reforç policial, més videovigilància i un augment de les inspeccions als locals",
            'body' => "
            L'homicidi de la setmana passada al Port Olímpic va ser un 'punt d'inflexió' des del punt de vista de l'Ajuntament de Barcelona, que denuncia el 'desbordament de l'oci nocturn a la zona' i que avui ha reunit tots els actors implicats per presentar un pla de xoc d'actuació. El tinent d'alcalde de Seguretat, Albert Batlle, ha anunciat un seguit de mesures d'aplicació immediata, com un reforç policial –es preveu que hi hagi dues furgonetes de la Brimo dels Mossos d'Esquadra i dues de la Guàrdia Urbana patrullant la zona–, sol·licitar que hi hagi més càmeres de vigilància –algunes dependran dels locals i d'altres de l'òrgan gestor del Port Olímpic– i també més efectius de seguretat privada. A més, es vol un increment de les inspeccions que es fan als locals per garantir que compleixen condicions com les d'aforament, horaris o nivell de soroll. Batlle, però, ha criticat que aquesta setmana el districte de Sant Martí hagi dictat precintar dues discoteques de la zona per infraccions greus per tema d'aforament. Finalment l'autoritat judicial ha aixecat el precintament i els locals continuen oberts.

            Els Mossos reforçaran el dispositiu de seguretat de Barcelona amb la Brimo a partir d'aquesta nit

            Els Mossos reforçaran el dispositiu de seguretat de Barcelona amb la Brimo a partir d'aquesta nit

            El tinent d'alcalde ha lamentat, però, que la majoria de propietaris dels locals d'oci nocturn de la zona hagin plantat el consistori en la reunió d'avui: dels 26 locals, només hi ha anat un representant. I algunes de les decisions que s'han pres, com ara l'augment de vigilància privada per reforçar l'actuació policial a l'entorn dels locals, les haurien d'assumir aquestes discoteques. En la reunió, a la qual sí que han assistit representants dels Mossos d'Esquadra, la Guàrdia Urbana, del Gremi de Restauració i d'àrees municipals com la de Comerç o Sant Martí, també s'han pres decisions més a mitjà termini, com actuacions urbanístiques per eliminar zones fosques i fer més segurs els itineraris.

            També s'ha decidit instal·lar punts violeta per atendre víctimes de violència sexual, que és un dels punts que preocupa més, i crear dues comissions per estudiar les circumstàncies dels locals d'oci tant al Port Olímpic com al Front Marítim. 'Ens hem compromès a fer un abordatge no només nocturn per recuperar l'espai per a la ciutat i remuntar la seva imatge', ha defensat Batlle.

            El tinent d'alcalde no ha concretat, però, quina serà la presència fixa de policia a les zones del Port Olímpic i el Front Marítim. Ha dit que la previsió és que hi hagi dues furgonetes de Mossos i dues de la Guàrdia Urbana, però que el dispositiu s'adaptarà en funció de les necessitats i la disponibilitat d'agents.
            No hi haurà horaris per seguir venent al 'top manta'

            Pel que fa al dispositiu policial contra el 'top manta', Batlle ha negat que es plantegin fixar horaris perquè els venedors puguin tornar al carrer: 'No hi haurà horaris per seguir venent. És activitat il·legal'. Ha rebutjat, amb tot, respondre si acceptaria una reunió amb els manters i concretar si hi haurà canvis en el dispositiu.
            ",
            'photo' => "shoko.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 1,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Arthur se suma a la moda de tornar abans als entrenaments",
            'description' => "El brasiler retalla uns dies les seves vacances per lluitar per un lloc a l'onze",
            'body' => "
            Tot i que tenia vacances fins al 4 d’agost per haver jugat -i guanyat- la Copa Amèrica amb el Brasil, Arthur Melo ha decidit avançar la tornada als entrenaments. El de Goiânia se sumarà a la doble sessió prevista per avui a Sant Joan Despí i arribarà amb un mínim de rodatge al Trofeu Joan Gamper i a la gira americana de la setmana que ve, on els blaugranes s’enfrontaran dues vegades al Nàpols. Ha tingut pressa per posar-se a les ordres d’Ernesto Valverde, que ara mateix pot triar i remenar a l’hora de formar un mig del camp amb tres jugadors: un migcentre i dos interiors. En relació amb la plantilla de la temporada passada, hi ha una cara nova i una readaptació que fan augmentar considerablement la competència. El nouvingut és Frenkie de Jong, que va costar una milionada i amenaça l’estatus d’homes importants com Ivan Rakitic, mentre que la revisió de funcions respon al nom de Sergi Roberto, a qui el Txingurri vol alliberar de la posició de lateral dret. Per tant, si no hi ha sortides abans del 31 d’agost, hi haurà cops i empentes per aconseguir un lloc a la sala de màquines culer. I Arthur ho sap.

            El brasiler també és conscient que no va rendir a un gran nivell al tram decisiu del curs passat. Després de causar sensació en les seves primeres aparicions -el debut continental davant el Tottenham va ser de traca-, va anar perdent influència en el joc, també per culpa d’uns problemes al pubis que li van fer la guitza durant molts mesos. Així, ara que està recuperat, com bé va demostrar a la Copa Amèrica, on va jugar complets la majoria de partits, vol aprofitar l’avinentesa per no perdre punts amb vista a una titularitat que, en cas d’estar al 100%, ja no tindria tan assegurada. I és que enguany la plantilla té De Jong, que també domina el joc posicional i gasta una precisió cartesiana en les passades.
            Wagué, dotze dies de vacances

            La moda de retallar vacances no és nova. Messi i Ter Stegen la van seguir en el seu moment i Luis Suárez també ho ha fet enguany: ja va treballar ahir a la ciutat esportiva. Però el parèntesi més curt ha sigut el de Moussa Wagué, que va jugar la final de la Copa d’Àfrica fa 13 dies i ja és a les ordres de Valverde. El senegalès tindrà fitxa del primer equip i es repartirà la posició de lateral dret amb Nélson Semedo.
            ",
            'photo' => "arthur.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
        DB::table('articles')->insert([
            'title' => "Pep Guardiola, candidat al The Best com a millor entrenador",
            'description' => "El guanyador de quatre títols amb el City haurà de competir contra Klopp, vencedor a la Champions",
            'body' => "

            La FIFA ha donat a conèixer aquest dimecres la llista de deu candidats a guanyar el premi The Best al millor entrenador. Entre ells hi ha Pep Guardiola, tècnic del Manchester City, que va guanyar els quatre títols anglesos a què optava la temporada passada. El català, però, rivalitzarà amb Jürgen Klopp, entrenador del Liverpool, que va aixecar la Champions.

            Qui no és a la llista és Ernesto Valverde. El tècnic del Barça, malgrat guanyar la Lliga per segona temporada consecutiva, ha quedat fora d'uns premis que han posat l'accent en els mèrits internacionals per sobre dels nacionals.

            L'únic entrenador que figura a la llista malgrat no haver aixecat cap trofeu és Mauricio Pochettino, però a l'argentí se li reconeix el mèrit d'haver dut el seu Tottenham a la final de la Champions. També hi és l'entrenador de l'Ajax, Erik ten Hag, semifinalista de la Lliga de Campions –va quedar literalment a un segon de ser a la final– i guanyador de la lliga i la Copa a Holanda. L'altre tècnic d'un club és Marcelo Gallardo, guanyador de la Copa Libertadores amb el River Plate.

            Les seleccions tenen molt pes als premis The Best, on es reconeix els vencedors internacionals de l'última temporada: l'algerià Djamel Belmadi, per haver dut el seu país a guanyar la Copa d'Àfrica; el portuguès Fernando Santos, per conduir el seu país a guanyar la primera edició de la Lliga de Nacions, i el brasiler Tite, campió amb la 'canarinha' de la Copa Amèrica.

            Els únics seleccionadors que no han aixecat cap trofeu i que figuren a la llista són l'argentí Ricardo Gareca, que va portar el Perú a la final de la Copa Amèrica, i el francès Didier Deschamps, guanyador de l'últim The Best.
            ",
            'photo' => "guardiola.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0,
            'created_at' => date("Y/m/d")
        ]);
    }
}
