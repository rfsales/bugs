<?php

return array(

	/** new user **/
    'subject_newuser' => 'Sua '.Config::get('application.my_bugs_app.name').' conta',
	'new_user' => 'Seu usuário foi criado corretamente '.Config::get('application.my_bugs_app.name').' em',
    'creds' => 'Você deve se logar com o email %s e senha %s.',
	
	/** issue updates **/
	'new_issue' => 'Novo issue "%s" foi atribuído ao projeto "%s"',
	'new_comment' => 'Issue "%s" no projeto "%s" tem um novo comentário',
	'assignment' => 'Novo issue "%s" foi enviado para o projeto "%s" foi atribuído a você',
	'reassignment' => 'Issue "%s" no projeto "%s" foi atribuído a você novamente',
	'update' => 'Issue "%s" no projeto "%s" foi atualizado',
	
	'submitted_by' => 'Enviado por: %s',
	'created_by' => 'Criado por: %s',
	'reassigned_by' => 'Atribuído novamente por: %s',
	'updated_by' => 'Atualizado por: %s',

	'issue_changed' => 'Issue "%s" no projeto "%s" foi %s',
	'closed' => 'fechado',
	'reopened' => 're-aberto',
	//changed, reopened, etc. by
	'by' => 'por',	
	
	/** general **/
	'more_url' => 'Encontre mais informações em: ',
	
);