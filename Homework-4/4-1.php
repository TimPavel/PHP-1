
<?php
  $dom = new DOMDocument('1.0', 'utf-8');
  $ul = $dom->createElement('ul');
  $dom->appendChild($ul);

  $files = (scandir(__DIR__));

  foreach ($files as $file) {
    if(!is_dir($file) && getimagesize($file)){
      $li = $dom->createElement('li');
      $ul->appendChild($li);
      $a = $dom->createElement('a');
      $a->setAttribute('href', $file);
      $li->appendChild($a);
      $img = $dom->createElement('img');
      $img->setAttribute('src', $file);
      $a->appendChild($img);
    }
  }
 echo $dom->saveHTML();





