<?php
$welcomeText='<p>Hello MMA</p>';
?>
<?=$welcomeText;?>
<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<questions>
 <question text='Do you like beer?'>
  <answer text='YES!' />
 </question>
</questions>
XML;

$questions = new SimpleXMLElement($xmlstr);
?>
<p>Spørgsmål : <?=$questions->question[0]['text']?></p>
<p>Svar : <?=$questions->question[0]->answer['text']?>
