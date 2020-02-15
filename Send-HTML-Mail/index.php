<?php
if (isset($_POST['name'])) {
  $to = $_POST['mail']; // Déclaration de l'adresse de destination.
  $passage_ligne = "\n";
  //=====Déclaration des messages au format texte et au format HTML.
  $message_txt = $_POST['name'] ."&nbsp vous a envoyé une carte de voeux !".$passage_ligne."Suivez ce lien pour la voir :".$passage_ligne."https://lucasv.promo-24.codeur.online/carte-de-voeux/";
  $message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
  .ReadMsgBody { width:100%; }
  .ExternalClass { width:100%; }
  .ExternalClass * { line-height:100%; }
  body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
  table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
  img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
  p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
    @-ms-viewport { width:320px; }
    @viewport { width:320px; }
  }</style><!--<![endif]--><!--[if mso]>
  <xml>
  <o:OfficeDocumentSettings>
  <o:AllowPNG/>
  <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
  </xml>
  <![endif]--><!--[if lte mso 11]>
  <style type="text/css">
  .outlook-group-fix { width:100% !important; }
  </style>
  <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
  .mj-column-per-100 { width:100% !important; max-width: 100%; }
  }</style><style type="text/css"></style></head>
  <body style="background-color:#d7dde5;">
  <table bgcolor="#2A2A2C" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td background="" bgcolor="#1A2533" valign="top">
      <!--[if gte mso 9]>
      <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
      <v:fill type="tile" src="https://i.imgur.com/YJOX1PC.png" color="#7b89eb" />
      <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
      <![endif]-->
      <div>
        <table align="center" width="590" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="30" style="font-size:30px; line-height: 30px;"></td>
            </tr>
            <!--logo-->
            <tr>
              <td align="center" style="text-align: center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT4RPPdomThZWW51j9DXjV-uCw8RMotb2NK4pdxYceNe8G_V4Ft" alt="logo">
              </td>
            </tr>
            <tr>
              <td height="30" style="font-size:30px; line-height: 30px;"></td>
            </tr>
        </table>
      </div>
      <!--[if gte mso 9]>
      </v:textbox>
      </v:rect>
      <![endif]-->
    </td>
  </tr>
  <tr>
    <td>
      <div>
        <table align="center" width="590" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
          <!-- Gros Text -->
          <tr>
            <td align="center" style="text-align: center; color:lightgrey;">
              <p style="font-weight: bold; font-size: 32px;">You received a Wish Card !</p>
              <p style="font-size: 24px;"></p>
              <hr>
            </td>
          </tr>
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
          <!--message-->
          <tr>
            <td align="center" style="text-align: center; color:lightgrey;">
              <p style="font-size: 24px">Hello ,'. $_POST['name'] .'</p>
              <p>AnyTransfer send you a file from ,'. $_POST['mail'] .'</p>
              <hr>
            </td>
          </tr>
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
          <tr>
            <td align="center" style="text-align: center; color:lightgrey;">
              <p>Check our site to download your content.</p>
                <div><!--[if mso]>
                  <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:200px;" arcsize="10%" strokecolor="#131B25" fillcolor="#1A2533">
                    <w:anchorlock/>
                    <center style="color:#ffffff;font-family:sans-serif;font-size:13px;font-weight:bold;">AnyTransfer Me !</center>
                  </v:roundrect>
                <![endif]-->
                <a href="http://google.com"style="background-color:#1A2533;border:1px solid #131B25;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;mso-hide:all;">
                  AnyTransfer Me !
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
          <tr>
            <td height="30" style="font-size:30px; line-height: 30px;"></td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  <tr>
    <td background="" bgcolor="#1A2533" valign="top">
      <!--[if gte mso 9]>
      <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
      <v:fill type="tile" src="https://i.imgur.com/YJOX1PC.png" color="#7b89eb" />
      <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
      <![endif]-->
      <div>
        <table align="center" width="590" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="30" style="font-size:30px; line-height: 30px;"></td>
            </tr>
            <!--logo-->
            <tr>
              <td align="center" style="text-align: center; color: lightgrey;">
                <p>Delivered by AnyTransfer</p>
              </td>
            </tr>

            <tr>
              <td height="30" style="font-size:30px; line-height: 30px;"></td>
            </tr>
        </table>
      </div>
      <!--[if gte mso 9]>
      </v:textbox>
      </v:rect>
      <![endif]-->
    </td>
  </tr>
  </table>
  </body></html>';
  //=====Création de la boundary.
  $boundary = "-----=".md5(rand());
  $boundary_alt = "-----=".md5(rand());
  //=====Définition du sujet.
  $sujet = $_POST['name']." vous a envoyé une carte de voeux !";
  //=====Création du header de l'e-mail.
  $header = "From: <x-mass@card.net>".$passage_ligne;
  $header.= "Reply-to: <x-mass@card.net>".$passage_ligne;
  $header.= "MIME-Version: 1.0".$passage_ligne;
  $header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
  //=====Création du message.
  $message = $passage_ligne."--".$boundary.$passage_ligne;
  $message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
  $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
  //=====Ajout du message au format texte.
  $message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
  $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message.= $passage_ligne.$message_txt.$passage_ligne;
  $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
  //=====Ajout du message au format HTML.
  $message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
  $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message.= $passage_ligne.$message_html.$passage_ligne;
  //=====On ferme la boundary alternative.
  $message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
  //==========
  $message.= $passage_ligne."--".$boundary.$passage_ligne;
  //=====Envoi de l'e-mail.
  mail($to,$sujet,$message,$header);

}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test-mail</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Test-Mail-Styliser</h1>
    </header>
    <section>
      <form class="form-test" action="index.php" method="post">
        <input type="text" placeholder="nom" name="name" value=""><br><br>
        <input type="email" placeholder="your mail" name="mail" value=""><br><br>
        <input id="send-mail" type="submit" name="submit" value="Send">
      </form>
    </section>
  </body>
</html>
