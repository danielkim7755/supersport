<?php


namespace Drupal\casestudies2\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;


class CaseStudiesForm2 extends FormBase {

  public function getFormId(){
    return 'casestudies2';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $html_arr = array('https://www.achieveinternet.com/portfolio/childrens-hospital-deploys-drupal-open-source-cms-solution',
                      'https://www.achieveinternet.com/portfolio/drupal-integration-powers-grammy-amplifier',
                      'https://www.achieveinternet.com/portfolio/ubm-fashion-built-drupal-8',
                      'https://www.achieveinternet.com/portfolio/eversporttv-deploys-custom-drupal-solution',
                      'https://www.achieveinternet.com/portfolio/dexcom',
                      'https://www.achieveinternet.com/portfolio/scripps-translational',
                      'https://www.achieveinternet.com/portfolio/amerigroup',
                      'https://www.achieveinternet.com/portfolio/trailer-park-partners-achieve',
                      'https://www.achieveinternet.com/portfolio/universal-music-group',
                      'https://www.achieveinternet.com/portfolio/magic-online',
                      'https://www.achieveinternet.com/portfolio/guardion-health-sciences',
    );



    foreach($html_arr as $hlink) {
      $html = file_get_html($hlink);

      $title[] = $html->find('h1', 0)->plaintext;
      $body1[] = trim($html->find('p', 0)->plaintext);
      $success1[] = trim($html->find('#md2 p', -2)->plaintext);
    }

    $header = [
      'titleCol' => $this->t('Title'),
      'bodyCol' => $this->t('Body'),
      'successCol' => $this->t('Success'),
    ];

    $options = [
      1 => ['titleCol' => $title[0], 'bodyCol' => $body1[0], 'successCol' => $success1[0]],
      2 => ['titleCol' => $title[1], 'bodyCol' => $body1[1], 'successCol' => $success1[1]],
      3 => ['titleCol' => $title[2], 'bodyCol' => $body1[2], 'successCol' => $success1[2]],
      4 => ['titleCol' => $title[3], 'bodyCol' => $body1[3], 'successCol' => $success1[3]],
      5 => ['titleCol' => $title[4], 'bodyCol' => $body1[4], 'successCol' => $success1[4]],
      6 => ['titleCol' => $title[5], 'bodyCol' => $body1[5], 'successCol' => $success1[5]],
      7 => ['titleCol' => $title[6], 'bodyCol' => $body1[6], 'successCol' => $success1[6]],
      8 => ['titleCol' => $title[7], 'bodyCol' => $body1[7], 'successCol' => $success1[7]],
      9 => ['titleCol' => $title[8], 'bodyCol' => $body1[8], 'successCol' => $success1[8]],
      10 => ['titleCol' => $title[9], 'bodyCol' => $body1[9], 'successCol' => $success1[9]],
      11 => ['titleCol' => $title[10], 'bodyCol' => $body1[10], 'successCol' => $success1[10]],
    ];

    $form['case_studies'] = array(
      '#type' => 'tableselect',
      '#title' => $this->t('Case Studies'),
      '#header' => $header,
      '#options' => $options,
    );

    $form['submit'] = array(
      '#value' => t('Submit'),
      '#type' => 'submit',
    );

    return $form;
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message( 'I thought this would work' );


      $node = Node::create(array(
        'type' => 'case_studies',
        'title' => 'aeg',
        'body' => 'hello',
        'field_success' => 'success stuff',
      )
    );
      $node->save();
  }


}

?>
