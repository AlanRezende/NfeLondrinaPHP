<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcDescricaoRps StructType
 * @subpackage Structs
 */
class TcDescricaoRps extends AbstractStructBase
{
    /**
     * The ccm
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ccm;
    /**
     * The cnpj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $cnpj;
    /**
     * The cpf
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $cpf;
    /**
     * The senha
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $senha;
    /**
     * The aliquota
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $aliquota;
    /**
     * The servico
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $servico;
    /**
     * The situacao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $situacao;
    /**
     * The valor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $valor;
    /**
     * The base
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $base;
    /**
     * The ir
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ir;
    /**
     * The pis
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $pis;
    /**
     * The cofins
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $cofins;
    /**
     * The csll
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $csll;
    /**
     * The inss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $inss;
    /**
     * The retencao_iss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $retencao_iss;
    /**
     * The descricaoNF
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $descricaoNF;
    /**
     * The tomador_tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $tomador_tipo;
    /**
     * The tomador_cnpj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_cnpj;
    /**
     * The tomador_email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_email;
    /**
     * The tomador_ie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_ie;
    /**
     * The tomador_im
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_im;
    /**
     * The tomador_razao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_razao;
    /**
     * The tomador_endereco
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_endereco;
    /**
     * The tomador_numero
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_numero;
    /**
     * The tomador_complemento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_complemento;
    /**
     * The tomador_bairro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_bairro;
    /**
     * The tomador_CEP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_CEP;
    /**
     * The tomador_cod_cidade
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_cod_cidade;
    /**
     * The tomador_fone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_fone;
    /**
     * The tomador_ramal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_ramal;
    /**
     * The tomador_fax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $tomador_fax;
    /**
     * The codigo_obra
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codigo_obra = null;
    /**
     * The obra_art
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $obra_art = null;
    /**
     * The incentivo_fiscal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $incentivo_fiscal = null;
    /**
     * The cod_municipio_prestacao_servico
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cod_municipio_prestacao_servico = null;
    /**
     * The cod_pais_prestacao_servico
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cod_pais_prestacao_servico = null;
    /**
     * The cod_municipio_incidencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cod_municipio_incidencia = null;
    /**
     * The rps_num
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $rps_num = null;
    /**
     * The rps_serie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rps_serie = null;
    /**
     * The rps_tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $rps_tipo = null;
    /**
     * The rps_dia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $rps_dia = null;
    /**
     * The rps_mes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $rps_mes = null;
    /**
     * The rps_ano
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $rps_ano = null;
    /**
     * The nfse_substituida
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $nfse_substituida = null;
    /**
     * The rps_substituido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $rps_substituido = null;
    /**
     * The obra_alvara_numero
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $obra_alvara_numero = null;
    /**
     * The obra_alvara_ano
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $obra_alvara_ano = null;
    /**
     * The obra_local_lote
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $obra_local_lote = null;
    /**
     * The obra_local_quadra
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $obra_local_quadra = null;
    /**
     * The obra_local_bairro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $obra_local_bairro = null;
    /**
     * Constructor method for tcDescricaoRps
     * @uses TcDescricaoRps::setCcm()
     * @uses TcDescricaoRps::setCnpj()
     * @uses TcDescricaoRps::setCpf()
     * @uses TcDescricaoRps::setSenha()
     * @uses TcDescricaoRps::setAliquota()
     * @uses TcDescricaoRps::setServico()
     * @uses TcDescricaoRps::setSituacao()
     * @uses TcDescricaoRps::setValor()
     * @uses TcDescricaoRps::setBase()
     * @uses TcDescricaoRps::setIr()
     * @uses TcDescricaoRps::setPis()
     * @uses TcDescricaoRps::setCofins()
     * @uses TcDescricaoRps::setCsll()
     * @uses TcDescricaoRps::setInss()
     * @uses TcDescricaoRps::setRetencao_iss()
     * @uses TcDescricaoRps::setDescricaoNF()
     * @uses TcDescricaoRps::setTomador_tipo()
     * @uses TcDescricaoRps::setTomador_cnpj()
     * @uses TcDescricaoRps::setTomador_email()
     * @uses TcDescricaoRps::setTomador_ie()
     * @uses TcDescricaoRps::setTomador_im()
     * @uses TcDescricaoRps::setTomador_razao()
     * @uses TcDescricaoRps::setTomador_endereco()
     * @uses TcDescricaoRps::setTomador_numero()
     * @uses TcDescricaoRps::setTomador_complemento()
     * @uses TcDescricaoRps::setTomador_bairro()
     * @uses TcDescricaoRps::setTomador_CEP()
     * @uses TcDescricaoRps::setTomador_cod_cidade()
     * @uses TcDescricaoRps::setTomador_fone()
     * @uses TcDescricaoRps::setTomador_ramal()
     * @uses TcDescricaoRps::setTomador_fax()
     * @uses TcDescricaoRps::setCodigo_obra()
     * @uses TcDescricaoRps::setObra_art()
     * @uses TcDescricaoRps::setIncentivo_fiscal()
     * @uses TcDescricaoRps::setCod_municipio_prestacao_servico()
     * @uses TcDescricaoRps::setCod_pais_prestacao_servico()
     * @uses TcDescricaoRps::setCod_municipio_incidencia()
     * @uses TcDescricaoRps::setRps_num()
     * @uses TcDescricaoRps::setRps_serie()
     * @uses TcDescricaoRps::setRps_tipo()
     * @uses TcDescricaoRps::setRps_dia()
     * @uses TcDescricaoRps::setRps_mes()
     * @uses TcDescricaoRps::setRps_ano()
     * @uses TcDescricaoRps::setNfse_substituida()
     * @uses TcDescricaoRps::setRps_substituido()
     * @uses TcDescricaoRps::setObra_alvara_numero()
     * @uses TcDescricaoRps::setObra_alvara_ano()
     * @uses TcDescricaoRps::setObra_local_lote()
     * @uses TcDescricaoRps::setObra_local_quadra()
     * @uses TcDescricaoRps::setObra_local_bairro()
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param string $aliquota
     * @param int $servico
     * @param string $situacao
     * @param string $valor
     * @param string $base
     * @param string $ir
     * @param string $pis
     * @param string $cofins
     * @param string $csll
     * @param string $inss
     * @param string $retencao_iss
     * @param string $descricaoNF
     * @param int $tomador_tipo
     * @param string $tomador_cnpj
     * @param string $tomador_email
     * @param string $tomador_ie
     * @param string $tomador_im
     * @param string $tomador_razao
     * @param string $tomador_endereco
     * @param string $tomador_numero
     * @param string $tomador_complemento
     * @param string $tomador_bairro
     * @param string $tomador_CEP
     * @param string $tomador_cod_cidade
     * @param string $tomador_fone
     * @param string $tomador_ramal
     * @param string $tomador_fax
     * @param string $codigo_obra
     * @param string $obra_art
     * @param int $incentivo_fiscal
     * @param string $cod_municipio_prestacao_servico
     * @param string $cod_pais_prestacao_servico
     * @param string $cod_municipio_incidencia
     * @param int $rps_num
     * @param string $rps_serie
     * @param int $rps_tipo
     * @param int $rps_dia
     * @param int $rps_mes
     * @param int $rps_ano
     * @param int $nfse_substituida
     * @param int $rps_substituido
     * @param int $obra_alvara_numero
     * @param int $obra_alvara_ano
     * @param string $obra_local_lote
     * @param string $obra_local_quadra
     * @param string $obra_local_bairro
     */
    public function __construct(int $ccm, string $cnpj, string $cpf, string $senha, string $aliquota, int $servico, string $situacao, string $valor, string $base, string $ir, string $pis, string $cofins, string $csll, string $inss, string $retencao_iss, string $descricaoNF, int $tomador_tipo, string $tomador_cnpj, string $tomador_email, string $tomador_ie, string $tomador_im, string $tomador_razao, string $tomador_endereco, string $tomador_numero, string $tomador_complemento, string $tomador_bairro, string $tomador_CEP, string $tomador_cod_cidade, string $tomador_fone, string $tomador_ramal, string $tomador_fax, ?string $codigo_obra = null, ?string $obra_art = null, ?int $incentivo_fiscal = null, ?string $cod_municipio_prestacao_servico = null, ?string $cod_pais_prestacao_servico = null, ?string $cod_municipio_incidencia = null, ?int $rps_num = null, ?string $rps_serie = null, ?int $rps_tipo = null, ?int $rps_dia = null, ?int $rps_mes = null, ?int $rps_ano = null, ?int $nfse_substituida = null, ?int $rps_substituido = null, ?int $obra_alvara_numero = null, ?int $obra_alvara_ano = null, ?string $obra_local_lote = null, ?string $obra_local_quadra = null, ?string $obra_local_bairro = null)
    {
        $this
            ->setCcm($ccm)
            ->setCnpj($cnpj)
            ->setCpf($cpf)
            ->setSenha($senha)
            ->setAliquota($aliquota)
            ->setServico($servico)
            ->setSituacao($situacao)
            ->setValor($valor)
            ->setBase($base)
            ->setIr($ir)
            ->setPis($pis)
            ->setCofins($cofins)
            ->setCsll($csll)
            ->setInss($inss)
            ->setRetencao_iss($retencao_iss)
            ->setDescricaoNF($descricaoNF)
            ->setTomador_tipo($tomador_tipo)
            ->setTomador_cnpj($tomador_cnpj)
            ->setTomador_email($tomador_email)
            ->setTomador_ie($tomador_ie)
            ->setTomador_im($tomador_im)
            ->setTomador_razao($tomador_razao)
            ->setTomador_endereco($tomador_endereco)
            ->setTomador_numero($tomador_numero)
            ->setTomador_complemento($tomador_complemento)
            ->setTomador_bairro($tomador_bairro)
            ->setTomador_CEP($tomador_CEP)
            ->setTomador_cod_cidade($tomador_cod_cidade)
            ->setTomador_fone($tomador_fone)
            ->setTomador_ramal($tomador_ramal)
            ->setTomador_fax($tomador_fax)
            ->setCodigo_obra($codigo_obra)
            ->setObra_art($obra_art)
            ->setIncentivo_fiscal($incentivo_fiscal)
            ->setCod_municipio_prestacao_servico($cod_municipio_prestacao_servico)
            ->setCod_pais_prestacao_servico($cod_pais_prestacao_servico)
            ->setCod_municipio_incidencia($cod_municipio_incidencia)
            ->setRps_num($rps_num)
            ->setRps_serie($rps_serie)
            ->setRps_tipo($rps_tipo)
            ->setRps_dia($rps_dia)
            ->setRps_mes($rps_mes)
            ->setRps_ano($rps_ano)
            ->setNfse_substituida($nfse_substituida)
            ->setRps_substituido($rps_substituido)
            ->setObra_alvara_numero($obra_alvara_numero)
            ->setObra_alvara_ano($obra_alvara_ano)
            ->setObra_local_lote($obra_local_lote)
            ->setObra_local_quadra($obra_local_quadra)
            ->setObra_local_bairro($obra_local_bairro);
    }
    /**
     * Get ccm value
     * @return int
     */
    public function getCcm(): int
    {
        return $this->ccm;
    }
    /**
     * Set ccm value
     * @param int $ccm
     * @return \StructType\TcDescricaoRps
     */
    public function setCcm(int $ccm): self
    {
        // validation for constraint: int
        if (!is_null($ccm) && !(is_int($ccm) || ctype_digit($ccm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccm, true), gettype($ccm)), __LINE__);
        }
        $this->ccm = $ccm;
        
