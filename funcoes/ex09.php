<?php


$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'salario' => '20000',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Director Executivo',
                'salario' => '20000',
                'subordinados' => array(
                    array(
                    'nome_cargo' => 'Chefe de Operações',
                    'salario' => '20000'
                    ),
                    array(
                    'nome_cargo' => 'Gerente Operador',
                    'salario' => '20000',
                    'subordinados' => array(
                        array(
                        'nome_cargo' => 'Luís Budunha',
                        'salario' => '20000',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Tesoureiro do Banco',
                                'salario' => '20000'
                            ),
                            array(
                                'nome_cargo' => 'Chefe da segurança',
                                'salario' => '20000'
                            )
                        )
                        )
                    )
                )
                )
            ),
            array(
                'nome_cargo' => 'Director Comercial',
                'salario' => '20000',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gestor de vendas',
                        'salario' => '20000'
                    ),
                    array(
                        'nome_cargo' => 'Gerente operário',
                        'salario' => '20000'                    )
                )
            )
        )
    )
);

function exibir($cargos){
    $html = "<ul>";
    foreach($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'] . " ";
        $html .= "<b>". $cargo['salario'] . "</b>";
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibir($cargo['subordinados']); 
        }
        $html .= "</li>";
    }
    $html .= "</ul>";

    return $html;

}

echo exibir($hierarquia);

?>