<?php
class Paciente {

    public $Id;
    public $Nombre;
    public $Apellido;
    public $Documento;
    public $Edad;
    public $Email;
    public $ListTurnos = array();

    public function MostrarDatos()
    {
        echo 'Paciente:<br>';
        echo '-Id: ' . $this->Id . '<br>';
        echo '-Nombre: ' . $this->Nombre . '<br>';
        echo '-Apellido: ' . $this->Apellido . '<br>';
        echo '-Documento: ' . $this->Documento . '<br>';
        echo '-Edad: ' . $this->Edad . '<br>';
        echo '-Email: ' . $this->Email . '<br>';
        
            if($this->Edad >0 & $this->Edad <18){
                echo '-Paciente menor de edad.<br>';
            }elseif($this->Edad >17 & $this->Edad<75 ){
                        echo '-Paciente mayor de edad.<br>';
                    }elseif($this->Edad >74){
                                 echo '-Paciente en la tercera edad.<br>';
                            }else{
                                echo '-La edad del paciente fue indicada incorrectamente.<br>';
            }


        echo '-------------------------------------------------------<br>';
        echo 'Turnos:<br>';
        echo '-------------------------------------------------------<br>';
            foreach ($this->ListTurnos as $t) 
        {
            echo  '-Id: '. $t->Id . ' <br>';
            echo  '-Fecha: '. $t->Fecha . ' <br>';
            echo  '-Hora: '. $t->Hora . ' <br>';
            echo  '-Médico: '. $t->Medico . ' <br>';
            echo 'Especialidad:<br>';
            echo  '---Id: '. $t->Especialidad->Id . ' <br>';
            echo  '---Descripción: '. $t->Especialidad->Descripcion . ' <br>';
            echo '-------------------------------------------------------<br>';
        }
    }
}
