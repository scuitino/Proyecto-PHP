<?php 
 
class RegionSingleton extends CApplicationComponent
{
    private $_model=null;
    
    public function init(){
        parent::init();
        Yii::app()->region->onForestRan = array($this, 'eventHandler1');
    }

    public function eventHandler1($event) {
        echo "JOJO";
        var_dump($event->sender);
        $emailOk = $this->mailsend('sandinosaso@gmail.com','sandinosaso@gmail.com','prueba forestRan','prueba forestRan');   
    }

    public function mailsend($to,$from,$subject,$message){
        $mail=Yii::app()->Smtpmail;
        $mail->SetFrom($from, 'From NAme');
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->AddAddress($to, "");
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }else {
            echo "Message sent!";
        }
    }

    public function onForestRan($event){
        $this->raiseEvent('onForestRan', $event);
    }
 
    public function setModel($id)
    {
        $this->_model=TblRegion::model()->findByPk($id);
    }
 
    public function getModel()
    {
        if (!$this->_model)
        {
            if (isset($_GET['region']))
                $this->_model=Region::model()->findByAttributes(array('url_name'=> $_GET['region']));
            else
                $this->_model=Region::model()->find();
        }
        return $this->_model;
    }
 
    public function getId()
    {
        return $this->model->id;
    }
 
    public function getName()
    {
        return $this->model->name;
    }

}