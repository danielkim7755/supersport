<?php


namespace Drupal\casestudies\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;


class CaseStudiesForm extends FormBase {
  public $title1 = [];
  public $body = [];
  public $success = [];

  public function getFormId(){
     return 'casestudies';
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


    // Get Titles from each Link
    foreach($html_arr as $hlink) {
      $html = file_get_html($hlink);
      $title[] = $html->find('h1', 0)->plaintext;
    }

    //Case Study 1
    $dom = file_get_html($html_arr[0]);
    $pList = $dom->find('#md2 p');
    $h4List = $dom->find('h4');
    $currBody = trim($dom->find('#md1 h2', 0)->plaintext) . "\r\n";
    $currBody = $currBody . trim($pList[0]->plaintext) ."\n\n";
    $currBody = $currBody . trim($h4List[0]->plaintext) . "\r\n" . trim($pList[1]->plaintext) . "\n\n" . trim($pList[2]->plaintext)
                 . "\n\n" . trim($pList[3]->plaintext) . "\n\n" . trim($pList[4]->plaintext) . "\n\n" . trim($pList[5]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim(end($h4List)->plaintext) . "\r\n" . trim($pList[14]->plaintext) . "\n\n" . trim($pList[15]->plaintext) . "\n\n"
                . trim($pList[16]->plaintext) . "\n\n" . trim($pList[17]->plaintext);
    $success1[] = $currSucc;

    //Case Study 2
    $dom = file_get_html($html_arr[1]);
    $pList = $dom->find('#md2 p');
    $h4List = $dom -> find('h4');
    $currBody = trim($dom->find('#md1 h2', 0)->plaintext) . "\r\n";
    $currBody = $currBody . trim($pList[0]->plaintext) . "\n\n" . trim($h4List[0]->plaintext) . "\n\n" . trim($pList[1]->plaintext) .
                "\n\n" . trim($pList[2]->plaintext) . "\n\n" . trim($pList[3]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim(end($h4List)->plaintext) . "\r\n" . trim($pList[12]->plaintext) . "\n\n" . trim($pList[13]->plaintext);
    $success1[] = $currSucc;

    //Case Study 3
    $dom = file_get_html($html_arr[2]);
    $pList = $dom->find('#md2 p');
    $h3List = $dom -> find('#md2 h3');
    $currBody = trim($dom->find('h2', 1)->plaintext) . "\r\n";
    $currBody = $currBody . trim($h3List[0]->plaintext) . "\r\n" . trim($pList[0]->plaintext) . "\n\n" . trim($h3List[1]->plaintext) .
                "\n\n" . trim($pList[2]->plaintext) . "\n\n" . trim($pList[3]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim(end($h3List)->plaintext) . "\r\n" . trim($pList[10]->plaintext);
    $success1[] = $currSucc;

    //Case Study 4
    $dom = file_get_html($html_arr[3]);
    $pList = $dom->find('p');
    $h4List = $dom->find('h4');
    $currBody = trim($dom->find('h2', 1)->plaintext) . "\n\n\n";
    $currBody = $currBody . trim($h4List[0]->plaintext) . "\r\n" . trim($pList[0]->plaintext) . "\n\n" .
                trim($h4List[1]->plaintext) . "\r\n" . trim($pList[1]->plaintext) . "\n\n" . trim($pList[2]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim($dom->find('h2',-6)->plaintext) . "\r\n" . trim($dom->find('#md3 p', 0)->plaintext);
    $success1[] = $currSucc;

    //Case Study 5
    $dom = file_get_html($html_arr[4]);
    $pList = $dom->find('#md2 p');
    $h4List = $dom->find('#md2 h4');
    $currBody = trim($dom->find('#md1 h2', 0)->plaintext) . "\n\n";
    $currBody = $currBody . trim($h4List[0]->plaintext) . "\r\n" . trim($pList[0]->plaintext) . "\n\n" .
                trim($h4List[1]->plaintext) . "\r\n" . trim($pList[1]->plaintext) . "\n\n" . trim($pList[2]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim(end($h4List)->plaintext) . "\r\n" . trim($pList[6]->plaintext);
    $success1[] = $currSucc;

    //Case Study 6
    $dom = file_get_html($html_arr[5]);
    $pList = $dom->find('#md2 p');
    $currBody = trim($dom->find('#md1 h2', 0)->plaintext) . "\n\n" . trim($pList[0]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim($pList[1]->plaintext);
    $success1[] = $currSucc;

    //Case Study 7
    $dom = file_get_html($html_arr[6]);
    $pList = $dom->find('#md2 p');
    $h4List = $dom->find('#md2 h4');
    $currBody = trim($dom->find('#md1 h2', 0)->plaintext) . "\n\n" . trim($h4List[1]->plaintext) . "\r\n" . trim($pList[0]->plaintext);
    $body1[] = $currBody;
    $currSucc = trim(end($h4List)->plaintext) . "\r\n" . trim($pList[3]->plaintext);
    $success1[] = $currSucc;

    //Case Study 8
    $dom = file_get_html($html_arr[7]);
    $currBody = trim($dom->find('#md1 h2',0)->plaintext) . "\r\n" . substr(trim($dom->find('#md2 p', 0)->plaintext),0,547);
    $body1[] = $currBody;

    $currSucc = substr(trim($dom->find('#md2 p',0)->plaintext),549,827);
    $success1[] = $currSucc;

    //Case Study 9
    $dom = file_get_html($html_arr[8]);
    $pList = $dom->find('#md2 p');
    $currBody = trim($dom->find('#md1 h2', 0)->plaintext) . "\r\n" . trim($pList[0]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim($pList[1]->plaintext) . "\r\n" . trim($dom->find('#md2 ul',0)->plaintext);
    $success1[] = $currSucc;

    //Case Study 10
    $dom = file_get_html($html_arr[9]);
    $pList = $dom->find('#md2 p');
    $h4List = $dom->find('#md2 h4');
    $currBody = trim($dom->find('#md1 h2',0)->plaintext) . "\n\n" . trim($h4List[0]->plaintext) . "\r\n" .
                trim($pList[0]->plaintext) ."\n\n" . trim($h4List[1]->plaintext) . "\r\n" . trim($pList[1]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim(end($h4List)->plaintext) . "\r\n" . trim($pList[4]->plaintext);
    $success1[] = $currSucc;

    //Case Study 11
    $dom = file_get_html($html_arr[10]);
    $pList = $dom->find('#md2 p');
    $h4List = $dom->find('#md2 h4');
    $currBody = trim($dom->find('#md1 h2',0)->plaintext) . "\n\n" . trim($h4List[0]->plaintext) . "\r\n" .
                trim($pList[0]->plaintext) . "\n\n" . trim($h4List[1]->plaintext) . "\r\n" . trim($pList[1]->plaintext);
    $body1[] = $currBody;

    $currSucc = trim(end($h4List)->plaintext) . "\r\n" . trim($pList[4]->plaintext);
    $success1[] = $currSucc;

    $this->title1 = $title;
    $this->body = $body1;
    $this->success = $success1;

    $header = [
      'titleCol' => $this->t('Title'),
      'bodyCol' => $this->t('Body'),
      'successCol' => $this->t('Success'),
    ];

    $options = [
      1 => ['titleCol' => $title[0], 'bodyCol' => substr($body1[0],0,300), 'successCol' =>substr($success1[0],0,289)],
      2 => ['titleCol' => $title[1], 'bodyCol' => substr($body1[1],0,306), 'successCol' => substr($success1[1],0,193)],
      3 => ['titleCol' => $title[2], 'bodyCol' => substr($body1[2],0,306), 'successCol' => substr($success1[2],0,200)],
      4 => ['titleCol' => $title[3], 'bodyCol' => substr($body1[3],0,303), 'successCol' => substr($success1[3],0,200)],
      5 => ['titleCol' => $title[4], 'bodyCol' => substr($body1[4],0,300), 'successCol' => substr($success1[4],0,202)],
      6 => ['titleCol' => $title[5], 'bodyCol' => substr($body1[5],0,296), 'successCol' => substr($success1[5],0,198)],
      7 => ['titleCol' => $title[6], 'bodyCol' => substr($body1[6],0,301), 'successCol' => substr($success1[6],0,203)],
      8 => ['titleCol' => $title[7], 'bodyCol' => substr($body1[7],0,297), 'successCol' => substr($success1[7],0,201)],
      9 => ['titleCol' => $title[8], 'bodyCol' => $body1[8], 'successCol' => $success1[8]],
      10 => ['titleCol' => $title[9], 'bodyCol' => substr($body1[9],0,297), 'successCol' => substr($success1[9],0,211)],
      11 => ['titleCol' => $title[10], 'bodyCol' => substr($body1[10],0,302), 'successCol' => $success1[10]],
    ];

    $form['table'] = array(
      '#type' => 'tableselect',
      '#title' => $this->t('Case Studies'),
      '#header' => $header,
      '#options' => $options,
      '#maxlength' => 50,
    );

    $form['submit'] = array(
      '#value' => t('Submit'),
      '#type' => 'submit',
    );

    return $form;
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {

    $tableArr = $form_state->getValues();
    $table = $tableArr[0];

    // Grab checked indicies
    $arr = $tableArr['table'];

    foreach($arr as $key => $value){
      $value = $value - 1;

      if($value > -1) {
        $node = Node::create(array(
          'type' => 'case_studies',
          'title' => $this->title1[$value],
          'body' => $this->body[$value],
          'field_success' => $this->success[$value],
        ));

        $node -> save();
      }
    }
  }

}

?>
