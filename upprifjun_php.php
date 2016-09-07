<!DOCTYPE html>
<html>
<head></head>
<body>

<?php



$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
$count = -1;
$str ='<p>';
foreach ($customers as $arr) {
echo $str;
vprintf('<p> Name: %s</p><p>Email: %s</p><p>Phone: %s</p>',$arr);

}

$pic = array("piC2.jpg", "PIC10.jpg", "pic20.jpg", "pic1.jpg");

//SORT
sort($pic);
foreach ($pic as $p) {
	echo $p.' ';
}

//NATCASESORT
//sort sorterar eftir réttri stafrófsröð en natcasesort sorterar í öfugri stafrófsröð.
natcasesort($pic);
foreach ($pic as $p) {
	echo $p.' ';
}

//15. HTTP stendur fyrir Hyper Text Transfer protocol. Það sér um að flytja HTML efni til og frá vefþjóninum. Það að hann sé stateless þýðir einfaldlega að honum er alveg sama hvað geirist á undan s.s. gleymir bara öllu þegar hann er búinn að vinna. Segjum að ég ég fari á http://www.google.com, þá sendir http protocolinn mig á google.com og þegar sú beiðni er búin þá byrjar bara allt upp á nýtt þegar ég heimsæki google.com næst. Stateless þýðir bara að protocolinn er ekki að geyma neitt neins staðar og er alveg sama um allt annað en þessa tilteknu beiðni.

//16. http://www.tskoli.is - http = protocol s.s. hvað á að nota til að flytja gögnin í þessu tilviki http, www - root mappan þar sem vefsíðan er geymd, tskoli - nafnið á síðunni .is - top level domain, nafnið er skráð hjá .is.

//17. Server-side scripting þýðir að skriftan er geymd á servernum. 
//Það fyrsta sem vefþjónninn gerir er að hafa samband við PHP compiler upp á að þýða PHP skriftuna. Síðan þegar það er búið þá sendist skjalið sem html kóði með endingunni .php svo að vefþjónnin viti að þetta sé php skjal sem á að farar í gegnum php compiler stundum kallað PHP engine. Það er m.a. ástæðan fyrir því að við getum ekki séð php kóðann bara með því að ýta á show source. 


?>


</body>
</html>