<!doctype html>
<html lang="br">
<head>
    <title>PESQUISA DE CARREIRA</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen">
</head>
<body >
<form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <h2> PESQUISA DE CARREIRA </h2>
        <div class="linha1">
            <input class="input-form text-input" name="nome" placeholder="Nome do Aluno:" required>
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="idade" placeholder="Idade" required>
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="curso" placeholder="Quais cursos ja concluiu?" required>
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="cursos" placeholder="Quais cursos esta fazendo?">
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="carreira" placeholder="Que carreira pretende seguir?" required>
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="estagio" placeholder="Ja esta estagiando na área? " required>
        </div>

        <h2> AGORA NOS DIGA SOBRE OS CURSOS QUE ESTA FAZENDO </h2>

        <div class="linha1">
            <input class="input-form text-input" name="feedback1" placeholder="Esta gostando do curso?" required>
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="feedback2" placeholder="Oque sente falta de aprender?">
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="feedback3" placeholder="Tem alguma dificuldade em alguma coisa sobre o curso?" required>
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="feedback4" placeholder="Qual seria a dificuldade?" required>
        </div>
        <div class="linha1">
            <input class="input-form text-input" name="feedback5" placeholder="Você indicaria a Se7en para outra pessoa?" required>
        </div>
    </div>
    <div class="linha1">
        <img style="margin-left: 5%" src="/assets/logo.png">
        <button id="downloadPdfButton" class="button button2"> SALVAR PDF</button>
    </div>
    <h4>Salve o arquivo em sua pasta</h4>
</form>


<script>
    document.getElementById('downloadPdfButton').addEventListener('click', function () {
        // Inicie o download do PDF
        window.location.href = '/assets/pesquisa/nome-do-seu-arquivo.pdf'; // Substitua 'nome-do-seu-arquivo.pdf' pelo nome real do seu arquivo

        // Recarregue a página após um pequeno atraso (tempo suficiente para o download)
        setTimeout(function () {
            location.reload();
        }, 1000); // Recarregue a página após 1 segundo (você pode ajustar o tempo)
    });
</script>

</body>
</html>
