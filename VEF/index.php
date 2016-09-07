<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="upprifj.css"/>
</head>
<body>
<div class="container">
<h1>Verkefni 1 - Málskipan - LINKUR Á KÓÐA: https://github.com/afk0901/malskipan</h1>
<p>
1. Echo og print eru bæði notað til þess að prenta út streng á skjáinn. Munurinn á echo og print er sá að print getur skilað út 1. Það væri t.d. hægt að nota það í einhvrja if setningu t.d. ef print() = 1 þá vitum við að það prentaðist á skjáinn, nú ef ekki þá gætum við gert eitthvað í því, bara svona sem dæmi. Echo hinsvegar getur tekið inn nokkrar breytur (e. parameters) þó að það sé hinsvegar sjaldgæft. Print tekur aðeins inn eina breytu. Echo er talið vera hraðvirkara en print.</p>
<p>
2. Munurinn á einföldum og tvöföldum gæsalöppum í PHP er sá að einfaldar gæsalappir þýða að þetta sé einungis strengur þ.e.s. út kemur það sem bókstaflega stendur inn í gæsalöppunum, t.d. echo 'Hello $name'; Þetta myndi þá birtast sem: Hello $name. En, ef við notum tvöfaldar gæsalappir þá myndi það þýða að PHP reynir að ná í breytur og það sem er búið að escapa með \ og þýða. Ef við myndum skrifa: "Hello $name" þá kæmi út: Hello  hvað sem breytan $name gerir. Tökum dæmi:
Dæmi: Einfaldar gæsalappir: <?php $name = 'Arnar'; echo 'Hello $name';?>
Niðurstaða: Hello $name 
Dæmi: Tvöfaldar gæsalappir: <?php $name = 'Arnar'; echo "Hello $name";?> 
Niðurstaða: Hello Arnar
</p>
<p>
3.
 $Globals þýðir að nú ætlum við að ná í eitthvað sem er í global scope þ.e.s það sem er fyrir utan föllin okkar. Segjum að ég sé með eitthvað fall og ætli svo að ná í breytu sem er ekki inn í fallinu, auðvitað gæti ég búið til nýja breytu með sama nafni, en hún inniheldur kannski ekki upplýsingarnar sem ég vil fá svo ég myndi þá nota $GLOBALS til að ná í þessa breytu. 
Skýrum nánar með dæmi:
<?php
$myvar = 'globalscopevar';
function myfunc(){
       return $GLOBALS['myvar'];
}
echo myfunc();
?>
Niðurstaða:  globalscopevar
Eins og sést þá er $GLOBALS array. Þannig að í þetta array safnast saman allar global scope breytur (þær breytur sem eru ekki í fallinu),  gildið sett í assaociative arrayið $GLOBALS og svo er náð í þetta array með þvi að nota nafnið á breytunni s.s. eins og við séum að ná eitthvað úr venjulegu arrayi nema við notum nafnið en ekki indexið.
</p>

<p>
4.
=== Þýðir að það sem er verið að bera saman sé nákvæmlega jafnt og hitt s.s. jafnt og, og með sömu gagnatýpu. Tildæmis $a == $b myndi þá þýða að $a gæti verið strengurinn 1 og $b talan 1 og það væri þá true en ef þetta væri svona $a === $b þá yrði það ekki satt því að $a og $b eru ekki af sömu tegund s.s. $a er strengur og $b er tala. En ef við myndum bera saman $a og $b og báðir strengir eða báðir int þá væri það true. Þetta myndi t.d. nýtast ef við erum að taka inn eitthvað input og viljum vera viss um að það sé af sömu gagnategund kannski tökum inn eitthvað sem á að vera strengur og það input á að vera jafnt og einhver strengur, þá getum við auðvitað notað === nú, ef okkur er alveg sama um hvort það sé strengur eða ekki þá gætum við notað ==.
DÆMI (sjá kóða):
<?php
if(1 === '1'){
//ER false
}
if(1 === 1){
//ER TRUE
}
if('1' === '1'){
 //ER TRUE
}
 
if(1 == '1'){
//Líka true
}
 
if(1 == 1){
//ER líka true
}
 
?>
 </p>

<p>
5. Printf() er sniðugt af tveimur ástæðum, ein ástæðan er sú að það er auðveldara að lesa kóðann eða hreinna því að það er sett % í staðinn fyrir breyturnar sem eiga að koma í strenginn og það er hægt að setja breytuna inn á réttu sniði.
DÆMI:
<?php
$number = 10;
$location = "sea";
$fomrmat = 'There are %d animals in the %s';
$format2 = 'There are %2$s animals in the %1$d';
echo printf($fomrmat,$number,$location);//Skiptir ekki máli í hvaða röð $num og $location er, því að það er hægt að skipta þeim í strengum
echo printf($format2,$number,$location);//Skiptir ekki máli í hvaða röð $num og $location er, því að það er hægt að skipta þeim í strengum 
?>
</p>
<p>
Svo að printf sniðugt því að það er hægt að snúa breytunum í strengnum sjálfum án þess að breyta printf() parameterunum í printf fallinu, á alla vegu eins og sést í dæminu. En aðal málið er kannski að við getum fengið hluti á réttu formi t.d. strengurinn '45' getum við fært yfir á int(45) og gert svo eitthvað skemmtilegt við það og hann helst á sínum stað. Þarna tilgreinuru líka bara einn staf, þarft ekki að skrifa int() $breyta eða double() breyta.
</p>
<p>
 Þannig að það er sniðugt því að breytan er á réttu formi og hún kemur alltaf á réttann stað eins maður myndi vera með breytu nema hún er á réttu formi, t.d. %d í dæminu er int() og þá er hún int() og ekkert annað. Það gerir kóðann hreinni því annars er allt í punktum þar sem breyturnar eru og þá þarf alltaf að passa sig að loka strengum áður en breytunni er bætt við hann. Annað sniðugt, við þurfum ekki að skilgreina printf() í hvert einasta skipti, við getum alltaf bætt við það eins og sést á dæminu okkar, en með því skilyrði að það sé í réttri röð.
 </p>

