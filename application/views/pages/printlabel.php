<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0055)http://www.parcelway.co.uk/printlabel.aspx?cid=53829163 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	Print Label
</title>
    <style media="all">
        
        
    @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body
      {
      font-family: Georgia, ‘Times New Roman’, serif; 
      /*font-weight:bold;*/
      /*font-family: 'Bree Serif', serif;*/
      font-size:12px;
      }
    .dvmain { display:table; margin:0 auto; padding:0; width:100%; max-width:1250px; height:100%; }
    .recdet { font-weight:bold; font-size:12px; }
    table 
    {
        width:100%;
    }

    table td { padding: 0.3% 0.3%; vertical-align: top;}
    
    .tablemain
    {
        width:100%;
        border:2px solid black;
    }
    .row1 
    {
        border-bottom:2px;
    }
    .border-right
    {
        border-right:1px solid black;
    }
    .border-bottom
    {
        border-bottom:1px solid black;
    }
    .border-top
    {
        border-top:1px solid black;
    }
    .width80 { width:80%; }
    .width20 { width:20%; }
    .width70 { width:70%; }
    .width30 { width:30%; }
    .width50 { width:50%; }
.shorttext {
    display: block;
    font-size: 0.5em;
}
.medtext {
    font-size: 1.4em;
}
.rectext
{
    font-size: 1.1em;
}
.raln {
    text-align: right;
}
.caln {
    text-align: center;
}
.shorttext1 {
    font-size: 0.8em;
}
.largetext {
    font-size: 2.0em;
}

    </style>

     <style media="screen">
    .dvmain { margin:0 auto 18px auto; }
    </style>

    <style media="print">
        .print-button
        {
            display: none;
            visibility: hidden;
        }
        
        .dvmain:last-child {
     page-break-after: auto;
}
        
        @page 
        {
            margin: 0mm 2mm 2mm 2mm ;
            padding: 0
        }
        
  </style>

    
</head>
<body onload="javascript:window.print();">
    <form name="form1" method="post" action="http://www.parcelway.co.uk/printlabel.aspx?cid=53829163" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE2MjIwMDIwNzdkZDh7GhsRN9qBbmm8CBqIIToAL28w">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="A142027F">
</div>

