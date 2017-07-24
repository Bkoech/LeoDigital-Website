<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=320, initial-scale=1" />
   <title>Leodigital Contact Form</title>
   <style type="text/css">
      #outlook a{padding:0}.ReadMsgBody{width:100%}.ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%}body,table,td,p,a,li,blockquote{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}table,td{mso-table-lspace:0pt;mso-table-rspace:0pt}img{-ms-interpolation-mode:bicubic}html,body,.body-wrap,.body-wrap-cell{margin:0;padding:0;background:#ffffff;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#464646;text-align:left}img{border:0;line-height:100%;outline:none;text-decoration:none}table{border-collapse:collapse !important}td,th{text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#464646;line-height:1.5em}b a,.footer a{text-decoration:none;color:#464646}a.blue-link{color:blue;text-decoration:underline}td.center{text-align:center}.left{text-align:left}.body-padding{padding:24px 40px 40px}.border-bottom{border-bottom:1px solid #D8D8D8}table.full-width-gmail-android{width:100% !important}.header{font-weight:bold;font-size:16px;line-height:16px;height:16px;padding-top:19px;padding-bottom:7px}.header a{color:#464646;text-decoration:none}.footer a{font-size:12px}
   </style>
   <style type="text/css" media="only screen and (max-width: 650px)">
      @media only screen and (max-width: 650px){*{font-size:16px !important}table[class*="w320"]{width:320px !important}td[class="mobile-center"],div[class="mobile-center"]{text-align:center !important}td[class*="body-padding"]{padding:20px !important}td[class="mobile"]{text-align:right;vertical-align:top}}
   </style>
</head>

<body style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none">

   <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
         <td valign="top" align="left" width="100%" style="background:repeat-x url(https://www.filepicker.io/api/file/al80sTOMSEi5bKdmCgp2) #f9f8f8;">
            <center>
               <table class="w320 full-width-gmail-android" bgcolor="#f9f8f8" background="https://www.filepicker.io/api/file/al80sTOMSEi5bKdmCgp2" style="background-color:transparent" cellpadding="0" cellspacing="0" border="0" width="100%">
                  <tr>
                     <td width="100%" height="48" valign="top">
                        <table class="full-width-gmail-android" cellspacing="0" cellpadding="0" border="0" width="100%">
                           <tr>
                              <td class="header center" width="100%">
                                 <a href="https://leodigital.com.ua">
                                    Leodigital
                                 </a>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
               <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
                  <tr>
                     <td align="center">
                        <center>
                           <table class="w320" cellspacing="0" cellpadding="0" width="500">
                              <tr>
                                 <td class="body-padding mobile-padding">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                       <tr>
                                          <td style="text-align:center; font-size:30px; padding-bottom:20px;">
                                             Поступила новая заявка!
                                          </td>
                                       </tr>
                                    </table>
                                    <table cellspacing="0" cellpadding="0" width="100%">
                                       <tr>
                                          <td class="left" style="padding-bottom:20px; text-align:left;">
                                             <b>Время:</b> {{ $date }}<br>
                                          </td>
                                       </tr>
                                    </table>
                                    <table cellspacing="0" cellpadding="0" width="100%">
                                       <tr>
                                          <td>
                                             <b>ИНФО о клиенте:</b>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="border-bottom" height="5"></td>
                                          <td class="border-bottom" height="5"></td>
                                       </tr>
                                       <tr>
                                          <td style="padding-top:5px; vertical-align:top;">
                                             <b>Имя -  </b> {{ $name }} <br>
                                             <b>Email -  </b> {{ $email }} <br>
                                             <b>Телефон -  </b> {{ $phone }} <br><br>
                                             <b>Ссылка -  </b> {{ $url }} <br>
                                          </td>
                                       </tr>
                                    </table>
                                    <br>
                                    <table cellspacing="0" cellpadding="0" width="100%">
                                       <tr>
                                          <td>
                                             <b>Пожелание клиента:</b>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="border-bottom" height="5"></td>
                                          <td class="border-bottom" height="5"></td>
                                       </tr>
                                       <tr>
                                          <td style="padding-top:5px;" class="mobile">
                                             {{ $content }}
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                        </center>
                     </td>
                  </tr>
               </table>
            </center>
         </td>
      </tr>
   </table>

</body>
</html>
