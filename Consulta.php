<?php
$nome = readline("Digite seu nome: ");

do {
    echo "Olá $nome, seja bem vindo ao menu de consultoria, o que deseja ver \n====== Sistema de consulta de PSI ======\n1-Objetivos da PSI\n2-Responsabilidades\n3-Boas práticas de segurança\n4-Consequências do descumprimento\n5-Escopo da política\n6-Sair\n";
    $deci = readline("Digita a opção: \n");
    switch ($deci){
        case 1:
            echo "Tópico 1-\nÉ um documento estratégico que define regras, diretrizes e responsabilidades para proteger os ativos de dados de uma organização (físicos ou digitais) contra acessos não autorizados, uso indevido, alterações ou destruição.\n";
            do{
                $op = readline("Deseja voltar (S/N): ");
            }while ($op != "S");
            break;
        case 2:
            echo "Tópico 2-\nAs responsabilidades incluem garantir a confidencialidade, integridade e disponibilidade, sendo aplicáveis a colaboradores, gestores e terceiros, visando prevenir vazamentos e acessos indevidos.\n";
            do{
                $op = readline("Deseja voltar (S/N): ");
            }while ($op != "S");
            break;
        case 3:
            echo "Tópico 3-\nTreinamento(regulares) de funcionários, testar a equipe, usuários devem ter acesso apenas á informações necessárias para o seu uso, restringir acesso a áreas como servidor, ter um plano de resposta, revisões periódicas, garantir que a PSI esteja em conformidade com a LGPD-Lei gerak de proteção de dados pessoais (Lei n°13.709/2018)\n";
            do{
                $op = readline("Deseja voltar (S/N): ");
            }while ($op != "S");
            break;
        case 4:
            do {
                echo "Tópico 4-\nSubtópico 1-Consequências\nSubtópico 2-Punições devido ao vazamento de informações\n3-Voltar\n";
                $op = readline("Digita a opção: ");
            
                switch ($op) {
                    case 1:
                            echo "Vazamento de informações e dados sigilosos, o que pode acarretar  consequências graves ao reclamado e aos seus clientes por quebra de sigilo bancário e por infração à Lei n°13.709/2018, que dispõe sobre a lei geral de proteção de dados.\n";
                        do{
                            $op = readline("Deseja voltar (S/N): ");
                        }while ($op != "S");
                        break;
                    case 2:
                        echo " A advertência pode ser oral ou escrita, sendo preferível a dedução por escrito sob o prisma probatório. O intuito é sancionar faltas leves e desincentivar que voltem a acontecer.\n";
                        echo "A advertência pode ser oral ou escrita, sendo preferível a dedução por escrito sob o prisma probatório. O intuito é sancionar faltas leves e desincentivar que voltem a acontecer. Durante a suspensão, o colaborador não recebe salário, atingindo a órbita pecuniária do mesmo. No entanto, tal sanção não pode ser superior a 30 dias consecutivos. Em sendo mais longa do que 30 dias corridos, haverá o rompimento do contrato de trabalho sem justa causa, forte no art. 474 da CLT.";
                        do{
                            $op = readline("Deseja voltar (S/N): ");
                        }while ($op != "S");
                        break;
                
                    }
            } while ($op <> 3);
        break;
        case 5:
            echo "O escopo abrange todos os colaboradores, terceiros, ativos físicos/digitais, sistemas de informação e processos da organização.";
            do {
                $op = readline("Deseja voltar (S/N): ");
            }while ($op != "S");
            break;
        case 6:
            echo "Você saiu, consulta finalizada..";
            break;
        default:
            echo "Opção inválida...";
        break;
    }

} while ($deci != 6)

?>