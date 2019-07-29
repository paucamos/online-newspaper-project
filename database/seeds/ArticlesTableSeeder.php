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
            'photo' => "../images/gironafc.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 1
        ]);
        DB::table('articles')->insert([
            'title' => "El port d’Empúries es deixa veure",
            'description' => "Les excavacions del 73è Curs d’Arqueologia posen al descobert la façana portuària de la ciutat grega",
            'body' => "Les excavacions del 73è Curs d’Arqueologia d’Empúries han tornat a donar els seus fruits i han posat al descobert la façana portuària de la ciutat grega. Els treballs d’excavació, que han durat tres setmanes i en els quals han pogut participar els vint-i-set alumnes del curs d’enguany, han tret a la llum la part superior del penya-segat que marcava el límit d’aquesta zona amb la fondalada de l’antic port i han permès de documentar construccions i nivells que pertanyen a la primera ocupació del nucli en la segona meitat del segle VI aC i també altres edificis d’època hel·lenística i romana.

            Els arqueòlegs, que treballen a l’extrem nord del nucli grec de la neàpolis, han posat al descobert diferents nivells i construccions que remeten a la primera etapa d’ocupació, durant la segona meitat del segle VI aC, a la vegada que s’han documentat altres edificacions que pertanyen a períodes més recents de la ciutat. L’excavació d’algunes tombes ha permès igualment de completar el coneixement de la reocupació d’aquest sector com a espai funerari durant l’època tardoromana, segles més tard de l’abandonament del nucli urbà.
            
            Paral·lelament, davant aquest mateix barri portuari han començat a rebaixar parcialment les sorres que avui omplen l’antiga fondalada del port, fet que ha fet possible de recuperar visualment el promontori rocós que, en alguns punts, formava un petit penya-segat obert a la mar. Es tracta d’una important actuació que continuarà en futures campanyes amb l’objectiu de deixar al descobert aquesta façana portuària de la ciutat i conèixer la morfologia de l’antic paisatge litoral.
            
            A més dels treballs d’excavació, els alumnes del curs d’arqueologia han pogut assistir a diverses conferències, participar en sessions pràctiques de prospecció geofísica i col·laborar en la realització de sondatges geològics previstos en el projecte per a la reconstrucció de l’evolució del paleoambient.
            
            El Museu d’Arqueologia d’Empúries , a més de ser visitable, ha programat aquests dies l’exposició temporal Bacus, les màscares del déu, que es mantindrà oberta fins al 15 de setembre.",
            'photo' => "../images/empuries.jpg",
            'user_id' => 2,
            'is_published' => 1,
            'featured' => 2
        ]);
        DB::table('articles')->insert([
            'title' => "Article sense publicar",
            'description' => "Descripcio de article sense publicar",
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula accumsan rutrum. Praesent eget pulvinar nulla. Fusce in felis sagittis, condimentum nisi et, placerat urna. Vivamus eu felis dapibus, fermentum neque quis, pretium ipsum. Aenean pellentesque odio eget ligula dictum, vel tincidunt elit mattis. Donec elementum sodales vehicula. Ut auctor ante at risus pretium molestie. Quisque eget tellus at nulla facilisis rutrum et vel leo. Sed sollicitudin pulvinar sem, eget fermentum mauris luctus ullamcorper. Integer vel metus ullamcorper, egestas diam sit amet, finibus sapien. Quisque ut pharetra ex, eu tempus metus. Cras id ultricies felis. Ut consequat erat ante, id viverra magna facilisis sit amet. Curabitur euismod finibus dolor mattis scelerisque. Proin elementum vulputate arcu, nec maximus odio malesuada quis.",
            'photo' => "../images/lorem.jpg",
            'user_id' => 1,
            'is_published' => 0,
            'featured' => 0
        ]);
        DB::table('articles')->insert([
            'title' => "Article sense publicar d'en Pepe",
            'description' => "Descripcio de article sense publicar",
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula accumsan rutrum. Praesent eget pulvinar nulla. Fusce in felis sagittis, condimentum nisi et, placerat urna. Vivamus eu felis dapibus, fermentum neque quis, pretium ipsum. Aenean pellentesque odio eget ligula dictum, vel tincidunt elit mattis. Donec elementum sodales vehicula. Ut auctor ante at risus pretium molestie. Quisque eget tellus at nulla facilisis rutrum et vel leo. Sed sollicitudin pulvinar sem, eget fermentum mauris luctus ullamcorper. Integer vel metus ullamcorper, egestas diam sit amet, finibus sapien. Quisque ut pharetra ex, eu tempus metus. Cras id ultricies felis. Ut consequat erat ante, id viverra magna facilisis sit amet. Curabitur euismod finibus dolor mattis scelerisque. Proin elementum vulputate arcu, nec maximus odio malesuada quis.",
            'photo' => "../images/lorem.jpg",
            'user_id' => 3,
            'is_published' => 1,
            'featured' => 0
        ]);
    }
}
