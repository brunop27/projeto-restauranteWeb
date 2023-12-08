<?php   

namespace Models;
use Core\Model;

class Produto extends Model{
    protected $table = 'produtos';
    protected $columns = ['id', 'nome', 'valor_un', 'unidade_medida', 'disponivel','alteracao_data', 'exclusao_data'];

}