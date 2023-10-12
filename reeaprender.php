<?php
function deposito ( array $conta, float $valoradepositar): array 
{
    if ($valoradepositar >= 0){
  $conta ['saldo'] += $valoradepositar;}
  else { exibemensagem (mensagem:"voce so pode adicionar numeros positivos") ;}
  return $conta;
}
// sacar dinheiro
function sacar (array $conta, float $valorasacar):array 
{
    if ($valorasacar > $conta ['saldo']) {
        exibemensagem (mensagem:"voce n pode fazer essa operação");
    } else {
        ($conta ['saldo'] -=$valorasacar);
    }
    return ($conta);
}
// mostrar na tela 
function exibemensagem (string $mensagem)
{
    echo $mensagem . PHP_EOL;
}
?>