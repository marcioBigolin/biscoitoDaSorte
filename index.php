<?php
$rand  = mt_rand(1, 100);

$mensagem[1] = array(
    'autor' => 'Coleman Cox',
    'mensagem' => 'Eu acredito demais na sorte. E tenho constatado que, quanto mais duro eu trabalho, mais sorte eu tenho.');
$mensagem[2] = array(
    'autor' => 'Albert Einstein',
    'mensagem' => 'Se A é o sucesso, então A é igual a X mais Y mais Z. O trabalho é X; Y é o lazer; e Z é manter a boca fechada.');
$mensagem[3] = array(
    'autor' => 'Augusto Branco',
    'mensagem' => 'Talento é dom, é graça. E sucesso nada tem haver com sorte, mas com determinação e trabalho.');
$mensagem[4] = array(
    'autor' => 'Zig Ziglar',
    'mensagem' => 'As pessoas costumam dizer que a motivação não dura sempre. Bem, nem o efeito do banho, por isso recomenda-se diariamente.');
$mensagem[5] = array(
    'autor' => 'Dwight Eisenhower',
    'mensagem' => 'Motivação é a arte de fazer as pessoas fazerem o que você quer que elas façam porque elas o querem fazer.');
$mensagem[6] = array(
    'autor' => 'Dalai Lama',
    'mensagem' => 'Toda ação humana, quer se torne positiva ou negativa, precisa depender de motivação.');
$mensagem[7] = array(
    'autor' => 'Frederick Herzberg',
    'mensagem' => 'A verdadeira motivação vem de realização, desenvolvimento pessoal, satisfação no trabalho e reconhecimento.');
$mensagem[8] = array(
    'autor' => 'Barão de Montesquieu',
    'mensagem' => 'As conquistas são fáceis de fazer, porque as fazemos com todas as nossas forças; são difíceis de conservar, porque as defendemos só com uma parte das nossas forças.');
$mensagem[9] = array(
    'autor' => 'Napoleão Bonaparte',
    'mensagem' => 'As verdadeiras conquistas, as únicas de que nunca nos arrependemos, são aquelas que fazemos contra a ignorância.');




if($rand > 10){
    echo json_encode(array('mensagem' => 'Sem mensagem'));
}else{
    echo json_encode($mensagem[$rand]);
}
?>