        return $this;
    }
    /**
     * Get cnpj value
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    /**
     * Set cnpj value
     * @param string $cnpj
     * @return \StructType\TcDescricaoRps
     */
    public function setCnpj(string $cnpj): self
    {
        // validation for constraint: string
        if (!is_null($cnpj) && !is_string($cnpj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cnpj, true), gettype($cnpj)), __LINE__);
        }
        $this->cnpj = $cnpj;
        
        return $this;
    }
    /**
     * Get cpf value
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }
    /**
     * Set cpf value
     * @param string $cpf
     * @return \StructType\TcDescricaoRps
     */
    public function setCpf(string $cpf): self
    {
        // validation for constraint: string
        if (!is_null($cpf) && !is_string($cpf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpf, true), gettype($cpf)), __LINE__);
        }
        $this->cpf = $cpf;
        
        return $this;
    }
    /**
     * Get senha value
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }
    /**
     * Set senha value
     * @param string $senha
     * @return \StructType\TcDescricaoRps
     */
    public function setSenha(string $senha): self
    {
        // validation for constraint: string
        if (!is_null($senha) && !is_string($senha)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senha, true), gettype($senha)), __LINE__);
        }
        $this->senha = $senha;
        
        return $this;
    }
    /**
     * Get aliquota value
     * @return string
     */
    public function getAliquota(): string
    {
        return $this->aliquota;
    }
    /**
     * Set aliquota value
     * @param string $aliquota
     * @return \StructType\TcDescricaoRps
     */
    public function setAliquota(string $aliquota): self
    {
        // validation for constraint: string
        if (!is_null($aliquota) && !is_string($aliquota)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aliquota, true), gettype($aliquota)), __LINE__);
        }
        $this->aliquota = $aliquota;
        
        return $this;
    }
    /**
     * Get servico value
     * @return int
     */
    public function getServico(): int
    {
        return $this->servico;
    }
    /**
     * Set servico value
     * @param int $servico
     * @return \StructType\TcDescricaoRps
     */
    public function setServico(int $servico): self
    {
        // validation for constraint: int
        if (!is_null($servico) && !(is_int($servico) || ctype_digit($servico))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($servico, true), gettype($servico)), __LINE__);
        }
        $this->servico = $servico;
        
        return $this;
    }
    /**
     * Get situacao value
     * @return string
     */
    public function getSituacao(): string
    {
        return $this->situacao;
    }
    /**
     * Set situacao value
     * @param string $situacao
     * @return \StructType\TcDescricaoRps
     */
    public function setSituacao(string $situacao): self
    {
        // validation for constraint: string
        if (!is_null($situacao) && !is_string($situacao)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($situacao, true), gettype($situacao)), __LINE__);
        }
        $this->situacao = $situacao;
        
        return $this;
    }
    /**
     * Get valor value
     * @return string
     */
    public function getValor(): string
    {
        return $this->valor;
    }
    /**
     * Set valor value
     * @param string $valor
     * @return \StructType\TcDescricaoRps
     */
    public function setValor(string $valor): self
    {
        // validation for constraint: string
        if (!is_null($valor) && !is_string($valor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        $this->valor = $valor;
        
        return $this;
    }
    /**
     * Get base value
     * @return string
     */
    public function getBase(): string
    {
        return $this->base;
    }
    /**
     * Set base value
     * @param string $base
     * @return \StructType\TcDescricaoRps
     */
    public function setBase(string $base): self
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($base, true), gettype($base)), __LINE__);
        }
        $this->base = $base;
        
        return $this;
    }
    /**
     * Get ir value
     * @return string
     */
    public function getIr(): string
    {
        return $this->ir;
    }
    /**
     * Set ir value
     * @param string $ir
     * @return \StructType\TcDescricaoRps
     */
    public function setIr(string $ir): self
    {
        // validation for constraint: string
        if (!is_null($ir) && !is_string($ir)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ir, true), gettype($ir)), __LINE__);
        }
        $this->ir = $ir;
        
        return $this;
    }
    /**
     * Get pis value
     * @return string
     */
    public function getPis(): string
    {
        return $this->pis;
    }
    /**
     * Set pis value
     * @param string $pis
     * @return \StructType\TcDescricaoRps
     */
    public function setPis(string $pis): self
    {
        // validation for constraint: string
        if (!is_null($pis) && !is_string($pis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pis, true), gettype($pis)), __LINE__);
        }
        $this->pis = $pis;
        
        return $this;
    }
    /**
     * Get cofins value
     * @return string
     */
    public function getCofins(): string
    {
        return $this->cofins;
    }
    /**
     * Set cofins value
     * @param string $cofins
     * @return \StructType\TcDescricaoRps
     */
    public function setCofins(string $cofins): self
    {
        // validation for constraint: string
        if (!is_null($cofins) && !is_string($cofins)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cofins, true), gettype($cofins)), __LINE__);
        }
        $this->cofins = $cofins;
        
        return $this;
    }
    /**
     * Get csll value
     * @return string
     */
    public function getCsll(): string
    {
        return $this->csll;
    }
    /**
     * Set csll value
     * @param string $csll
     * @return \StructType\TcDescricaoRps
     */
    public function setCsll(string $csll): self
    {
        // validation for constraint: string
        if (!is_null($csll) && !is_string($csll)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csll, true), gettype($csll)), __LINE__);
        }
        $this->csll = $csll;
        
        return $this;
    }
    /**
     * Get inss value
     * @return string
     */
    public function getInss(): string
    {
        return $this->inss;
    }
    /**
     * Set inss value
     * @param string $inss
     * @return \StructType\TcDescricaoRps
     */
    public function setInss(string $inss): self
    {
        // validation for constraint: string
        if (!is_null($inss) && !is_string($inss)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inss, true), gettype($inss)), __LINE__);
        }
        $this->inss = $inss;
        
        return $this;
    }
    /**
     * Get retencao_iss value
     * @return string
     */
    public function getRetencao_iss(): string
    {
        return $this->retencao_iss;
    }
    /**
     * Set retencao_iss value
     * @param string $retencao_iss
     * @return \StructType\TcDescricaoRps
     */
    public function setRetencao_iss(string $retencao_iss): self
    {
        // validation for constraint: string
        if (!is_null($retencao_iss) && !is_string($retencao_iss)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retencao_iss, true), gettype($retencao_iss)), __LINE__);
        }
        $this->retencao_iss = $retencao_iss;
        
        return $this;
    }
    /**
     * Get descricaoNF value
     * @return string
     */
    public function getDescricaoNF(): string
    {
        return $this->descricaoNF;
    }
    /**
     * Set descricaoNF value
     * @param string $descricaoNF
     * @return \StructType\TcDescricaoRps
     */
    public function setDescricaoNF(string $descricaoNF): self
    {
        // validation for constraint: string
        if (!is_null($descricaoNF) && !is_string($descricaoNF)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descricaoNF, true), gettype($descricaoNF)), __LINE__);
        }
        $this->descricaoNF = $descricaoNF;
        
        return $this;
    }
    /**
     * Get tomador_tipo value
     * @return int
     */
    public function getTomador_tipo(): int
    {
        return $this->tomador_tipo;
    }
    /**
     * Set tomador_tipo value
     * @param int $tomador_tipo
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_tipo(int $tomador_tipo): self
    {
        // validation for constraint: int
        if (!is_null($tomador_tipo) && !(is_int($tomador_tipo) || ctype_digit($tomador_tipo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tomador_tipo, true), gettype($tomador_tipo)), __LINE__);
        }
        $this->tomador_tipo = $tomador_tipo;
        
        return $this;
    }
    /**
     * Get tomador_cnpj value
     * @return string
     */
    public function getTomador_cnpj(): string
    {
        return $this->tomador_cnpj;
    }
    /**
     * Set tomador_cnpj value
     * @param string $tomador_cnpj
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_cnpj(string $tomador_cnpj): self
    {
        // validation for constraint: string
        if (!is_null($tomador_cnpj) && !is_string($tomador_cnpj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_cnpj, true), gettype($tomador_cnpj)), __LINE__);
        }
        $this->tomador_cnpj = $tomador_cnpj;
        
        return $this;
    }
    /**
     * Get tomador_email value
     * @return string
     */
    public function getTomador_email(): string
    {
        return $this->tomador_email;
    }
    /**
     * Set tomador_email value
     * @param string $tomador_email
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_email(string $tomador_email): self
    {
        // validation for constraint: string
        if (!is_null($tomador_email) && !is_string($tomador_email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_email, true), gettype($tomador_email)), __LINE__);
        }
        $this->tomador_email = $tomador_email;
        
        return $this;
    }
    /**
     * Get tomador_ie value
     * @return string
     */
    public function getTomador_ie(): string
    {
        return $this->tomador_ie;
    }
    /**
     * Set tomador_ie value
     * @param string $tomador_ie
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_ie(string $tomador_ie): self
    {
        // validation for constraint: string
        if (!is_null($tomador_ie) && !is_string($tomador_ie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_ie, true), gettype($tomador_ie)), __LINE__);
        }
        $this->tomador_ie = $tomador_ie;
        
        return $this;
    }
    /**
     * Get tomador_im value
     * @return string
     */
    public function getTomador_im(): string
    {
        return $this->tomador_im;
    }
    /**
     * Set tomador_im value
     * @param string $tomador_im
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_im(string $tomador_im): self
    {
        // validation for constraint: string
        if (!is_null($tomador_im) && !is_string($tomador_im)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_im, true), gettype($tomador_im)), __LINE__);
        }
        $this->tomador_im = $tomador_im;
        
        return $this;
    }
    /**
     * Get tomador_razao value
     * @return string
     */
    public function getTomador_razao(): string
    {
        return $this->tomador_razao;
    }
    /**
     * Set tomador_razao value
     * @param string $tomador_razao
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_razao(string $tomador_razao): self
    {
        // validation for constraint: string
        if (!is_null($tomador_razao) && !is_string($tomador_razao)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_razao, true), gettype($tomador_razao)), __LINE__);
        }
        $this->tomador_razao = $tomador_razao;
        
        return $this;
    }
    /**
     * Get tomador_endereco value
     * @return string
     */
    public function getTomador_endereco(): string
    {
        return $this->tomador_endereco;
    }
    /**
     * Set tomador_endereco value
     * @param string $tomador_endereco
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_endereco(string $tomador_endereco): self
    {
        // validation for constraint: string
        if (!is_null($tomador_endereco) && !is_string($tomador_endereco)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_endereco, true), gettype($tomador_endereco)), __LINE__);
        }
        $this->tomador_endereco = $tomador_endereco;
        
        return $this;
    }
    /**
     * Get tomador_numero value
     * @return string
     */
    public function getTomador_numero(): string
    {
        return $this->tomador_numero;
    }
    /**
     * Set tomador_numero value
     * @param string $tomador_numero
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_numero(string $tomador_numero): self
    {
        // validation for constraint: string
        if (!is_null($tomador_numero) && !is_string($tomador_numero)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_numero, true), gettype($tomador_numero)), __LINE__);
        }
        $this->tomador_numero = $tomador_numero;
        
        return $this;
    }
    /**
     * Get tomador_complemento value
     * @return string
     */
    public function getTomador_complemento(): string
    {
        return $this->tomador_complemento;
    }
    /**
     * Set tomador_complemento value
     * @param string $tomador_complemento
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_complemento(string $tomador_complemento): self
    {
        // validation for constraint: string
        if (!is_null($tomador_complemento) && !is_string($tomador_complemento)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_complemento, true), gettype($tomador_complemento)), __LINE__);
        }
        $this->tomador_complemento = $tomador_complemento;
        
        return $this;
    }
    /**
     * Get tomador_bairro value
     * @return string
     */
    public function getTomador_bairro(): string
    {
        return $this->tomador_bairro;
    }
    /**
     * Set tomador_bairro value
     * @param string $tomador_bairro
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_bairro(string $tomador_bairro): self
    {
        // validation for constraint: string
        if (!is_null($tomador_bairro) && !is_string($tomador_bairro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_bairro, true), gettype($tomador_bairro)), __LINE__);
        }
        $this->tomador_bairro = $tomador_bairro;
        
        return $this;
    }
    /**
     * Get tomador_CEP value
     * @return string
     */
    public function getTomador_CEP(): string
    {
        return $this->tomador_CEP;
    }
    /**
     * Set tomador_CEP value
     * @param string $tomador_CEP
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_CEP(string $tomador_CEP): self
    {
        // validation for constraint: string
        if (!is_null($tomador_CEP) && !is_string($tomador_CEP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_CEP, true), gettype($tomador_CEP)), __LINE__);
        }
        $this->tomador_CEP = $tomador_CEP;
        
        return $this;
    }
    /**
     * Get tomador_cod_cidade value
     * @return string
     */
    public function getTomador_cod_cidade(): string
    {
        return $this->tomador_cod_cidade;
    }
    /**
     * Set tomador_cod_cidade value
     * @param string $tomador_cod_cidade
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_cod_cidade(string $tomador_cod_cidade): self
    {
        // validation for constraint: string
        if (!is_null($tomador_cod_cidade) && !is_string($tomador_cod_cidade)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_cod_cidade, true), gettype($tomador_cod_cidade)), __LINE__);
        }
        $this->tomador_cod_cidade = $tomador_cod_cidade;
        
        return $this;
    }
    /**
     * Get tomador_fone value
     * @return string
     */
    public function getTomador_fone(): string
    {
        return $this->tomador_fone;
    }
    /**
     * Set tomador_fone value
     * @param string $tomador_fone
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_fone(string $tomador_fone): self
    {
        // validation for constraint: string
        if (!is_null($tomador_fone) && !is_string($tomador_fone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_fone, true), gettype($tomador_fone)), __LINE__);
        }
        $this->tomador_fone = $tomador_fone;
        
        return $this;
    }
    /**
     * Get tomador_ramal value
     * @return string
     */
    public function getTomador_ramal(): string
    {
        return $this->tomador_ramal;
    }
    /**
     * Set tomador_ramal value
     * @param string $tomador_ramal
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_ramal(string $tomador_ramal): self
    {
        // validation for constraint: string
        if (!is_null($tomador_ramal) && !is_string($tomador_ramal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_ramal, true), gettype($tomador_ramal)), __LINE__);
        }
        $this->tomador_ramal = $tomador_ramal;
        
        return $this;
    }
    /**
     * Get tomador_fax value
     * @return string
     */
    public function getTomador_fax(): string
    {
        return $this->tomador_fax;
    }
    /**
     * Set tomador_fax value
     * @param string $tomador_fax
     * @return \StructType\TcDescricaoRps
     */
    public function setTomador_fax(string $tomador_fax): self
    {
        // validation for constraint: string
        if (!is_null($tomador_fax) && !is_string($tomador_fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tomador_fax, true), gettype($tomador_fax)), __LINE__);
        }
        $this->tomador_fax = $tomador_fax;
        
        return $this;
    }
    /**
     * Get codigo_obra value
     * @return string|null
     */
    public function getCodigo_obra(): ?string
    {
        return $this->codigo_obra;
    }
    /**
     * Set codigo_obra value
     * @param string $codigo_obra
     * @return \StructType\TcDescricaoRps
     */
    public function setCodigo_obra(?string $codigo_obra = null): self
    {
        // validation for constraint: string
        if (!is_null($codigo_obra) && !is_string($codigo_obra)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigo_obra, true), gettype($codigo_obra)), __LINE__);
        }
        $this->codigo_obra = $codigo_obra;
        
        return $this;
    }
    /**
     * Get obra_art value
     * @return string|null
     */
    public function getObra_art(): ?string
    {
        return $this->obra_art;
    }
    /**
     * Set obra_art value
     * @param string $obra_art
     * @return \StructType\TcDescricaoRps
     */
    public function setObra_art(?string $obra_art = null): self
    {
        // validation for constraint: string
        if (!is_null($obra_art) && !is_string($obra_art)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obra_art, true), gettype($obra_art)), __LINE__);
        }
        $this->obra_art = $obra_art;
        
        return $this;
    }
    /**
     * Get incentivo_fiscal value
     * @return int|null
     */
    public function getIncentivo_fiscal(): ?int
    {
        return $this->incentivo_fiscal;
    }
    /**
     * Set incentivo_fiscal value
     * @param int $incentivo_fiscal
     * @return \StructType\TcDescricaoRps
     */
    public function setIncentivo_fiscal(?int $incentivo_fiscal = null): self
    {
        // validation for constraint: int
        if (!is_null($incentivo_fiscal) && !(is_int($incentivo_fiscal) || ctype_digit($incentivo_fiscal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($incentivo_fiscal, true), gettype($incentivo_fiscal)), __LINE__);
        }
        $this->incentivo_fiscal = $incentivo_fiscal;
        
        return $this;
    }
    /**
     * Get cod_municipio_prestacao_servico value
     * @return string|null
     */
    public function getCod_municipio_prestacao_servico(): ?string
    {
        return $this->cod_municipio_prestacao_servico;
    }
    /**
     * Set cod_municipio_prestacao_servico value
     * @param string $cod_municipio_prestacao_servico
     * @return \StructType\TcDescricaoRps
     */
    public function setCod_municipio_prestacao_servico(?string $cod_municipio_prestacao_servico = null): self
    {
        // validation for constraint: string
        if (!is_null($cod_municipio_prestacao_servico) && !is_string($cod_municipio_prestacao_servico)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cod_municipio_prestacao_servico, true), gettype($cod_municipio_prestacao_servico)), __LINE__);
        }
        $this->cod_municipio_prestacao_servico = $cod_municipio_prestacao_servico;
        
        return $this;
    }
    /**
     * Get cod_pais_prestacao_servico value
     * @return string|null
     */
    public function getCod_pais_prestacao_servico(): ?string
    {
        return $this->cod_pais_prestacao_servico;
    }
    /**
     * Set cod_pais_prestacao_servico value
     * @param string $cod_pais_prestacao_servico
     * @return \StructType\TcDescricaoRps
     */
    public function setCod_pais_prestacao_servico(?string $cod_pais_prestacao_servico = null): self
    {
        // validation for constraint: string
        if (!is_null($cod_pais_prestacao_servico) && !is_string($cod_pais_prestacao_servico)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cod_pais_prestacao_servico, true), gettype($cod_pais_prestacao_servico)), __LINE__);
        }
        $this->cod_pais_prestacao_servico = $cod_pais_prestacao_servico;
        
        return $this;
    }
    /**
     * Get cod_municipio_incidencia value
     * @return string|null
     */
    public function getCod_municipio_incidencia(): ?string
    {
        return $this->cod_municipio_incidencia;
    }
    /**
     * Set cod_municipio_incidencia value
     * @param string $cod_municipio_incidencia
     * @return \StructType\TcDescricaoRps
     */
    public function setCod_municipio_incidencia(?string $cod_municipio_incidencia = null): self
    {
        // validation for constraint: string
        if (!is_null($cod_municipio_incidencia) && !is_string($cod_municipio_incidencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cod_municipio_incidencia, true), gettype($cod_municipio_incidencia)), __LINE__);
        }
        $this->cod_municipio_incidencia = $cod_municipio_incidencia;
        
        return $this;
    }
    /**
     * Get rps_num value
     * @return int|null
     */
    public function getRps_num(): ?int
    {
        return $this->rps_num;
    }
    /**
     * Set rps_num value
     * @param int $rps_num
     * @return \StructType\TcDescricaoRps
     */
    public function setRps_num(?int $rps_num = null): self
    {
        // validation for constraint: int
        if (!is_null($rps_num) && !(is_int($rps_num) || ctype_digit($rps_num))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rps_num, true), gettype($rps_num)), __LINE__);
        }
        $this->rps_num = $rps_num;
        
        return $this;
    }
    /**
     * Get rps_serie value
     * @return string|null
     */
    public function getRps_serie(): ?string
    {
        return $this->rps_serie;
    }
    /**
     * Set rps_serie value
     * @param string $rps_serie
     * @return \StructType\TcDescricaoRps
     */
    public function setRps_serie(?string $rps_serie = null): self
    {
        // validation for constraint: string
        if (!is_null($rps_serie) && !is_string($rps_serie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rps_serie, true), gettype($rps_serie)), __LINE__);
        }
        $this->rps_serie = $rps_serie;
        
        return $this;
    }
    /**
     * Get rps_tipo value
     * @return int|null
     */
    public function getRps_tipo(): ?int
    {
        return $this->rps_tipo;
    }
    /**
     * Set rps_tipo value
     * @param int $rps_tipo
     * @return \StructType\TcDescricaoRps
     */
    public function setRps_tipo(?int $rps_tipo = null): self
    {
        // validation for constraint: int
        if (!is_null($rps_tipo) && !(is_int($rps_tipo) || ctype_digit($rps_tipo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rps_tipo, true), gettype($rps_tipo)), __LINE__);
        }
        $this->rps_tipo = $rps_tipo;
        
        return $this;
    }
    /**
     * Get rps_dia value
     * @return int|null
     */
    public function getRps_dia(): ?int
    {
        return $this->rps_dia;
    }
    /**
     * Set rps_dia value
     * @param int $rps_dia
     * @return \StructType\TcDescricaoRps
     */
    public function setRps_dia(?int $rps_dia = null): self
    {
        // validation for constraint: int
        if (!is_null($rps_dia) && !(is_int($rps_dia) || ctype_digit($rps_dia))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rps_dia, true), gettype($rps_dia)), __LINE__);
        }
        $this->rps_dia = $rps_dia;
        
        return $this;
    }
    /**
     * Get rps_mes value
     * @return int|null
     */
    public function getRps_mes(): ?int
    {
        return $this->rps_mes;
    }
    /**
     * Set rps_mes value
     * @param int $rps_mes
     * @return \StructType\TcDescricaoRps
     */
    public function setRps_mes(?int $rps_mes = null): self
    {
        // validation for constraint: int
        if (!is_null($rps_mes) && !(is_int($rps_mes) || ctype_digit($rps_mes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rps_mes, true), gettype($rps_mes)), __LINE__);
        }
        $this->rps_mes = $rps_mes;
        
        return $this;
    }
    /**
     * Get rps_ano value
     * @return int|null
     */
    public function getRps_ano(): ?int
    {
        return $this->rps_ano;
    }
    /**
     * Set rps_ano value
     * @param int $rps_ano
     * @return \StructType\TcDescricaoRps
     */
    public function setRps_ano(?int $rps_ano = null): self
    {
        // validation for constraint: int
        if (!is_null($rps_ano) && !(is_int($rps_ano) || ctype_digit($rps_ano))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rps_ano, true), gettype($rps_ano)), __LINE__);
        }
        $this->rps_ano = $rps_ano;
        
        return $this;
    }
    /**
     * Get nfse_substituida value
     * @return int|null
     */
    public function getNfse_substituida(): ?int
    {
        return $this->nfse_substituida;
    }
    /**
     * Set nfse_substituida value
     * @param int $nfse_substituida
     * @return \StructType\TcDescricaoRps
     */
    public function setNfse_substituida(?int $nfse_substituida = null): self
    {
        // validation for constraint: int
        if (!is_null($nfse_substituida) && !(is_int($nfse_substituida) || ctype_digit($nfse_substituida))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nfse_substituida, true), gettype($nfse_substituida)), __LINE__);
        }
        $this->nfse_substituida = $nfse_substituida;
        
        return $this;
    }
    /**
     * Get rps_substituido value
     * @return int|null
     */
    public function getRps_substituido(): ?int
    {
        return $this->rps_substituido;
    }
    /**
     * Set rps_substituido value
     * @param int $rps_substituido
     * @return \StructType\TcDescricaoRps
     */
    public function setRps_substituido(?int $rps_substituido = null): self
    {
        // validation for constraint: int
        if (!is_null($rps_substituido) && !(is_int($rps_substituido) || ctype_digit($rps_substituido))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rps_substituido, true), gettype($rps_substituido)), __LINE__);
        }
        $this->rps_substituido = $rps_substituido;
        
        return $this;
    }
    /**
     * Get obra_alvara_numero value
     * @return int|null
     */
    public function getObra_alvara_numero(): ?int
    {
        return $this->obra_alvara_numero;
    }
    /**
     * Set obra_alvara_numero value
     * @param int $obra_alvara_numero
     * @return \StructType\TcDescricaoRps
     */
    public function setObra_alvara_numero(?int $obra_alvara_numero = null): self
    {
        // validation for constraint: int
        if (!is_null($obra_alvara_numero) && !(is_int($obra_alvara_numero) || ctype_digit($obra_alvara_numero))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($obra_alvara_numero, true), gettype($obra_alvara_numero)), __LINE__);
        }
        $this->obra_alvara_numero = $obra_alvara_numero;
        
        return $this;
    }
    /**
     * Get obra_alvara_ano value
     * @return int|null
     */
    public function getObra_alvara_ano(): ?int
    {
        return $this->obra_alvara_ano;
    }
    /**
     * Set obra_alvara_ano value
     * @param int $obra_alvara_ano
     * @return \StructType\TcDescricaoRps
     */
    public function setObra_alvara_ano(?int $obra_alvara_ano = null): self
    {
        // validation for constraint: int
        if (!is_null($obra_alvara_ano) && !(is_int($obra_alvara_ano) || ctype_digit($obra_alvara_ano))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($obra_alvara_ano, true), gettype($obra_alvara_ano)), __LINE__);
        }
        $this->obra_alvara_ano = $obra_alvara_ano;
        
        return $this;
    }
    /**
     * Get obra_local_lote value
     * @return string|null
     */
    public function getObra_local_lote(): ?string
    {
        return $this->obra_local_lote;
    }
    /**
     * Set obra_local_lote value
     * @param string $obra_local_lote
     * @return \StructType\TcDescricaoRps
     */
    public function setObra_local_lote(?string $obra_local_lote = null): self
    {
        // validation for constraint: string
        if (!is_null($obra_local_lote) && !is_string($obra_local_lote)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obra_local_lote, true), gettype($obra_local_lote)), __LINE__);
        }
        $this->obra_local_lote = $obra_local_lote;
        
        return $this;
    }
    /**
     * Get obra_local_quadra value
     * @return string|null
     */
    public function getObra_local_quadra(): ?string
    {
        return $this->obra_local_quadra;
    }
    /**
     * Set obra_local_quadra value
     * @param string $obra_local_quadra
     * @return \StructType\TcDescricaoRps
     */
    public function setObra_local_quadra(?string $obra_local_quadra = null): self
    {
        // validation for constraint: string
        if (!is_null($obra_local_quadra) && !is_string($obra_local_quadra)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obra_local_quadra, true), gettype($obra_local_quadra)), __LINE__);
        }
        $this->obra_local_quadra = $obra_local_quadra;
        
        return $this;
    }
    /**
     * Get obra_local_bairro value
     * @return string|null
     */
    public function getObra_local_bairro(): ?string
    {
        return $this->obra_local_bairro;
    }
    /**
     * Set obra_local_bairro value
     * @param string $obra_local_bairro
     * @return \StructType\TcDescricaoRps
     */
    public function setObra_local_bairro(?string $obra_local_bairro = null): self
    {
        // validation for constraint: string
        if (!is_null($obra_local_bairro) && !is_string($obra_local_bairro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obra_local_bairro, true), gettype($obra_local_bairro)), __LINE__);
        }
        $this->obra_local_bairro = $obra_local_bairro;
        
        return $this;
    }
}
