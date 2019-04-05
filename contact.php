   <?php

      require_once ('shablon/shablon.php');

      $header = file_get_contents('shablon/header.html'); //getting templates data
      $footer = file_get_contents('shablon/footer.html'); //getting templates data
      $content = new content('contact.html'); //new class instance

      $content->set('{HEADER}', $header);
       $content->set('{FOOTER}', $footer);
      $content->set('{main_text_header}', 'Contact Me');
      $content->set('{sub_text_header}', 'Have questions? I have answers.');

      $content->outContent('contact.html');

    ?>