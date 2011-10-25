Lista de CEPS do Brasil
===========================

- Feito para banco de dados MySQL, contém tabelas de estados, cidades, bairros e logradouros de todo o Brasil.
- Existe uma classe de CEP para manipulação das buscas de fácil utilização.
- O arquivo index.php contém um exemplo de utilizaçãos.

    $cep = new Cep('SEU CEP');
    echo $cep->uf;
    echo $cep->cidade;
    echo $cep->bairro;
    echo $cep->logradouro;
	
## Dúvias, e-mail para <luis.nh@gmail.com> ##