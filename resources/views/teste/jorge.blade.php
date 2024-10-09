<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?= 'Oi Jorge' ?>

    <?php echo 'Oi Jorge'; ?>

    <?php foreach (range(1, 20) as $key): ?>
    <li><?= $key ?></li>
    <?php endforeach; ?>

    @auth
        <span>Você está autenticado</span>
    @endauth


    @foreach (range(1, 20) as $key)
        <li>{{ $key }}</li>
    @endforeach

    <p>Blade é uma tecnologia de template engine utilizada no framework PHP Laravel. <br> Ela permite a criação de
        views de forma mais simples e elegante, facilitando a separação entre o código PHP e o HTML</p>
    <p>
        Explicação simples do que o Blade faz:
        Blade ajuda a separar a lógica do código PHP da parte visual (HTML) em um site ou aplicação.
        Ele permite que você reutilize partes do layout (como cabeçalhos, rodapés) em várias páginas, sem precisar
        repetir o código.
        {{-- Ele tem uma sintaxe fácil, como code @if, @foreach, e @include(), que torna o código mais limpo e legível. --}}
        Blade compila seus arquivos de template em puro PHP, sendo rápido e eficiente.
    </p>
    <br>
    <p>
        Vantagens do Blade:
        Reutilização de componentes: Pode usar o mesmo cabeçalho/rodapé em várias páginas.
        Simplicidade: Usa menos código e fica mais limpo que PHP puro.
        Flexibilidade: Você pode usar todo o poder do PHP dentro de um template Blade.

    </p>

    <hr>

    <p>O Blade pode ser chamado de um interpretador!</p>
    <p>
        Sim, você pode dizer que o Blade atua como um interpretador no sentido de que ele "interpreta" os arquivos de
        template e converte a sua sintaxe simplificada em PHP puro.
        <br>
        De forma simples:
        <br>
        O Blade não executa diretamente o código. Em vez disso, ele compila seus arquivos Blade (.blade.php) em arquivos
        PHP normais, que o servidor processa e entrega ao usuário.
        {{-- Então, o Blade interpreta a sintaxe especial (como @if, @foreach, e {{ }}) e transforma isso em --}}
        código PHP nativo antes de ser executado pelo servidor.
        <br>
        Processo do Blade:
        <br>
        Você escreve templates usando a sintaxe do Blade.
        O Blade compila esse template para código PHP normal (um processo de "interpretação").
        O PHP gerado é então executado pelo servidor e o HTML resultante é enviado ao navegador do usuário.
        Portanto, sim, o Blade pode ser considerado um tipo de interpretador de templates, já que transforma uma sintaxe
        de alto nível em PHP executável
    </p>

    <h1>{{ isset($titulo) ? $titulo : 'Título não definido' }}</h1>

    @if (isset($usuario) && $usuario)
        <p>Olá, {{ $usuario->nome }}!</p>
    @else
        <p>Visitante, por favor, faça login.</p>
    @endif


    @if (isset($produtos) && count($produtos) > 0)
        @foreach ($produtos as $produto)
            <li>{{ $produto->nome }}</li>
        @endforeach
    @else
        <li>Nenhum produto disponível.</li>
    @endif

</body>

</html>
