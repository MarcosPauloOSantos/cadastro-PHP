<?php
require_once  'reeaprender.php';

$usuarios = [12550162994 =>[
    'titular' => 'marcos',
    'saldo' => 300
],
 12334563856 => [
    'titular' => 'joyce',
    'saldo' => 2000
],
  12384563756 =>[
    'titular' => 'maysa',
    'saldo' => 1000
    ]
];
// adicionar um usuario 
$usuarios [12322222245] = [
    'titular'=> 'pedro',
    'saldo' => 40000
    ];
// depositar
$usuarios [12334563856] = deposito ($usuarios[12334563856],valoradepositar:0);
// sacar dinheiro
$usuarios [12322222245] = sacar ($usuarios [12322222245], valorasacar:0 );
// deletar uma conta 
unset ($usuarios [12384563756]);

/* foreache , loop para mostrar todas as contas 
foreach ($usuarios as $cpf => $conta) {
    exibemensagem (mensagem: "$cpf {$conta ['titular']} {$conta ['saldo']}" );
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DADOS DOS CLIENTES<h1>
    <?php foreach ($usuarios as $cpf => $conta)  {?>
        <dt><h3><?= $conta ['titular'];?>- <?= $cpf;?> </h3></dt>
        <dd>saldo:<?=  $conta ['saldo'];?></dd>
    <?php   }?>
</body>
</html>
