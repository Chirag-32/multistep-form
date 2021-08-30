    <?php include('header.php');?>
    <br>
    <section class="contact">
        <div class="container">
        <!-- onsubmit="return validation()" -->
            <form >
                <div class="form-group">
                    <label for=""> Full Name</label>
                    <input type="text" name="" value="" id="fname" class="form-control">
                    <span id="fnameerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Email</label>
                    <input type="text" name="" id="email" class="form-control">
                    <span id="emailerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Mobile No.</label>
                    <input type="text" name="" id="mobile" class="form-control" onkeypress="phoneno()" maxlength="10">
                    <span id="mobileerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Password</label>
                    <input type="text" name="" id="pass" class="form-control">
                    <span id="passerror" class="text-danger error">First name is invalid</span>
                </div>
                <div class="form-group">
                    <label for=""> Confirm Password</label>
                    <input type="text" name="" id="cpass" class="form-control">
                    <span id="cpasserror" class="text-danger error">First name is invalid</span>
                </div>
                <input type="submit" id="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </section>
    <?php include('footer.php');?>
    
    

    <?php
    $user_ip = "https://ipgeolocation.abstractapi.com/v1/?api_key=dbb71df6928940169e93f091d68bbec4" ;
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $city = $geo["geoplugin_city"];
    ?>
    <P>
    <?php
    echo"<pre>";
    print_r($city);
    
    print_r($country); ?>
     
    </P>
    
    <!-- country codes (ISO 3166) and Dial codes. -->
<select name="country" id="country" class="form-control">
<option value="" disabled selected>Please Select</option>
        <option value="AF">Afghanistan</option><option value="AX">&Aring;land Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua &amp; Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AC">Ascension Island</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia &amp; Herzegovina</option><option value="BW">Botswana</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="IC">Canary Islands</option><option value="CV">Cape Verde</option><option value="BQ">Caribbean Netherlands</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="EA">Ceuta &amp; Melilla</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo - Brazzaville</option><option value="CD">Congo - Kinshasa</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">C&ocirc;te d&rsquo;Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Cura&ccedil;ao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DG">Diego Garcia</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong SAR China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="XK">Kosovo</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau SAR China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territories</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">R&eacute;union</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">S&atilde;o Tom&eacute; &amp; Pr&iacute;ncipe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia &amp; South Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="BL">St. Barth&eacute;lemy</option><option value="SH">St. Helena</option><option value="KN">St. Kitts &amp; Nevis</option><option value="LC">St. Lucia</option><option value="MF">St. Martin</option><option value="PM">St. Pierre &amp; Miquelon</option><option value="VC">St. Vincent &amp; Grenadines</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard &amp; Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad &amp; Tobago</option><option value="TA">Tristan da Cunha</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks &amp; Caicos Islands</option><option value="TV">Tuvalu</option><option value="UM">U.S. Outlying Islands</option><option value="VI">U.S. Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis &amp; Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
</select>

<input type="text" class="form-control " id="c-code" name="c-code" >
<script>
	$.ajax({
        url: "https://ipwhois.app/json/",
		jsonpCallback: "callback",
		dataType: "json",
		success: function( location ) {
		$('#country').val(location.country_code).attr('selected',true);
        $('#c-code').val(location.country_phone).attr('selected',true);
		}
	});

    </script>                          

