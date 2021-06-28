<?php
    $nome = "Vitória";//$_POST[''] $_GET['']

    use Dompdf\Dompdf;

  require_once('dompdf/autoload.inc.php');

  $dompdf = new DOMPDF();

  $dompdf->load_html("
    <h1 style='color: #00f; font-size:80px'>
        Título do pdf
    </h1>
    <img src='https://www.des1gnon.com/wp-content/uploads/2020/03/Pexels-Banco-de-Imagens-gratis-Des1gnON.jpg'/>
    <p>Conteúdo do meu pdf</p>
    <p>Nome: $nome</p>
  ");

  $dompdf->setPaper('A4','landscape');//portrait

  $dompdf->render();

  $dompdf->stream(
      "certificado.pdf",
      array(
          "Attachment" => false//false=mostra; true=download
      )
      );
?>