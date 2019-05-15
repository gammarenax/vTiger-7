<?php
/**
 * VGS Related Module Updates
 *
 * @package        VGSRelModUpdates Module
 * @author         Conrado Maggi
 * @license        Comercial / VPL
 * @copyright      2014 VGS Global
 * @version        Release: 1.0 
 * @Contributor    Valmir Carlos Trindade - Brazilan Portuguese Translation - valmir@ttcasolucoes.com.br
 */

$languageStrings = array(
    'LBL_MODULE_NAME' =>'VGS Atualizações Módulos Relacionados',
    'notice'=>'<p> <b>Importante:</b> Este módulo permite atualizar os campos das listas de opções '
    . ' de um módulo relacionado. Lembre-se que o Usuário logado DEVE ter permissão para leitura/escrita do registro que está sendo atualizado.<br><br> As Regras de Compartilhamento e Perfil do Usuário também deverão ser válidas. Se o Usuário não tiver permissão para editar um campo, este campo não será atualizado. '
    . ' <br><br>Se a lista de opções alvo estiver baseda em Funções, por favor, certifique-se, a partir do Editor de Lista de Opções, que o Usuário tenha permissão para escolher o valor da lista.',
    'edit' => 'Editar',
    'SOURCE_MODULE_NAME'=>'Módulo Origem',
    'SOURCE_FIELD_LABEL'=>'Campo Origem',
    'SOURCE_FIELD_VALUE'=>'Valor',
    'TARGET_MODULE_NAME' => 'Módulo Alvo',
    'TARGET_FIELD_LABEL'=>'Campo Alvo',
    'TARGET_FIELD_VALUE'=>'Valor a ser definido',
    'ACTIONS'=>'Ações',
    'ADD_NEW'=>'Adicionar Novo',
    'ADD_NEW_UPDATE'=>'Adicionar rotina de atualização',
    'ADD_NEW_UPDATE_EXPLAIN'=>'Inicie selecionando seu módulo de origem, o campo lista de opções e o valor. Na sequência, selecione o módulo alvo e o campo e valor que você deseja atingir '
    . 'uma vez que o campo de origem é configurado o valor é definido.',
    'SAVE'=>'Salvar',
    'LBL_DB_INSERT_FAIL' => 'A inserção na base de dados falhou. Por favor, habilite o debug do Vtiger e verifique o log de erros',
    'ALREADY_EXISTS'=>'O dado digitado já existe',

	// Missing Fields
	'Cancel'=>'Cancelar',
    
);
$jsLanguageStrings = array(

        'JS_ERROR_LOADING_FIELDS'=>'Não é possível carregar os campos da lista',
        'JS_ERROR_LOADING_RELATED_MODULES'=>'Ocorreu um erro ao carregar os módulos relacionados', 
        'JS_ERROR_LOADING_FIELDS_VALUES'=>'Ocorreu um erro ao carregar os valores da Lista de Opções',
        'JS_ERROR_DELETING'=>'O valor digitado não pode ser apagado',
    
    
);
