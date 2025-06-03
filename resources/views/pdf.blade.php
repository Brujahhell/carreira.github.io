<!DOCTYPE html>
<html>
<head>
    <title>Relatório PDF</title>
</head>
<body>
<h1>Pesquisa de Mercado </h1>

<h2>Informações do Solicitante</h2>
<p><strong>Nome do Aluno:</strong> {{ $data['nome'] }}</p>
<p><strong>Idade:</strong> {{ $data['idade'] }}</p>
<p><strong>Quais cursos ja concluiu?:</strong> {{ $data['curso'] }}</p>
<p><strong>Quais cursos esta fazendo?:</strong> {{ $data['cursos'] }}</p>
<p><strong>Que carreira pretende seguir?:</strong> {{ $data['carreira'] }}</p>
<p><strong>Ja esta estagiando na área?:</strong> {{ $data['estagio'] }}</p>

<h2> FEEDBACK</h2>

<p><strong>Com que frequência?:</strong> {{ $data['feedback1'] }}</p>
<p><strong>Os problemas são resolvidos rapidamente?:</strong> {{ $data['feedback2'] }}</p>
<p><strong>Qual a satisfação com seu Sistema de PDV?:</strong> {{ $data['feedback3'] }}</p>
<p><strong>Qual motivo da insatisfação?:</strong> {{ $data['feedback4'] }}</p>
<p><strong>Você indicaria seu sistema para outro lojista?:</strong> {{ $data['feedback5'] }}</p>
</body>
</html>
