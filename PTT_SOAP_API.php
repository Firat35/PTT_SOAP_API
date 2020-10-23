<?php 
$url = 'https://pttws.ptt.gov.tr/PttVeriYuklemeTest/services/Sorgu?wsdl=kabulEkle2';

$post = '<?xml version="1.0"?>
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:kab="http://kabul.ptt.gov.tr" xmlns:xsd="http://kabul.ptt.gov.tr/xsd">
   <soap:Header/>
   <soap:Body>
      <kab:kabulEkle2>
         <!--Optional:-->
         <kab:input>
            <!--Zero or more repetitions:-->
            <xsd:dongu>
               <!--Optional:-->
               <xsd:aAdres>adres</xsd:aAdres>
               <!--Optional:-->
               <xsd:aAdres2></xsd:aAdres2>
               <!--Optional:-->
               <xsd:aAdres3></xsd:aAdres3>
               <!--Optional:-->
               <xsd:aIlKodu></xsd:aIlKodu>
               <!--Optional:-->
               <xsd:aIlKodu2></xsd:aIlKodu2>
               <!--Optional:-->
               <xsd:aIlKodu3></xsd:aIlKodu3>
               <!--Optional:-->
               <xsd:aIlceKodu></xsd:aIlceKodu>
               <!--Optional:-->
               <xsd:aIlceKodu2></xsd:aIlceKodu2>
               <!--Optional:-->
               <xsd:aIlceKodu3></xsd:aIlceKodu3>
               <!--Optional:-->
               <xsd:agirlik>1</xsd:agirlik>
               <!--Optional:-->
               <xsd:aliciAdi>alici</xsd:aliciAdi>
               <!--Optional:-->
               <xsd:aliciAdi2></xsd:aliciAdi2>
               <!--Optional:-->
               <xsd:aliciAdi3></xsd:aliciAdi3>
               <!--Optional:-->
               <xsd:aliciEmail></xsd:aliciEmail>
               <!--Optional:-->
               <xsd:aliciEmail2></xsd:aliciEmail2>
               <!--Optional:-->
               <xsd:aliciEmail3></xsd:aliciEmail3>
               <!--Optional:-->
               <xsd:aliciIlAdi>ANKARA</xsd:aliciIlAdi>
               <!--Optional:-->
               <xsd:aliciIlAdi2></xsd:aliciIlAdi2>
               <!--Optional:-->
               <xsd:aliciIlAdi3></xsd:aliciIlAdi3>
               <!--Optional:-->
               <xsd:aliciIlceAdi>ALTINDAĞ</xsd:aliciIlceAdi>
               <!--Optional:-->
               <xsd:aliciIlceAdi2></xsd:aliciIlceAdi2>
               <!--Optional:-->
               <xsd:aliciIlceAdi3></xsd:aliciIlceAdi3>
               <!--Optional:-->
               <xsd:aliciSms></xsd:aliciSms>
               <!--Optional:-->
               <xsd:aliciSms2></xsd:aliciSms2>
               <!--Optional:-->
               <xsd:aliciSms3></xsd:aliciSms3>
               <!--Optional:-->
               <xsd:aliciTel></xsd:aliciTel>
               <!--Optional:-->
               <xsd:aliciTel2></xsd:aliciTel2>
               <!--Optional:-->
               <xsd:aliciTel3></xsd:aliciTel3>
               <!--Optional:-->
               <xsd:barkodNo>2798765490027</xsd:barkodNo>
               <!--Optional:-->
               <xsd:boy>1</xsd:boy>
               <!--Optional:-->
               <xsd:deger_ucreti>0.0</xsd:deger_ucreti>
               <!--Optional:-->
               <xsd:desi>1</xsd:desi>
               <!--Optional:-->
               <xsd:ekhizmet></xsd:ekhizmet>
               <!--Optional:-->
               <xsd:en>1</xsd:en>
               <!--Optional:-->
               <xsd:gondericibilgi>
                  <!--Optional:-->
                  <xsd:gonderici_adi></xsd:gonderici_adi>
                  <!--Optional:-->
                  <xsd:gonderici_adresi></xsd:gonderici_adresi>
                  <!--Optional:-->
                  <xsd:gonderici_email></xsd:gonderici_email>
                  <!--Optional:-->
                  <xsd:gonderici_il_ad></xsd:gonderici_il_ad>
                  <!--Optional:-->
                  <xsd:gonderici_ilce_ad></xsd:gonderici_ilce_ad>
                  <!--Optional:-->
                  <xsd:gonderici_posta_kodu></xsd:gonderici_posta_kodu>
                  <!--Optional:-->
                  <xsd:gonderici_sms></xsd:gonderici_sms>
                  <!--Optional:-->
                  <xsd:gonderici_telefonu></xsd:gonderici_telefonu>
                  <!--Optional:-->
                  <xsd:gonderici_ulke_id></xsd:gonderici_ulke_id>
               </xsd:gondericibilgi>
               <!--Optional:-->
               <xsd:iadeAAdres></xsd:iadeAAdres>
               <!--Optional:-->
               <xsd:iadeAIlKodu></xsd:iadeAIlKodu>
               <!--Optional:-->
               <xsd:iadeAIlceKodu></xsd:iadeAIlceKodu>
               <!--Optional:-->
               <xsd:iadeAliciAdi></xsd:iadeAliciAdi>
               <!--Optional:-->
               <xsd:iadeAliciEmail></xsd:iadeAliciEmail>
               <!--Optional:-->
               <xsd:iadeAliciIlAdi></xsd:iadeAliciIlAdi>
               <!--Optional:-->
               <xsd:iadeAliciIlceAdi></xsd:iadeAliciIlceAdi>
               <!--Optional:-->
               <xsd:iadeAliciTel></xsd:iadeAliciTel>
               <!--Optional:-->
               <xsd:musteriReferansNo>0</xsd:musteriReferansNo>
               <!--Optional:-->
               <xsd:odeme_sart_ucreti>0</xsd:odeme_sart_ucreti>
               <!--Optional:-->
               <xsd:odemesekli></xsd:odemesekli>
               <!--Optional:-->
               <xsd:parcali_barkod_referans_no></xsd:parcali_barkod_referans_no>
               <!--Optional:-->
               <xsd:rezerve1></xsd:rezerve1>
               <!--Optional:-->
               <xsd:rezerve2></xsd:rezerve2>
               <!--Optional:-->
               <xsd:rezerve3></xsd:rezerve3>
               <!--Optional:-->
               <xsd:rezerve4></xsd:rezerve4>
               <!--Optional:-->
               <xsd:rezerve5></xsd:rezerve5>
               <!--Optional:-->
               <xsd:teslim_tip></xsd:teslim_tip>
               <!--Optional:-->
               <xsd:ucret>0</xsd:ucret>
               <!--Optional:-->
               <xsd:yukseklik>1</xsd:yukseklik>
            </xsd:dongu>
            <!--Optional:-->
            <xsd:dosyaAdi>dosya20170704</xsd:dosyaAdi>
            <!--Optional:-->
            <xsd:gonderiTip>NORMAL</xsd:gonderiTip>
            <!--Optional:-->
            <xsd:gonderiTur>KARGO</xsd:gonderiTur>
            <!--Optional:-->
			<xsd:kullanici>PttWs</xsd:kullanici>
            <xsd:musteriId>903636184</xsd:musteriId>
            <xsd:sifre>Q1vYhu8RmgpK0b6rdd9ihg</xsd:sifre>
         </kab:input>
      </kab:kabulEkle2>
   </soap:Body>
</soap:Envelope>';
$headers = array(
    "POST PttVeriYuklemeTest/services/Sorgu HTTP/1.1",
    "Host: pttws.ptt.gov.tr",
    "Content-Type: application/soap+xml; charset=utf-8",
    "Content-Length: ".strlen($post)
    ); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$xml = curl_exec($ch);
curl_close($ch);

echo $xml;



// $client    = new SoapClient("https://pttws.ptt.gov.tr/PttVeriYuklemeTest/services/Sorgu?wsdl", 
//    array(
//     "trace" => 1,
//     "exceptions" => 0
// ));
// $functions = $client->__getFunctions();
// foreach($functions as $item){
//     print($item . '<br>');
// }

// $types = $client->__getTypes();
// foreach($types as $item){
//     print($item . '<br>');
// }

?>