<?php 
 $country =array('AF'=>'Afghanistan',
                 'AX'=>'Aland-Islands',
                 'AL'=>'Albania',
                 'DZ'=>'Algeria',
                 'AS'=>'American-Samoa',
                 'AD'=>'Andorra',
                 'AO'=>'Angola',
                 'AI'=>'Anguilla',
                 'AQ'=>'Antarctica',
                 'AG'=>'Antigua-And-Barbuda',
                 'AR'=>'Argentina',
                 'AM'=>'Armenia',
                 'AW'=>'Aruba',
                 'AU'=>'Australia',
                 'AT'=>'Austria',
                 'AZ'=>'Azerbaijan',
                 'BS'=>'Bahamas',
                 'BH'=>'Bahrain',
                 'BD'=>'Bangladesh',
                 'BB'=>'Barbados',
                 'BY'=>'Belarus',
                 'BE'=>'Belgium',
                 'BZ'=>'Belize',
                 'BJ'=>'Benin',
                 'BM'=>'Bermuda',
                 'BT'=>'Bhutan',
                 'BO'=>'Bolivia',
                 'BA'=>'Bosnia-And-Herzegovina',
                 'BW'=>'Botswana',
                 'BV'=>'Bouvet-Island',
                 'BR'=>'Brazil',
                 'IO'=>'British-Indian-Territory',
                 'BN'=>'British-Indian-Territory',
                 'BG'=>'Bulgaria',
                 'BF'=>'Burkina-Faso',
                 'BI'=>'Burundi',
                 'KH'=>'Cambodia',
                 'CM'=>'Cameroon',
                 'CA'=>'Canada',
                 'CV'=>'Cape-Verde',
                 'KY'=>'Cayman-Islands',
                 'CF'=>'Central-African-Republic',
                 'TD'=>'Chad',
                 'CL'=>'Chile',
                 'CN'=>'China',
                 'CX'=>'Christmas-Island',
                 'CC'=>'Cocos (Keeling) Islands',
                 'CO'=>'Colombia',
                 'KM'=>'Comoros',
                 'CG'=>'Congo',
                 'CD'=>'Congo},-Democratic-Republic',
                 'CK'=>'Cook-Islands',
                 'CR'=>'Costa-Rica',
                 'CI'=>'Cote-D-Ivoire',
                 'HR'=>'Croatia',
                 'CU'=>'Cuba',
                 'CY'=>'Cyprus',
                 'CZ'=>'Czech-Republic',
                 'DK'=>'Denmark',
                 'DJ'=>'Djibouti',
                 'DM'=>'Dominica',
                 'DO'=>'Dominican-Republic',
                 'EC'=>'Ecuador',
                 'EG'=>'Egypt',
                 'SV'=>'El-Salvador',
                 'GQ'=>'Equatorial-Guinea',
                 'ER'=>'Eritrea',
                 'EE'=>'Estonia',
                 'ET'=>'Ethiopia',
                 'FK'=>'Falkland-Islands-(Malvinas)',
                 'FO'=>'Faroe-Islands',
                 'FJ'=>'Fiji',
                 'FI'=>'Finland',
                 'FR'=>'France',
                 'GF'=>'French-Guiana',
                 'PF'=>'French-Polynesia',
                 'TF'=>'French-Southern-Territories',
                 'GA'=>'Gabon',
                 'GM'=>'Gambia',
                 'GE'=>'Georgia',
                 'DE'=>'Germany',
                 'GH'=>'Ghana',
                 'GI'=>'Gibraltar',
                 'GR'=>'Greece',
                 'GL'=>'Greenland',
                 'GD'=>'Grenada',
                 'GP'=>'Guadeloupe',
                 'GU'=>'Guam',
                 'GT'=>'Guatemala',
                 'GG'=>'Guernsey',
                 'GN'=>'Guinea',
                 'GW'=>'Guinea-Bissau',
                 'GY'=>'Guyana',
                 'HT'=>'Haiti',
                 'HM'=>'Heard-Island-&-Mcdonald-Islands',
                 'VA'=>'Holy-See (Vatican City State)',
                 'HN'=>'Honduras',
                 'HK'=>'Hong-Kong',
                 'HU'=>'Hungary',
                 'IS'=>'Iceland',
                 'IN'=>'India',
                 'ID'=>'Indonesia',
                 'IR'=>'Iran},-Islamic-Republic-Of',
                 'IQ'=>'Iraq',
                 'IE'=>'Ireland',
                 'IM'=>'Isle-Of-Man',
                 'IL'=>'Israel',
                 'IT'=>'Italy',
                 'JM'=>'Jamaica',
                 'JP'=>'Japan',
                 'JE'=>'Jersey',
                 'JO'=>'Jordan',
                 'KZ'=>'Kazakhstan',
                 'KE'=>'Kenya',
                 'KI'=>'Kiribati',
                 'KR'=>'Korea',
                 'KW'=>'Kuwait',
                 'KG'=>'Kyrgyzstan',
                 'LA'=>'Lao-Peoples-Democratic-Republic',
                 'LV'=>'Latvia',
                 'LB'=>'Lebanon',
                 'LS'=>'Lesotho',
                 'LR'=>'Liberia',
                 'LY'=>'Libyan-Arab-Jamahiriya',
                 'LI'=>'Liechtenstein',
                 'LT'=>'Lithuania',
                 'LU'=>'Luxembourg',
                 'MO'=>'Macao',
                 'MK'=>'Macedonia',
                 'MG'=>'Madagascar',
                 'MW'=>'Malawi',
                 'MY'=>'Malaysia',
                 'MV'=>'Maldives',
                 'ML'=>'Mali',
                 'MT'=>'Malta',
                 'MH'=>'Marshall-Islands',
                 'MQ'=>'Martinique',
                 'MR'=>'Mauritania',
                 'MU'=>'Mauritius',
                 'YT'=>'Mayotte',
                 'MX'=>'Mexico',
                 'FM'=>'Micronesia},-Federated-States-Of',
                 'MD'=>'Moldova',
                 'MC'=>'Monaco',
                 'MN'=>'Mongolia',
                 'ME'=>'Montenegro',
                 'MS'=>'Montserrat',
                 'MA'=>'Morocco',
                 'MZ'=>'Mozambique',
                 'MM'=>'Myanmar',
                 'NA'=>'Namibia',
                 'NR'=>'Nauru',
                 'NP'=>'Nepal',
                 'NL'=>'Netherlands',
                 'AN'=>'Netherlands-Antilles',
                 'NC'=>'New-Caledonia',
                 'NZ'=>'New-Zealand',
                 'NI'=>'Nicaragua',
                 'NE'=>'Niger',
                 'NG'=>'Nigeria',
                 'NU'=>'Niue',
                 'NF'=>'Norfolk-Island',
                 'MP'=>'Northern-Mariana-Islands',
                 'NO'=>'Norway',
                 'OM'=>'Oman',
                 'PK'=>'Pakistan',
                 'PW'=>'Palau',
                 'PS'=>'Palestinian-Territory},-Occupied',
                 'PA'=>'Panama',
                 'PG'=>'Papua-New-Guinea',
                 'PY'=>'Paraguay',
                 'PE'=>'Peru',
                 'PH'=>'Philippines',
                 'PN'=>'Pitcairn',
                 'PL'=>'Poland',
                 'PT'=>'Portugal',
                 'PR'=>'Puerto-Rico',
                 'QA'=>'Qatar',
                 'RE'=>'Reunion',
                 'RO'=>'Romania',
                 'RU'=>'Russian-Federation',
                 'RW'=>'Rwanda',
                 'BL'=>'Saint-Barthelemy',
                 'SH'=>'Saint-Helena',
                 'KN'=>'Saint-Kitts-And-Nevis',
                 'LC'=>'Saint-Lucia',
                 'MF'=>'Saint-Martin',
                 'PM'=>'Saint-Pierre-And-Miquelon',
                 'VC'=>'Saint-Vincent-And-Grenadines',
                 'WS'=>'Samoa',
                 'SM'=>'San-Marino',
                 'ST'=>'Sao-Tome-And-Principe',
                 'SA'=>'Saudi-Arabia',
                 'SN'=>'Senegal',
                 'RS'=>'Serbia',
                 'SC'=>'Seychelles',
                 'SL'=>'Sierra-Leone',
                 'SG'=>'Singapore',
                 'SK'=>'Slovakia',
                 'SI'=>'Slovenia',
                 'SB'=>'Solomon-Islands',
                 'SO'=>'Somalia',
                 'ZA'=>'South-Africa',
                 'GS'=>'South-Georgia-And-Sandwich-Isl.',
                 'ES'=>'Spain',
                 'LK'=>'Sri-Lanka',
                 'SD'=>'Sudan',
                 'SR'=>'Suriname',
                 'SJ'=>'Svalbard-And-Jan-Mayen',
                 'SZ'=>'Swaziland',
                 'SE'=>'Sweden',
                 'CH'=>'Switzerland',
                 'SY'=>'Syrian-Arab-Republic',
                 'TW'=>'Taiwan',
                 'TJ'=>'Tajikistan',
                 'TZ'=>'Tanzania',
                 'TH'=>'Thailand',
                 'TL'=>'Timor-Leste',
                 'TG'=>'Togo',
                 'TK'=>'Tokelau',
                 'TO'=>'Tonga',
                 'TT'=>'Trinvaluead-And-Tobago',
                 'TN'=>'Tunisia',
                 'TR'=>'Turkey',
                 'TM'=>'Turkmenistan',
                 'TC'=>'Turks-And-Caicos-Islands',
                 'TV'=>'Tuvalu',
                 'UG'=>'Uganda',
                 'UA'=>'Ukraine',
                 'AE'=>'United-Arab-Emirates',
                 'GB'=>'United-Kingdom',
                 'US'=>'United-States',
                 'UM'=>'United-States-Outlying-Islands',
                 'UY'=>'Uruguay',
                 'UZ'=>'Uzbekistan',
                 'VU'=>'Vanuatu',
                 'VE'=>'Venezuela',
                 'VN'=>'Viet-Nam',
                 'VG'=>'Virgin-Islands},-British',
                 'VI'=>'Virgin-Islands},-U.S.',
                 'WF'=>'Wallis-And-Futuna',
                 'EH'=>'Western-Sahara',
                 'YE'=>'Yemen',
                 'ZM'=>'Zambia',
                 'ZW'=>'Zimbabwe');
    ?>
     
    <input type="hidden" name="hfCollectionID" id="hfCollectionID" value="53829163">
    <?php 
    $count = 0; 
    foreach ($packages as $package):
        if($package->order_id == $order->order_id) {
            $count++;
        }
    endforeach;
    ?>
    <?php $i=1; foreach ($packages as $package): ?>
        <?php if($package->order_id == $order->order_id) {?>
    <div class="dvmain">
    <table cellspacing="0" cellpadding="0" class="tablemain">
        <tbody><tr>
            <td class="width80">
                <table cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="border-right border-bottom width70">
                            <h3><b>RECIPIENT DETAILS<b></h3>
                            <b class="recdet"><?= $order->receiver_title." ".$order->receiver_fname." ".$order->receiver_lname?>
                                <br>
                                <?= $order->receiver_address1.",".$order->receiver_address2.","?>
                                <br>
                                <?= $order->receiver_address3?>
                                <br>
                                <?= $order->receiver_city?>
                                <br>
                                <?= $order->receiver_postcode?>
                                <br>
                                <?= $order->receiver_country?>
                                <br></b>
                        </td>
                        
                        <td class="width30 border-bottom">
                            <h3><b>PACKAGES <b></h3>
                            <?= $i ?> of <?= $count ?>
                            <br>
                            <b>Total Weight</b>
                            <br>
                            <?= $package->weight.".00 kg";?>
                        </td>
                    </tr>
                </tbody></table>
                <table cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="border-right width50">
                            <table cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td>
                                        <?= $order->receiver_phone?> <span class="shorttext">Recipient Contact No</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="medtext">
                                        <?= $order->awb_no?> <span class="shorttext">AWB</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="medtext">
                                        <?= $order->ship_no?> <span class="shorttext">Track</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="medtext">
                                        EXPRESS <span class="shorttext">Service</span>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                        <td class="width50">
                            <table cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td>
                                        <h3><b>SENDER DETAILS<b></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b><?= $order->sender_title." ".$order->sender_fname." ".$order->sender_lname?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b><?= $order->sender_address1.",".$order->sender_address2.","?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b><?= $order->sender_address3?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b><?= $order->sender_city?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b><?= $order->sender_postcode?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b><?= $order->sender_country?></b>
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td>
                                        <span class="raln">Phone: #SenderContact#</span>
                                    </td>
                                </tr>-->
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr>
            <td class="border-top">
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td colspan="2" class="caln largetext">
                                <?php foreach ($country as $key => $con) {
                                    if($con==$order->sender_country){
                                        echo $key;
                                    }
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="caln">
                                Area Code - <?= $order->sender_postcode?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="caln shorttext1">
                                <?= $order->booking_date?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="caln">
                                
                                <img width="250px" height="100px" src="<?= base_url('assets/barcode/'.$order->ship_no.'.png')?>"><br>
                                <b style="letter-spacing: 10px;font-size: 20px">*<?= $order->ship_no?>*</b>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody></table>
</div>
<?php $i++; } endforeach;?>

    


    
    </form>


</body></html>