<?php 
namespace Drupal\drupalup_form\Form;
Use Drupal\Core\Form\FormBase;
Use Drupal\Core\Form\FormStateInterface;
class SimpleForm extends FormBase
{
    public function getFormId()
    {
        return 'drupalup_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['number_1']= [
            "#type" => "textfield",
            "#title" => $this->t('First Number'),
        ];

        $form['number_2']= [
            "#type" => "textfield",
            "#title" => $this->t('second Number'),
        ];

        $form['submit']= [
            "#type" => "submit",
            "#value" => $this->t('Calculate'),
        ];
        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // drupal_set_message($form_state->getValue('number_1') + $form_state->getValue('number_2'),'warning');
        // $form_state->getValue('number_1');
        \Drupal::messenger()->addStatus($form_state->getValue('number_1'));
    }
}