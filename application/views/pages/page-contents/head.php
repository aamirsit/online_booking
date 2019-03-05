<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Editors</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <style type="text/css">
    .flag-text { margin-left: 10px; }
  </style>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" >
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <!--Data table-->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/all.css'); ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/colorpicker/bootstrap-colorpicker.min.css'); ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css'); ?>">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/bvalidator.theme.gray2.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/flag/flag-icon.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url('assets/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>

  <script src="<?= base_url('assets/dist/js/jquery.bvalidator.js');?>"></script>

  <script type="text/javascript">
    $(document).ready(function () { 
      $('.showsource').each(function(){
        var id = $(this).attr('id');
        var source = $('#' + id + 'v').html();
        $('#' + id).text(source); 
      });
    }); 
  </script>
  <script type="text/javascript"> var optionsGray2 = { classNamePrefix: 'bvalidator_gray2_', position: {x:'right', y:'center'}, offset: {x:15, y:0}, template: '<div class="{errMsgClass}"><div class="bvalidator_gray2_arrow"></div><div class="bvalidator_gray2_cont1">{message}</div></div>' }; $(document).ready(function () { $('#form1').bValidator(optionsGray2); });

  (function($) {
        $(function() {
            var isoCountries = [
                { value: 'AF', id:'Afghanistan',text: 'Afghanistan'},
                { value: 'AX', id:'Aland-Islands',text: 'Aland Islands'},
                { value: 'AL', id:'Albania',text: 'Albania'},
                { value: 'DZ', id:'Algeria',text: 'Algeria'},
                { value: 'AS', id:'American-Samoa',text: 'American Samoa'},
                { value: 'AD', id:'Andorra',text: 'Andorra'},
                { value: 'AO', id:'Angola',text: 'Angola'},
                { value: 'AI', id:'Anguilla',text: 'Anguilla'},
                { value: 'AQ', id:'Antarctica',text: 'Antarctica'},
                { value: 'AG', id:'Antigua-And-Barbuda',text: 'Antigua And Barbuda'},
                { value: 'AR', id:'Argentina',text: 'Argentina'},
                { value: 'AM', id:'Armenia',text: 'Armenia'},
                { value: 'AW', id:'Aruba',text: 'Aruba'},
                { value: 'AU', id:'Australia',text: 'Australia'},
                { value: 'AT', id:'Austria',text: 'Austria'},
                { value: 'AZ', id:'Azerbaijan',text: 'Azerbaijan'},
                { value: 'BS', id:'Bahamas',text: 'Bahamas'},
                { value: 'BH', id:'Bahrain',text: 'Bahrain'},
                { value: 'BD', id:'Bangladesh',text: 'Bangladesh'},
                { value: 'BB', id:'Barbados',text: 'Barbados'},
                { value: 'BY', id:'Belarus',text: 'Belarus'},
                { value: 'BE', id:'Belgium',text: 'Belgium'},
                { value: 'BZ', id:'Belize',text: 'Belize'},
                { value: 'BJ', id:'Benin',text: 'Benin'},
                { value: 'BM', id:'Bermuda',text: 'Bermuda'},
                { value: 'BT', id:'Bhutan',text: 'Bhutan'},
                { value: 'BO', id:'Bolivia',text: 'Bolivia'},
                { value: 'BA', id:'Bosnia-And-Herzegovina',text: 'Bosnia And Herzegovina'},
                { value: 'BW', id:'Botswana',text: 'Botswana'},
                { value: 'BV', id:'Bouvet-Island',text: 'Bouvet Island'},
                { value: 'BR', id:'Brazil',text: 'Brazil'},
                { value: 'IO', id:'British-Indian-Territory',text: 'British Indian Ocean Territory'},
                { value: 'BN', id:'British-Indian-Territory',text: 'British Indian Ocean Territory'},
                { value: 'BG', id:'Bulgaria',text: 'Bulgaria'},
                { value: 'BF', id:'Burkina-Faso',text: 'Burkina Faso'},
                { value: 'BI', id:'Burundi',text: 'Burundi'},
                { value: 'KH', id:'Cambodia',text: 'Cambodia'},
                { value: 'CM', id:'Cameroon',text: 'Cameroon'},
                { value: 'CA', id:'Canada',text: 'Canada'},
                { value: 'CV', id:'Cape-Verde',text: 'Cape Verde'},
                { value: 'KY', id:'Cayman-Islands',text: 'Cayman Islands'},
                { value: 'CF', id:'Central-African-Republic',text: 'Central African Republic'},
                { value: 'TD', id:'Chad',text: 'Chad'},
                { value: 'CL', id:'Chile',text: 'Chile'},
                { value: 'CN', id:'China',text: 'China'},
                { value: 'CX', id:'Christmas-Island',text: 'Christmas Island'},
                { value: 'CC', id:'Cocos (Keeling) Islands',text: 'Cocos (Keeling) Islands'},
                { value: 'CO', id:'Colombia',text: 'Colombia'},
                { value: 'KM', id:'Comoros',text: 'Comoros'},
                { value: 'CG', id:'Congo',text: 'Congo'},
                { value: 'CD', id:'Congo},-Democratic-Republic',text: 'Congo}, Democratic Republic'},
                { value: 'CK', id:'Cook-Islands',text: 'Cook Islands'},
                { value: 'CR', id:'Costa-Rica',text: 'Costa Rica'},
                { value: 'CI', id:'Cote-D-Ivoire',text: 'Cote D\'Ivoire'},
                { value: 'HR', id:'Croatia',text: 'Croatia'},
                { value: 'CU', id:'Cuba',text: 'Cuba'},
                { value: 'CY', id:'Cyprus',text: 'Cyprus'},
                { value: 'CZ', id:'Czech-Republic',text: 'Czech Republic'},
                { value: 'DK', id:'Denmark',text: 'Denmark'},
                { value: 'DJ', id:'Djibouti',text: 'Djibouti'},
                { value: 'DM', id:'Dominica',text: 'Dominica'},
                { value: 'DO', id:'Dominican-Republic',text: 'Dominican Republic'},
                { value: 'EC', id:'Ecuador',text: 'Ecuador'},
                { value: 'EG', id:'Egypt',text: 'Egypt'},
                { value: 'SV', id:'El-Salvador',text: 'El Salvador'},
                { value: 'GQ', id:'Equatorial-Guinea',text: 'Equatorial Guinea'},
                { value: 'ER', id:'Eritrea',text: 'Eritrea'},
                { value: 'EE', id:'Estonia',text: 'Estonia'},
                { value: 'ET', id:'Ethiopia',text: 'Ethiopia'},
                { value: 'FK', id:'Falkland-Islands-(Malvinas)',text: 'Falkland Islands (Malvinas)'},
                { value: 'FO', id:'Faroe-Islands',text: 'Faroe Islands'},
                { value: 'FJ', id:'Fiji',text: 'Fiji'},
                { value: 'FI', id:'Finland',text: 'Finland'},
                { value: 'FR', id:'France',text: 'France'},
                { value: 'GF', id:'French-Guiana',text: 'French Guiana'},
                { value: 'PF', id:'French-Polynesia',text: 'French Polynesia'},
                { value: 'TF', id:'French-Southern-Territories',text: 'French Southern Territories'},
                { value: 'GA', id:'Gabon',text: 'Gabon'},
                { value: 'GM', id:'Gambia',text: 'Gambia'},
                { value: 'GE', id:'Georgia',text: 'Georgia'},
                { value: 'DE', id:'Germany',text: 'Germany'},
                { value: 'GH', id:'Ghana',text: 'Ghana'},
                { value: 'GI', id:'Gibraltar',text: 'Gibraltar'},
                { value: 'GR', id:'Greece',text: 'Greece'},
                { value: 'GL', id:'Greenland',text: 'Greenland'},
                { value: 'GD', id:'Grenada',text: 'Grenada'},
                { value: 'GP', id:'Guadeloupe',text: 'Guadeloupe'},
                { value: 'GU', id:'Guam',text: 'Guam'},
                { value: 'GT', id:'Guatemala',text: 'Guatemala'},
                { value: 'GG', id:'Guernsey',text: 'Guernsey'},
                { value: 'GN', id:'Guinea',text: 'Guinea'},
                { value: 'GW', id:'Guinea-Bissau',text: 'Guinea-Bissau'},
                { value: 'GY', id:'Guyana',text: 'Guyana'},
                { value: 'HT', id:'Haiti',text: 'Haiti'},
                { value: 'HM', id:'Heard-Island-&-Mcdonald-Islands',text: 'Heard Island & Mcdonald Islands'},
                { value: 'VA', id:'Holy-See (Vatican City State)',text: 'Holy See (Vatican City State)'},
                { value: 'HN', id:'Honduras',text: 'Honduras'},
                { value: 'HK', id:'Hong-Kong',text: 'Hong Kong'},
                { value: 'HU', id:'Hungary',text: 'Hungary'},
                { value: 'IS', id:'Iceland',text: 'Iceland'},
                { value: 'IN', id:'India',text: 'India'},
                { value: 'ID', id:'Indonesia',text: 'Indonesia'},
                { value: 'IR', id:'Iran},-Islamic-Republic-Of',text: 'Iran}, Islamic Republic Of'},
                { value: 'IQ', id:'Iraq',text: 'Iraq'},
                { value: 'IE', id:'Ireland',text: 'Ireland'},
                { value: 'IM', id:'Isle-Of-Man',text: 'Isle Of Man'},
                { value: 'IL', id:'Israel',text: 'Israel'},
                { value: 'IT', id:'Italy',text: 'Italy'},
                { value: 'JM', id:'Jamaica',text: 'Jamaica'},
                { value: 'JP', id:'Japan',text: 'Japan'},
                { value: 'JE', id:'Jersey',text: 'Jersey'},
                { value: 'JO', id:'Jordan',text: 'Jordan'},
                { value: 'KZ', id:'Kazakhstan',text: 'Kazakhstan'},
                { value: 'KE', id:'Kenya',text: 'Kenya'},
                { value: 'KI', id:'Kiribati',text: 'Kiribati'},
                { value: 'KR', id:'Korea',text: 'Korea'},
                { value: 'KW', id:'Kuwait',text: 'Kuwait'},
                { value: 'KG', id:'Kyrgyzstan',text: 'Kyrgyzstan'},
                { value: 'LA', id:'Lao-Peoples-Democratic-Republic',text: 'Lao People\'s Democratic Republic'},
                { value: 'LV', id:'Latvia',text: 'Latvia'},
                { value: 'LB', id:'Lebanon',text: 'Lebanon'},
                { value: 'LS', id:'Lesotho',text: 'Lesotho'},
                { value: 'LR', id:'Liberia',text: 'Liberia'},
                { value: 'LY', id:'Libyan-Arab-Jamahiriya',text: 'Libyan Arab Jamahiriya'},
                { value: 'LI', id:'Liechtenstein',text: 'Liechtenstein'},
                { value: 'LT', id:'Lithuania',text: 'Lithuania'},
                { value: 'LU', id:'Luxembourg',text: 'Luxembourg'},
                { value: 'MO', id:'Macao',text: 'Macao'},
                { value: 'MK', id:'Macedonia',text: 'Macedonia'},
                { value: 'MG', id:'Madagascar',text: 'Madagascar'},
                { value: 'MW', id:'Malawi',text: 'Malawi'},
                { value: 'MY', id:'Malaysia',text: 'Malaysia'},
                { value: 'MV', id:'Maldives',text: 'Maldives'},
                { value: 'ML', id:'Mali',text: 'Mali'},
                { value: 'MT', id:'Malta',text: 'Malta'},
                { value: 'MH', id:'Marshall-Islands',text: 'Marshall Islands'},
                { value: 'MQ', id:'Martinique',text: 'Martinique'},
                { value: 'MR', id:'Mauritania',text: 'Mauritania'},
                { value: 'MU', id:'Mauritius',text: 'Mauritius'},
                { value: 'YT', id:'Mayotte',text: 'Mayotte'},
                { value: 'MX', id:'Mexico',text: 'Mexico'},
                { value: 'FM', id:'Micronesia},-Federated-States-Of',text: 'Micronesia}, Federated States Of'},
                { value: 'MD', id:'Moldova',text: 'Moldova'},
                { value: 'MC', id:'Monaco',text: 'Monaco'},
                { value: 'MN', id:'Mongolia',text: 'Mongolia'},
                { value: 'ME', id:'Montenegro',text: 'Montenegro'},
                { value: 'MS', id:'Montserrat',text: 'Montserrat'},
                { value: 'MA', id:'Morocco',text: 'Morocco'},
                { value: 'MZ', id:'Mozambique',text: 'Mozambique'},
                { value: 'MM', id:'Myanmar',text: 'Myanmar'},
                { value: 'NA', id:'Namibia',text: 'Namibia'},
                { value: 'NR', id:'Nauru',text: 'Nauru'},
                { value: 'NP', id:'Nepal',text: 'Nepal'},
                { value: 'NL', id:'Netherlands',text: 'Netherlands'},
                { value: 'AN', id:'Netherlands-Antilles',text: 'Netherlands Antilles'},
                { value: 'NC', id:'New-Caledonia',text: 'New Caledonia'},
                { value: 'NZ', id:'New-Zealand',text: 'New Zealand'},
                { value: 'NI', id:'Nicaragua',text: 'Nicaragua'},
                { value: 'NE', id:'Niger',text: 'Niger'},
                { value: 'NG', id:'Nigeria',text: 'Nigeria'},
                { value: 'NU', id:'Niue',text: 'Niue'},
                { value: 'NF', id:'Norfolk-Island',text: 'Norfolk Island'},
                { value: 'MP', id:'Northern-Mariana-Islands',text: 'Northern Mariana Islands'},
                { value: 'NO', id:'Norway',text: 'Norway'},
                { value: 'OM', id:'Oman',text: 'Oman'},
                { value: 'PK', id:'Pakistan',text: 'Pakistan'},
                { value: 'PW', id:'Palau',text: 'Palau'},
                { value: 'PS', id:'Palestinian-Territory},-Occupied',text: 'Palestinian Territory}, Occupied'},
                { value: 'PA', id:'Panama',text: 'Panama'},
                { value: 'PG', id:'Papua-New-Guinea',text: 'Papua New Guinea'},
                { value: 'PY', id:'Paraguay',text: 'Paraguay'},
                { value: 'PE', id:'Peru',text: 'Peru'},
                { value: 'PH', id:'Philippines',text: 'Philippines'},
                { value: 'PN', id:'Pitcairn',text: 'Pitcairn'},
                { value: 'PL', id:'Poland',text: 'Poland'},
                { value: 'PT', id:'Portugal',text: 'Portugal'},
                { value: 'PR', id:'Puerto-Rico',text: 'Puerto Rico'},
                { value: 'QA', id:'Qatar',text: 'Qatar'},
                { value: 'RE', id:'Reunion',text: 'Reunion'},
                { value: 'RO', id:'Romania',text: 'Romania'},
                { value: 'RU', id:'Russian-Federation',text: 'Russian Federation'},
                { value: 'RW', id:'Rwanda',text: 'Rwanda'},
                { value: 'BL', id:'Saint-Barthelemy',text: 'Saint Barthelemy'},
                { value: 'SH', id:'Saint-Helena',text: 'Saint Helena'},
                { value: 'KN', id:'Saint-Kitts-And-Nevis',text: 'Saint Kitts And Nevis'},
                { value: 'LC', id:'Saint-Lucia',text: 'Saint Lucia'},
                { value: 'MF', id:'Saint-Martin',text: 'Saint Martin'},
                { value: 'PM', id:'Saint-Pierre-And-Miquelon',text: 'Saint Pierre And Miquelon'},
                { value: 'VC', id:'Saint-Vincent-And-Grenadines',text: 'Saint Vincent And Grenadines'},
                { value: 'WS', id:'Samoa',text: 'Samoa'},
                { value: 'SM', id:'San-Marino',text: 'San Marino'},
                { value: 'ST', id:'Sao-Tome-And-Principe',text: 'Sao Tome And Principe'},
                { value: 'SA', id:'Saudi-Arabia',text: 'Saudi Arabia'},
                { value: 'SN', id:'Senegal',text: 'Senegal'},
                { value: 'RS', id:'Serbia',text: 'Serbia'},
                { value: 'SC', id:'Seychelles',text: 'Seychelles'},
                { value: 'SL', id:'Sierra-Leone',text: 'Sierra Leone'},
                { value: 'SG', id:'Singapore',text: 'Singapore'},
                { value: 'SK', id:'Slovakia',text: 'Slovakia'},
                { value: 'SI', id:'Slovenia',text: 'Slovenia'},
                { value: 'SB', id:'Solomon-Islands',text: 'Solomon Islands'},
                { value: 'SO', id:'Somalia',text: 'Somalia'},
                { value: 'ZA', id:'South-Africa',text: 'South Africa'},
                { value: 'GS', id:'South-Georgia-And-Sandwich-Isl.',text: 'South Georgia And Sandwich Isl.'},
                { value: 'ES', id:'Spain',text: 'Spain'},
                { value: 'LK', id:'Sri-Lanka',text: 'Sri Lanka'},
                { value: 'SD', id:'Sudan',text: 'Sudan'},
                { value: 'SR', id:'Suriname',text: 'Suriname'},
                { value: 'SJ', id:'Svalbard-And-Jan-Mayen',text: 'Svalbard And Jan Mayen'},
                { value: 'SZ', id:'Swaziland',text: 'Swaziland'},
                { value: 'SE', id:'Sweden',text: 'Sweden'},
                { value: 'CH', id:'Switzerland',text: 'Switzerland'},
                { value: 'SY', id:'Syrian-Arab-Republic',text: 'Syrian Arab Republic'},
                { value: 'TW', id:'Taiwan',text: 'Taiwan'},
                { value: 'TJ', id:'Tajikistan',text: 'Tajikistan'},
                { value: 'TZ', id:'Tanzania',text: 'Tanzania'},
                { value: 'TH', id:'Thailand',text: 'Thailand'},
                { value: 'TL', id:'Timor-Leste',text: 'Timor-Leste'},
                { value: 'TG', id:'Togo',text: 'Togo'},
                { value: 'TK', id:'Tokelau',text: 'Tokelau'},
                { value: 'TO', id:'Tonga',text: 'Tonga'},
                { value: 'TT', id:'Trinvaluead-And-Tobago',text: 'Trinvaluead And Tobago'},
                { value: 'TN', id:'Tunisia',text: 'Tunisia'},
                { value: 'TR', id:'Turkey',text: 'Turkey'},
                { value: 'TM', id:'Turkmenistan',text: 'Turkmenistan'},
                { value: 'TC', id:'Turks-And-Caicos-Islands',text: 'Turks And Caicos Islands'},
                { value: 'TV', id:'Tuvalu',text: 'Tuvalu'},
                { value: 'UG', id:'Uganda',text: 'Uganda'},
                { value: 'UA', id:'Ukraine',text: 'Ukraine'},
                { value: 'AE', id:'United-Arab-Emirates',text: 'United Arab Emirates'},
                { value: 'GB', id:'United-Kingdom',text: 'United Kingdom'},
                { value: 'US', id:'United-States',text: 'United States'},
                { value: 'UM', id:'United-States-Outlying-Islands',text: 'United States Outlying Islands'},
                { value: 'UY', id:'Uruguay',text: 'Uruguay'},
                { value: 'UZ', id:'Uzbekistan',text: 'Uzbekistan'},
                { value: 'VU', id:'Vanuatu',text: 'Vanuatu'},
                { value: 'VE', id:'Venezuela',text: 'Venezuela'},
                { value: 'VN', id:'Viet-Nam',text: 'Viet Nam'},
                { value: 'VG', id:'Virgin-Islands},-British',text: 'Virgin Islands}, British'},
                { value: 'VI', id:'Virgin-Islands},-U.S.',text: 'Virgin Islands}, U.S.'},
                { value: 'WF', id:'Wallis-And-Futuna',text: 'Wallis And Futuna'},
                { value: 'EH', id:'Western-Sahara',text: 'Western Sahara'},
                { value: 'YE', id:'Yemen',text: 'Yemen'},
                { value: 'ZM', id:'Zambia',text: 'Zambia'},
                { value: 'ZW', id:'Zimbabwe',text: 'Zimbabwe'}
            ];
            
            function formatCountry (country) {
              if (!country.value) { return country.text; }
              var $country = $(
                '<span class="flag-icon flag-icon-'+ country.value.toLowerCase() +' flag-icon-squared"></span>' +
                '<span class="flag-text">'+ country.text+"</span>"
              );
              return $country;
            };
            
            //Assuming you have a select element with name country
            // e.g. <select name="name"></select>
            
            $(".country").select2({
                placeholder: "Select a country",
        templateResult: formatCountry,
                data: isoCountries
            });
            
            
        });
})(jQuery);            
  </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>