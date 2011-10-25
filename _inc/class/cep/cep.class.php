<?php 
/**
 * Classe para pegar as informações do localização através do CEP
 * 
 * @author Luís Dalmolin <luis.nh@gmail.com>
 * @version 1.0 
 */
 
class Cep {
    
    /**
     * Variaveis de localização
     * 
     * @access public
     */
    public 
        $cep, 
        $logradouro, 
        $bairro, 
        $cidade, 
        $uf, 
        $encontrado = false;
        
       
 
    /**
     * Construtor da tabela 
     * 
     * @access public 
     * @param $cep int / string
     * @return void
     */
    public function __construct($cep)
    {
        $this->cep = str_replace('-', '', $cep);
        $this->buscar();
    }
    
    
    
    /**
     * Buscando as informações através do CEP
     * 
     * @access private
     * @return void
     */
    private function buscar()
    {
        $resCep = mysql_query("
            SELECT 
                logradouro.logradouro, bairro.bairro, cidade.cidade, uf.uf
            FROM logradouro logradouro 
            LEFT JOIN bairro bairro 
                ON bairro.id = logradouro.idBairro 
            LEFT JOIN cidade cidade 
                ON cidade.id = bairro.idCidade
            LEFT JOIN uf uf 
                ON uf.id = cidade.idUf 
            WHERE logradouro.cep = '".$this->cep."'             
        ");
        
        if( mysql_num_rows($resCep) > 0 ) {
			$linha = mysql_fetch_array( $resCep );
		
            $this->encontrado  = true;
            $this->logradouro  = $linha['logradouro'];
            $this->bairro      = $linha['bairro'];
            $this->cidade      = $linha['cidade'];
            $this->uf          = $linha['uf'];
        }
    }    
}