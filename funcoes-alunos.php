<link rel="stylesheet" href="style.css">

<?php

// Imprimir na tela a média das notas de todos os alunos
function calcularMedia(array $turma) {
    $soma = 0;
    foreach($turma as $aluno) {
        $soma = $soma + $aluno["nota"];
    }

    $media = $soma / count($turma);

    return $media;
}

//criar uma função que apresente o aluno com a maior nota
function alunoComMaiorNota(array $turma) {

    $melhorAluno = null;
    foreach($turma as $aluno) {
        if($melhorAluno == null) {
            $melhorAluno = $aluno;
        } elseif($aluno["nota"] > $melhorAluno["nota"]) {
            $melhorAluno = $aluno;
        } elseif($aluno["nota"] == $melhorAluno["nota"]){}
    }

    return $melhorAluno;
}

//criar uma função que altere a nota de determinado aluno
// & - passagem de parâmetro por referência
function alterarNotaAluno(array &$turma, $nome, $novaNota) {
    foreach($turma as $chave => $aluno) {
        if($aluno["nome"] == $nome) {
            $turma[$chave]["nota"] = $novaNota;
        } 
    }

}

alterarNotaAluno($alunos, "Isabela", 20);

//escreva uma função que inclua a situação de todos os alunos
//caso a nota for menor que 50 situação = reprovado
//caso a nota for maior ou igual a 50, situação = aprovado
function situacaoAlunos(array &$turma) {
    foreach($turma as $chave => $aluno) {
        if($aluno["nota"] >= 50) {
            $turma[$chave]["situacao"] = 'Aprovado(a)';
        } else {
            $turma[$chave]["situacao"] = 'Reprovado(a)';
        }
    }
}

situacaoAlunos($alunos);