<p>
6.
<?php
$a = 1;//Breytan $a skilgreind og hún er 1
$b = $a++;//Skilar út $a en bætir svo 1 við þegar búið er að skila út $a þannig að þegar $b birtist, þá birtist það sem 1 því $a var upphaflega 1. Setur $a í rauninni strax inn í $b og bætir svo við $a.
$c = ++$a;//Bætum einum við $a sem er í rauninni 2 því að út kom 2 í $b, en í $b var bætt 1 við $a en það skilast út sem 1.
echo $a.$b.$c;//Prentum allt draslið út - $a er 3 því við bætum alltaf 1 við $a, $b er 1 því við ákváðum að haffa ++ fyrir aftan sem þýðir að það sem $a var í upphafi s.s. 1 skilast út í $b.
//Svo út kemur 313
?>
</p>
<p>
7.
<p>
SlEPPA
</p>

8. 
<?php
$arr = array('Japan' => 'Tokyo', 'Mexico' => 'Mexico City', 'USA' => 'New York City', 'India' => 'Mumbai', 'Korea' => 'Seoul', 'China' => 'Bejing');

foreach ($arr as $country => $city) {
	echo 'Country: '.$country.' City: '.$city.' ';
}

echo '<p>9.';
$colors = array("red","blue","green");
echo $colors[0].' ,'.$colors[1].', '.$colors[2];
list($red,$blue,$green) = $colors;
echo "\n\r";
echo $red.', '.$blue.', '.$green;
echo '</p>';


echo '<p>10.';
$states = array("Texas", "Ohio"); 

array_push($states,'New York');
array_unshift($states,'California');
print_r($states);

echo '</p>';
echo '<p>11.';
shuffle($states);
print_r($states);
echo '</p>';
?>
<p>
12.
<table>
<?php 

$products = array( array ( '08:10', '10:30', '13:15'), array ( 'GSÖ2B2U', 'VSH2B2U',
'FOR2B2U'), array ( 'GUS', 'GJG', 'GRL') );
$prodlen = count($products);
for ($i=0; $i < $prodlen; $i++) { //$i hækkar um einn
$count = -1;
$countinarr = -1;
echo '<tr>';
foreach ($products as $arr) {
//Fyrir hvert stak s.s. arrayin í $products - bættu 1 við count farðu í array númer $count og taktu stak númer $i sem hækkar um einn í hverri umferð.
	++$count;
	echo '<td>'.$products[$count][$i].'<td>';
}
echo '</tr>';
}

 ?>
</table>
</p>

<?php
echo '<p>13.';
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
$count = -1;

foreach ($customers as $arr) {
echo '<p>';
vprintf('<p> Name: %s</p><p>Email: %s</p><p>Phone: %s</p>',$arr);
 echo '</p>';
}
echo '</p>';

echo '<p>14.';
$pic = array("piC2.jpg", "PIC10.jpg", "pic20.jpg", "pic1.jpg");
 
//SORT
sort($pic);
foreach ($pic as $p) {
    echo $p.' ';
}
 echo '</p>';

 echo '<p>';
//NATCASESORT
//sort sorterar eftir réttri stafrófsröð en natcasesort sorterar í öfugri stafrófsröð.
natcasesort($pic);
foreach ($pic as $p) {
    echo $p.' ';
}
echo '</p>';
?>
<p>
15. HTTP stendur fyrir Hyper Text Transfer protocol. Það sér um að flytja HTML efni til og frá vefþjóninum. Það að hann sé stateless þýðir einfaldlega að honum er alveg sama hvað geirist á undan s.s. gleymir bara öllu þegar hann er búinn að vinna. Segjum að ég ég fari á http://www.google.com, þá sendir http protocolinn mig á google.com og þegar sú beiðni er búin þá byrjar bara allt upp á nýtt þegar ég heimsæki google.com næst. Stateless þýðir bara að protocolinn er ekki að geyma neitt neins staðar og er alveg sama um allt annað en þessa tilteknu beiðni.
</p>

<p>
16. http://www.tskoli.is - http = protocol s.s. hvað á að nota til að flytja gögnin í þessu tilviki http, www - root mappan þar sem vefsíðan er geymd, tskoli - nafnið á síðunni .is - top level domain, nafnið er skráð hjá .is.
</p>
 
<p>
17. Server-side scripting þýðir að skriftan er geymd á servernum. 
Það fyrsta sem vefþjónninn gerir er að hafa samband við PHP upp á að þýða PHP skriftuna. Síðan þegar það er búið þá sendist skjalið sem html kóði með endingunni .php svo að vefþjónnin viti að hann á að senda þetta á PHP fyrst til að þýða php skriftuna yfir á html. Það er m.a. ástæðan fyrir því að við getum ekki séð php kóðann bara með því að ýta á show source s.s. PHP Engine er búin að þýða kóðan yfir á HTML.
</p>
</div>
</body>
</html>