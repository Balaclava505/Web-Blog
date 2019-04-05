    <?php

      require_once ('shablon/shablon.php');

      $header = file_get_contents('shablon/header.html'); //getting templates data
      $footer = file_get_contents('shablon/footer.html'); //getting templates data
      $content = new content('article.html'); //new class instance

      $content->set('{HEADER}', $header);
       $content->set('{FOOTER}', $footer);
      $content->set('{main_text_header}', '“The Bogey Beast”');
      $content->set('{sub_text_header}', 'by Flora Annie Steel');

      $content->outContent('article.html');

    ?>