<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;

class ApplicationType extends AbstractType{
/**
    * Permet d'avoir la configuration de base d'un champ
    *
    * @param string $label
    * @param string $placeholder
    * @param array $options
    * @return array
    */
    protected function getConfiguration($label, $placeholder,$option=[])
    {
        return array_merge(['label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ],$option);

    }
    protected function getConfigurationPassWord($label, $placeholder,$password,$option=[])
    {
        return array_merge(['label' => $label,
            'attr' => [
                'placeholder' => $placeholder,
                 'onkeyup' => $password
            ]
        ],$option);
     
    }
}
?>