<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Filesystem\File;

/**
 * User mailer.
 */
class UserMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'User';

    public function welcome($user) 
    {
    	$this->to($user->email)
    	->addTo('oseas.mendes@fameccanica.com')
    	->profile('qualityplan')
    	->emailFormat('html')
    	->template('qualityplan_email_template')
    	->layout('default')
    	->viewVars(['nome'=>$user->name])
    	->subject(sprintf('Novo Ticket Gerado, %s', $user->name));

    	$file = new File(WWW_ROOT.'img'.DS.'edit.png');

    	$this->attachments([
    		$file->name => [
    			'file' => $file->path,
    			'mimetype' => $file->mime(),
    			'ContentId' => $file->md5()

    		]
    	]);

    }


    public function tickets($ticket) 
    {
    	$this->to('saes.sistemas@gmail.com')
    	->addTo('oseas.mendes@fameccanica.com','mendes.oseas@gmail.com','marcelo.mendes@fameccanica.com')
    	->profile('qualityplan_local')
    	->emailFormat('html')
    	->template('qualityplan_email_template_ticket')
    	->layout('default')
    	->viewVars(['numeroticket'=>$ticket->id, 'descricaoresumida'=>$ticket->descricaoresumida])
    	->subject(sprintf('Novo Ticket Gerado: %d - Resumo: %s', $ticket->id,$ticket->descricaoresumida));

    	$file = new File(WWW_ROOT.'img'.DS.'edit.png');

    	$this->attachments([
    		$file->name => [
    			'file' => $file->path,
    			'mimetype' => $file->mime(),
    			'ContentId' => $file->md5()

    		]
    	]);

    }


}
