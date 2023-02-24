<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <a href="{{url ('/')}}">Voltar para Home</a><br>
    <a href="{{ url ('/produtos')}}">Link para ir para Produtos</a><br>
    <a href="{{ url ('/contato')}}">Link para ir para Contato</a><br>
    <a href="{{ url ('/empresa')}}">Link para ir para Empresa</a>  

</body>

</html>