<?php
// All countries
// $countries = array(
//     'AF' => array('phone_code' => 93,'country_name' => 'Afghanistan'),
//     'AX' => array('phone_code' => 358,'country_name' => 'Aland Islands'),
//     'AL' => array('phone_code' => 355,'country_name' => 'Albania'),
//     'DZ' => array('phone_code' => 213,'country_name' => 'Algeria'),
//     'AS' => array('phone_code' => 1684,'country_name' => 'American Samoa'),
//     'AD' => array('phone_code' => 376,'country_name' => 'Andorra'),
//     'AO' => array('phone_code' => 244,'country_name' => 'Angola'),
//     'AI' => array('phone_code' => 1264,'country_name' => 'Anguilla'),
//     'AQ' => array('phone_code' => 672,'country_name' => 'Antarctica'),
//     'AG' => array('phone_code' => 1268,'country_name' => 'Antigua and Barbuda'),
//     'AR' => array('phone_code' => 54,'country_name' => 'Argentina'),
//     'AM' => array('phone_code' => 374,'country_name' => 'Armenia'),
//     'AW' => array('phone_code' => 297,'country_name' => 'Aruba'),
//     'AU' => array('phone_code' => 61,'country_name' => 'Australia'),
//     'AT' => array('phone_code' => 43,'country_name' => 'Austria'),
//     'AZ' => array('phone_code' => 994,'country_name' => 'Azerbaijan'),
//     'BS' => array('phone_code' => 1242,'country_name' => 'Bahamas'),
//     'BH' => array('phone_code' => 973,'country_name' => 'Bahrain'),
//     'BD' => array('phone_code' => 880,'country_name' => 'Bangladesh'),
//     'BB' => array('phone_code' => 1246,'country_name' => 'Barbados'),
//     'BY' => array('phone_code' => 375,'country_name' => 'Belarus'),
//     'BE' => array('phone_code' => 32,'country_name' => 'Belgium'),
//     'BZ' => array('phone_code' => 501,'country_name' => 'Belize'),
//     'BJ' => array('phone_code' => 229,'country_name' => 'Benin'),
//     'BM' => array('phone_code' => 1441,'country_name' => 'Bermuda'),
//     'BT' => array('phone_code' => 975,'country_name' => 'Bhutan'),
//     'BO' => array('phone_code' => 591,'country_name' => 'Bolivia'),
//     'BQ' => array('phone_code' => 599,'country_name' => 'Bonaire, Sint Eustatius and Saba'),
//     'BA' => array('phone_code' => 387,'country_name' => 'Bosnia and Herzegovina'),
//     'BW' => array('phone_code' => 267,'country_name' => 'Botswana'),
//     'BV' => array('phone_code' => 55,'country_name' => 'Bouvet Island'),
//     'BR' => array('phone_code' => 55,'country_name' => 'Brazil'),
//     'IO' => array('phone_code' => 246,'country_name' => 'British Indian Ocean Territory'),
//     'BN' => array('phone_code' => 673,'country_name' => 'Brunei Darussalam'),
//     'BG' => array('phone_code' => 359,'country_name' => 'Bulgaria'),
//     'BF' => array('phone_code' => 226,'country_name' => 'Burkina Faso'),
//     'BI' => array('phone_code' => 257,'country_name' => 'Burundi'),
//     'KH' => array('phone_code' => 855,'country_name' => 'Cambodia'),
//     'CM' => array('phone_code' => 237,'country_name' => 'Cameroon'),
//     'CA' => array('phone_code' => 1,'country_name' => 'Canada'),
//     'CV' => array('phone_code' => 238,'country_name' => 'Cape Verde'),
//     'KY' => array('phone_code' => 1345,'country_name' => 'Cayman Islands'),
//     'CF' => array('phone_code' => 236,'country_name' => 'Central African Republic'),
//     'TD' => array('phone_code' => 235,'country_name' => 'Chad'),
//     'CL' => array('phone_code' => 56,'country_name' => 'Chile'),
//     'CN' => array('phone_code' => 86,'country_name' => 'China'),
//     'CX' => array('phone_code' => 61,'country_name' => 'Christmas Island'),
//     'CC' => array('phone_code' => 672,'country_name' => 'Cocos (Keeling) Islands'),
//     'CO' => array('phone_code' => 57,'country_name' => 'Colombia'),
//     'KM' => array('phone_code' => 269,'country_name' => 'Comoros'),
//     'CG' => array('phone_code' => 242,'country_name' => 'Congo'),
//     'CD' => array('phone_code' => 242,'country_name' => 'Congo, Democratic Republic of the Congo'),
//     'CK' => array('phone_code' => 682,'country_name' => 'Cook Islands'),
//     'CR' => array('phone_code' => 506,'country_name' => 'Costa Rica'),
//     'CI' => array('phone_code' => 225,'country_name' => 'Cote D\'Ivoire'),
//     'HR' => array('phone_code' => 385,'country_name' => 'Croatia'),
//     'CU' => array('phone_code' => 53,'country_name' => 'Cuba'),
//     'CW' => array('phone_code' => 599,'country_name' => 'Curacao'),
//     'CY' => array('phone_code' => 357,'country_name' => 'Cyprus'),
//     'CZ' => array('phone_code' => 420,'country_name' => 'Czech Republic'),
//     'DK' => array('phone_code' => 45,'country_name' => 'Denmark'),
//     'DJ' => array('phone_code' => 253,'country_name' => 'Djibouti'),
//     'DM' => array('phone_code' => 1767,'country_name' => 'Dominica'),
//     'DO' => array('phone_code' => 1809,'country_name' => 'Dominican Republic'),
//     'EC' => array('phone_code' => 593,'country_name' => 'Ecuador'),
//     'EG' => array('phone_code' => 20,'country_name' => 'Egypt'),
//     'SV' => array('phone_code' => 503,'country_name' => 'El Salvador'),
//     'GQ' => array('phone_code' => 240,'country_name' => 'Equatorial Guinea'),
//     'ER' => array('phone_code' => 291,'country_name' => 'Eritrea'),
//     'EE' => array('phone_code' => 372,'country_name' => 'Estonia'),
//     'ET' => array('phone_code' => 251,'country_name' => 'Ethiopia'),
//     'FK' => array('phone_code' => 500,'country_name' => 'Falkland Islands (Malvinas)'),
//     'FO' => array('phone_code' => 298,'country_name' => 'Faroe Islands'),
//     'FJ' => array('phone_code' => 679,'country_name' => 'Fiji'),
//     'FI' => array('phone_code' => 358,'country_name' => 'Finland'),
//     'FR' => array('phone_code' => 33,'country_name' => 'France'),
//     'GF' => array('phone_code' => 594,'country_name' => 'French Guiana'),
//     'PF' => array('phone_code' => 689,'country_name' => 'French Polynesia'),
//     'TF' => array('phone_code' => 262,'country_name' => 'French Southern Territories'),
//     'GA' => array('phone_code' => 241,'country_name' => 'Gabon'),
//     'GM' => array('phone_code' => 220,'country_name' => 'Gambia'),
//     'GE' => array('phone_code' => 995,'country_name' => 'Georgia'),
//     'DE' => array('phone_code' => 49,'country_name' => 'Germany'),
//     'GH' => array('phone_code' => 233,'country_name' => 'Ghana'),
//     'GI' => array('phone_code' => 350,'country_name' => 'Gibraltar'),
//     'GR' => array('phone_code' => 30,'country_name' => 'Greece'),
//     'GL' => array('phone_code' => 299,'country_name' => 'Greenland'),
//     'GD' => array('phone_code' => 1473,'country_name' => 'Grenada'),
//     'GP' => array('phone_code' => 590,'country_name' => 'Guadeloupe'),
//     'GU' => array('phone_code' => 1671,'country_name' => 'Guam'),
//     'GT' => array('phone_code' => 502,'country_name' => 'Guatemala'),
//     'GG' => array('phone_code' => 44,'country_name' => 'Guernsey'),
//     'GN' => array('phone_code' => 224,'country_name' => 'Guinea'),
//     'GW' => array('phone_code' => 245,'country_name' => 'Guinea-Bissau'),
//     'GY' => array('phone_code' => 592,'country_name' => 'Guyana'),
//     'HT' => array('phone_code' => 509,'country_name' => 'Haiti'),
//     'HM' => array('phone_code' => 0,'country_name' => 'Heard Island and Mcdonald Islands'),
//     'VA' => array('phone_code' => 39,'country_name' => 'Holy See (Vatican City State)'),
//     'HN' => array('phone_code' => 504,'country_name' => 'Honduras'),
//     'HK' => array('phone_code' => 852,'country_name' => 'Hong Kong'),
//     'HU' => array('phone_code' => 36,'country_name' => 'Hungary'),
//     'IS' => array('phone_code' => 354,'country_name' => 'Iceland'),
//     'IN' => array('phone_code' => 91,'country_name' => 'India'),
//     'ID' => array('phone_code' => 62,'country_name' => 'Indonesia'),
//     'IR' => array('phone_code' => 98,'country_name' => 'Iran, Islamic Republic of'),
//     'IQ' => array('phone_code' => 964,'country_name' => 'Iraq'),
//     'IE' => array('phone_code' => 353,'country_name' => 'Ireland'),
//     'IM' => array('phone_code' => 44,'country_name' => 'Isle of Man'),
//     'IL' => array('phone_code' => 972,'country_name' => 'Israel'),
//     'IT' => array('phone_code' => 39,'country_name' => 'Italy'),
//     'JM' => array('phone_code' => 1876,'country_name' => 'Jamaica'),
//     'JP' => array('phone_code' => 81,'country_name' => 'Japan'),
//     'JE' => array('phone_code' => 44,'country_name' => 'Jersey'),
//     'JO' => array('phone_code' => 962,'country_name' => 'Jordan'),
//     'KZ' => array('phone_code' => 7,'country_name' => 'Kazakhstan'),
//     'KE' => array('phone_code' => 254,'country_name' => 'Kenya'),
//     'KI' => array('phone_code' => 686,'country_name' => 'Kiribati'),
//     'KP' => array('phone_code' => 850,'country_name' => 'Korea, Democratic People\'s Republic of'),
//     'KR' => array('phone_code' => 82,'country_name' => 'Korea, Republic of'),
//     'XK' => array('phone_code' => 381,'country_name' => 'Kosovo'),
//     'KW' => array('phone_code' => 965,'country_name' => 'Kuwait'),
//     'KG' => array('phone_code' => 996,'country_name' => 'Kyrgyzstan'),
//     'LA' => array('phone_code' => 856,'country_name' => 'Lao People\'s Democratic Republic'),
//     'LV' => array('phone_code' => 371,'country_name' => 'Latvia'),
//     'LB' => array('phone_code' => 961,'country_name' => 'Lebanon'),
//     'LS' => array('phone_code' => 266,'country_name' => 'Lesotho'),
//     'LR' => array('phone_code' => 231,'country_name' => 'Liberia'),
//     'LY' => array('phone_code' => 218,'country_name' => 'Libyan Arab Jamahiriya'),
//     'LI' => array('phone_code' => 423,'country_name' => 'Liechtenstein'),
//     'LT' => array('phone_code' => 370,'country_name' => 'Lithuania'),
//     'LU' => array('phone_code' => 352,'country_name' => 'Luxembourg'),
//     'MO' => array('phone_code' => 853,'country_name' => 'Macao'),
//     'MK' => array('phone_code' => 389,'country_name' => 'Macedonia, the Former Yugoslav Republic of'),
//     'MG' => array('phone_code' => 261,'country_name' => 'Madagascar'),
//     'MW' => array('phone_code' => 265,'country_name' => 'Malawi'),
//     'MY' => array('phone_code' => 60,'country_name' => 'Malaysia'),
//     'MV' => array('phone_code' => 960,'country_name' => 'Maldives'),
//     'ML' => array('phone_code' => 223,'country_name' => 'Mali'),
//     'MT' => array('phone_code' => 356,'country_name' => 'Malta'),
//     'MH' => array('phone_code' => 692,'country_name' => 'Marshall Islands'),
//     'MQ' => array('phone_code' => 596,'country_name' => 'Martinique'),
//     'MR' => array('phone_code' => 222,'country_name' => 'Mauritania'),
//     'MU' => array('phone_code' => 230,'country_name' => 'Mauritius'),
//     'YT' => array('phone_code' => 269,'country_name' => 'Mayotte'),
//     'MX' => array('phone_code' => 52,'country_name' => 'Mexico'),
//     'FM' => array('phone_code' => 691,'country_name' => 'Micronesia, Federated States of'),
//     'MD' => array('phone_code' => 373,'country_name' => 'Moldova, Republic of'),
//     'MC' => array('phone_code' => 377,'country_name' => 'Monaco'),
//     'MN' => array('phone_code' => 976,'country_name' => 'Mongolia'),
//     'ME' => array('phone_code' => 382,'country_name' => 'Montenegro'),
//     'MS' => array('phone_code' => 1664,'country_name' => 'Montserrat'),
//     'MA' => array('phone_code' => 212,'country_name' => 'Morocco'),
//     'MZ' => array('phone_code' => 258,'country_name' => 'Mozambique'),
//     'MM' => array('phone_code' => 95,'country_name' => 'Myanmar'),
//     'NA' => array('phone_code' => 264,'country_name' => 'Namibia'),
//     'NR' => array('phone_code' => 674,'country_name' => 'Nauru'),
//     'NP' => array('phone_code' => 977,'country_name' => 'Nepal'),
//     'NL' => array('phone_code' => 31,'country_name' => 'Netherlands'),
//     'AN' => array('phone_code' => 599,'country_name' => 'Netherlands Antilles'),
//     'NC' => array('phone_code' => 687,'country_name' => 'New Caledonia'),
//     'NZ' => array('phone_code' => 64,'country_name' => 'New Zealand'),
//     'NI' => array('phone_code' => 505,'country_name' => 'Nicaragua'),
//     'NE' => array('phone_code' => 227,'country_name' => 'Niger'),
//     'NG' => array('phone_code' => 234,'country_name' => 'Nigeria'),
//     'NU' => array('phone_code' => 683,'country_name' => 'Niue'),
//     'NF' => array('phone_code' => 672,'country_name' => 'Norfolk Island'),
//     'MP' => array('phone_code' => 1670,'country_name' => 'Northern Mariana Islands'),
//     'NO' => array('phone_code' => 47,'country_name' => 'Norway'),
//     'OM' => array('phone_code' => 968,'country_name' => 'Oman'),
//     'PK' => array('phone_code' => 92,'country_name' => 'Pakistan'),
//     'PW' => array('phone_code' => 680,'country_name' => 'Palau'),
//     'PS' => array('phone_code' => 970,'country_name' => 'Palestinian Territory, Occupied'),
//     'PA' => array('phone_code' => 507,'country_name' => 'Panama'),
//     'PG' => array('phone_code' => 675,'country_name' => 'Papua New Guinea'),
//     'PY' => array('phone_code' => 595,'country_name' => 'Paraguay'),
//     'PE' => array('phone_code' => 51,'country_name' => 'Peru'),
//     'PH' => array('phone_code' => 63,'country_name' => 'Philippines'),
//     'PN' => array('phone_code' => 64,'country_name' => 'Pitcairn'),
//     'PL' => array('phone_code' => 48,'country_name' => 'Poland'),
//     'PT' => array('phone_code' => 351,'country_name' => 'Portugal'),
//     'PR' => array('phone_code' => 1787,'country_name' => 'Puerto Rico'),
//     'QA' => array('phone_code' => 974,'country_name' => 'Qatar'),
//     'RE' => array('phone_code' => 262,'country_name' => 'Reunion'),
//     'RO' => array('phone_code' => 40,'country_name' => 'Romania'),
//     'RU' => array('phone_code' => 70,'country_name' => 'Russian Federation'),
//     'RW' => array('phone_code' => 250,'country_name' => 'Rwanda'),
//     'BL' => array('phone_code' => 590,'country_name' => 'Saint Barthelemy'),
//     'SH' => array('phone_code' => 290,'country_name' => 'Saint Helena'),
//     'KN' => array('phone_code' => 1869,'country_name' => 'Saint Kitts and Nevis'),
//     'LC' => array('phone_code' => 1758,'country_name' => 'Saint Lucia'),
//     'MF' => array('phone_code' => 590,'country_name' => 'Saint Martin'),
//     'PM' => array('phone_code' => 508,'country_name' => 'Saint Pierre and Miquelon'),
//     'VC' => array('phone_code' => 1784,'country_name' => 'Saint Vincent and the Grenadines'),
//     'WS' => array('phone_code' => 684,'country_name' => 'Samoa'),
//     'SM' => array('phone_code' => 378,'country_name' => 'San Marino'),
//     'ST' => array('phone_code' => 239,'country_name' => 'Sao Tome and Principe'),
//     'SA' => array('phone_code' => 966,'country_name' => 'Saudi Arabia'),
//     'SN' => array('phone_code' => 221,'country_name' => 'Senegal'),
//     'RS' => array('phone_code' => 381,'country_name' => 'Serbia'),
//     'CS' => array('phone_code' => 381,'country_name' => 'Serbia and Montenegro'),
//     'SC' => array('phone_code' => 248,'country_name' => 'Seychelles'),
//     'SL' => array('phone_code' => 232,'country_name' => 'Sierra Leone'),
//     'SG' => array('phone_code' => 65,'country_name' => 'Singapore'),
//     'SX' => array('phone_code' => 1,'country_name' => 'Sint Maarten'),
//     'SK' => array('phone_code' => 421,'country_name' => 'Slovakia'),
//     'SI' => array('phone_code' => 386,'country_name' => 'Slovenia'),
//     'SB' => array('phone_code' => 677,'country_name' => 'Solomon Islands'),
//     'SO' => array('phone_code' => 252,'country_name' => 'Somalia'),
//     'ZA' => array('phone_code' => 27,'country_name' => 'South Africa'),
//     'GS' => array('phone_code' => 500,'country_name' => 'South Georgia and the South Sandwich Islands'),
//     'SS' => array('phone_code' => 211,'country_name' => 'South Sudan'),
//     'ES' => array('phone_code' => 34,'country_name' => 'Spain'),
//     'LK' => array('phone_code' => 94,'country_name' => 'Sri Lanka'),
//     'SD' => array('phone_code' => 249,'country_name' => 'Sudan'),
//     'SR' => array('phone_code' => 597,'country_name' => 'Suriname'),
//     'SJ' => array('phone_code' => 47,'country_name' => 'Svalbard and Jan Mayen'),
//     'SZ' => array('phone_code' => 268,'country_name' => 'Swaziland'),
//     'SE' => array('phone_code' => 46,'country_name' => 'Sweden'),
//     'CH' => array('phone_code' => 41,'country_name' => 'Switzerland'),
//     'SY' => array('phone_code' => 963,'country_name' => 'Syrian Arab Republic'),
//     'TW' => array('phone_code' => 886,'country_name' => 'Taiwan, Province of China'),
//     'TJ' => array('phone_code' => 992,'country_name' => 'Tajikistan'),
//     'TZ' => array('phone_code' => 255,'country_name' => 'Tanzania, United Republic of'),
//     'TH' => array('phone_code' => 66,'country_name' => 'Thailand'),
//     'TL' => array('phone_code' => 670,'country_name' => 'Timor-Leste'),
//     'TG' => array('phone_code' => 228,'country_name' => 'Togo'),
//     'TK' => array('phone_code' => 690,'country_name' => 'Tokelau'),
//     'TO' => array('phone_code' => 676,'country_name' => 'Tonga'),
//     'TT' => array('phone_code' => 1868,'country_name' => 'Trinidad and Tobago'),
//     'TN' => array('phone_code' => 216,'country_name' => 'Tunisia'),
//     'TR' => array('phone_code' => 90,'country_name' => 'Turkey'),
//     'TM' => array('phone_code' => 7370,'country_name' => 'Turkmenistan'),
//     'TC' => array('phone_code' => 1649,'country_name' => 'Turks and Caicos Islands'),
//     'TV' => array('phone_code' => 688,'country_name' => 'Tuvalu'),
//     'UG' => array('phone_code' => 256,'country_name' => 'Uganda'),
//     'UA' => array('phone_code' => 380,'country_name' => 'Ukraine'),
//     'AE' => array('phone_code' => 971,'country_name' => 'United Arab Emirates'),
//     'GB' => array('phone_code' => 44,'country_name' => 'United Kingdom'),
//     'US' => array('phone_code' => 1,'country_name' => 'United States'),
//     'UM' => array('phone_code' => 1,'country_name' => 'United States Minor Outlying Islands'),
//     'UY' => array('phone_code' => 598,'country_name' => 'Uruguay'),
//     'UZ' => array('phone_code' => 998,'country_name' => 'Uzbekistan'),
//     'VU' => array('phone_code' => 678,'country_name' => 'Vanuatu'),
//     'VE' => array('phone_code' => 58,'country_name' => 'Venezuela'),
//     'VN' => array('phone_code' => 84,'country_name' => 'Viet Nam'),
//     'VG' => array('phone_code' => 1284,'country_name' => 'Virgin Islands, British'),
//     'VI' => array('phone_code' => 1340,'country_name' => 'Virgin Islands, U.s.'),
//     'WF' => array('phone_code' => 681,'country_name' => 'Wallis and Futuna'),
//     'EH' => array('phone_code' => 212,'country_name' => 'Western Sahara'),
//     'YE' => array('phone_code' => 967,'country_name' => 'Yemen'),
//     'ZM' => array('phone_code' => 260,'country_name' => 'Zambia'),
//     'ZW' => array('phone_code' => 263,'country_name' => 'Zimbabwe') -->
