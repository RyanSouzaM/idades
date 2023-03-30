<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form method="post" action="cadastro2.php">
    nome: <input type="text" nome="nome">
    <br>
    idade: <input type="text" nome="idade">
    <br>
    email: <input  type="email"nome="email">
    <br>
    cidade: <input type="text"nome="cidade">
    <br>
    estado:<select name="estado">

 <option value="ac">AC</option>

 <option value="al">AL</option>

 <option value="ap">AP</option>

 <option value="am">AM</option>

 <option value="ba">BA</option>

 <option value="ce">CE</option>

 <option value="es">ES</option>

 <option value="go">GO</option>

 <option value="ma">MA</option>

 <option value="mt">MT</option>

 <option value="ms">MS</option>

 <option value="mg">MG</option>

 <option value="pa">PA</option>

 <option value="pb">PB</option>

 <option value="pr">PR</option>

 <option value="pe">PE</option>

 <option value="pi">PI</option>

 <option value="rj">RJ</option>

 <option value="rn">RN</option>

 <option value="rs">RS</option>

 <option value="ro">RO</option>

 <option value="rr">RR</option>

<option value="sc">SC</option>

 <option value="sp">SP</option>

 <option value="se">SE</option>
 
 <option value="to">TO</option>

<option value="df">DF</option>




 </select>
    <br>
    sexo: <input  type="radio"nome="sexo">M<input  type="radio"nome="sexo">F
    <br>
    escolaridade: <input type="text"nome="escolaridade">
    <br>
    Estado Civil: <input type="text"nome="estadocivil">
    <br>
    Telefone: <input type="tel"nome="telefone">
    <br>
   <button type="submit">Enviar</button>
    </form>

</body>
</html>