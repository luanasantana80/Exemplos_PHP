<?php 

$compra = $_POST['valor'];
$pag = $_POST['form_pag'];
$parc =$_POST['parcela_esc'];


$parcela=0;
if ($pag = "avista"){
    echo "valor da compra".$compra;

}else(
    if($pag = "parcelado"){
        if($parc = "2"){
            $parcela=$compra/$parc;   
            echo "Valor da compra total: ".$compra."<p> Parcela: ".$parc."<p> Valor da Parcela: ".$parcela;
        }else{
            if($parc = "3"){
                $parcela=$compra/$parc;
                echo "Valor da compra total: ".$compra."<p> Parcela: ".$parc."<p> Valor da Parcela: ".$parcela;
            }else(
                if($parc = "4"{
                    $parcela=$compra/$parc;
                    echo "Valor da compra total: ".$compra."<p> Parcela: ".$parc."<p> Valor da Parcela: ".$parcela;
                }    
                )else(
                    echo "Digitado incorretamente";
                )
            )
        }
        }else(
            echo "Digitado incorretamente";
    )
)




?>