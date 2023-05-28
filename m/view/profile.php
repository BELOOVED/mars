<?php if (!isset($us['id'])) {header("location: /");} ?>
<script type="text/javascript">
  document.querySelector(".background-image").remove()
</script>
<div class="global-container ">
  <div class="container">
    <div class="container-content">
      <section class="page-content ">
        <div class="user-settings">
          <div class="page-bg"></div>
          <div class="personal-information">
            <div class="personal-info-header">
              <a href="profile-navigation" class="back"><i class="icon-arrow-left"></i></a>
              <h2>HESABIM</h2>
            </div>
            <form class="personal-info-form">
              <div class="form-label "><span class="label">Hesap ID</span><label class="mask-input"><input type="text" class="input" disabled="" value="1943467"></label></div>
              <div class="form-label "><span class="label">Kullanıcı Adı</span><label class="mask-input"><input type="text" class="input" disabled="" value="<?=$us['login']?>"></label></div>
              <div class="form-label "><span class="label">Adınız</span><label class="mask-input"><input name="firstName" placeholder="Ad" type="text" class="input" value=""></label></div>
              <div class="form-label "><span class="label">Soyadınız:</span><label class="mask-input"><input name="lastName" placeholder="Soyad" type="text" class="input" value=""></label></div>
              <div class="form-label ">
                <span class="label">Ülke:</span>
                <label class="mask-input">
                  <div class="select">
                    <select class="form-control-lg" disabled="">
                      <option disabled="" value="default">Seçiniz...</option>
                      <option value="TR">Türkiye</option>
                      <option value="AF">Afganistan</option>
                      <option value="AX">Åland Adaları</option>
                      <option value="DZ">Cezayir</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarktika</option>
                      <option value="AG">Antigua ve Barbuda</option>
                      <option value="AR">Arjantin</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Avustralya</option>
                      <option value="AZ">Azerbaycan</option>
                      <option value="BS">Bahamalar</option>
                      <option value="BH">Bahreyn</option>
                      <option value="BD">Bangladeş</option>
                      <option value="BB">Barbados</option>
                      <option value="BE">Belçika</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Butan</option>
                      <option value="BO">Bolivya</option>
                      <option value="BW">Botsvana</option>
                      <option value="IO">Britanya Hint Okyanusu Toprakları</option>
                      <option value="BN">Brunei</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Kamboçya</option>
                      <option value="CM">Kamerun</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Adaları</option>
                      <option value="CF">Orta Afrika Cumhuriyeti</option>
                      <option value="TD">Çad</option>
                      <option value="CL">Şili</option>
                      <option value="CN">Çin</option>
                      <option value="CX">Christmas Adası</option>
                      <option value="CC">Cocos (Keeling) Adaları</option>
                      <option value="CO">Kolombiya</option>
                      <option value="KM">Komorlar</option>
                      <option value="CG">Kongo - Brazavil</option>
                      <option value="CD">Kongo - Kinşasa</option>
                      <option value="CK">Cook Adaları</option>
                      <option value="CR">Kosta Rika</option>
                      <option value="CI">Fildişi Sahili</option>
                      <option value="CU">Küba</option>
                      <option value="CY">Kıbrıs</option>
                      <option value="DK">Danimarka</option>
                      <option value="DJ">Cibuti</option>
                      <option value="DM">Dominika</option>
                      <option value="DO">Dominik Cumhuriyeti</option>
                      <option value="EC">Ekvador</option>
                      <option value="EG">Mısır</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Ekvator Ginesi</option>
                      <option value="ER">Eritre</option>
                      <option value="ET">Etiyopya</option>
                      <option value="FK">Falkland Adaları</option>
                      <option value="FO">Faroe Adaları</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finlandiya</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambiya</option>
                      <option value="GE">Gürcistan</option>
                      <option value="GH">Gana</option>
                      <option value="GI">Cebelitarık</option>
                      <option value="GL">Grönland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadalupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Gine</option>
                      <option value="GW">Gine-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="VA">Vatikan</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Çin Hong Kong ÖİB</option>
                      <option value="IS">İzlanda</option>
                      <option value="IN">Hindistan</option>
                      <option value="ID">Endonezya</option>
                      <option value="IR">İran</option>
                      <option value="IQ">Irak</option>
                      <option value="IM">Man Adası</option>
                      <option value="IL">İsrail</option>
                      <option value="JM">Jamaika</option>
                      <option value="JP">Japonya</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Ürdün</option>
                      <option value="KZ">Kazakistan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KR">Güney Kore</option>
                      <option value="XK">Kosova</option>
                      <option value="KW">Kuveyt</option>
                      <option value="KG">Kırgızistan</option>
                      <option value="LA">Laos</option>
                      <option value="LB">Lübnan</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberya</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LU">Lüksemburg</option>
                      <option value="MO">Çin Makao ÖİB</option>
                      <option value="MG">Madagaskar</option>
                      <option value="MW">Malavi</option>
                      <option value="MY">Malezya</option>
                      <option value="MV">Maldivler</option>
                      <option value="ML">Mali</option>
                      <option value="MR">Moritanya</option>
                      <option value="MU">Mauritius</option>
                      <option value="MX">Meksika</option>
                      <option value="FM">Mikronezya</option>
                      <option value="MC">Monako</option>
                      <option value="MN">Moğolistan</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Fas</option>
                      <option value="MZ">Mozambik</option>
                      <option value="MM">Myanmar (Burma)</option>
                      <option value="NA">Namibya</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NZ">Yeni Zelanda</option>
                      <option value="NI">Nikaragua</option>
                      <option value="NE">Nijer</option>
                      <option value="NG">Nijerya</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Adası</option>
                      <option value="NO">Norveç</option>
                      <option value="OM">Umman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua Yeni Gine</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Filipinler</option>
                      <option value="PN">Pitcairn Adaları</option>
                      <option value="QA">Katar</option>
                      <option value="RW">Ruanda</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">São Tomé ve Príncipe</option>
                      <option value="SA">Suudi Arabistan</option>
                      <option value="SN">Senegal</option>
                      <option value="SC">Seyşeller</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapur</option>
                      <option value="SB">Solomon Adaları</option>
                      <option value="SO">Somali</option>
                      <option value="ZA">Güney Afrika</option>
                      <option value="GS">Güney Georgia ve Güney Sandwich Adaları</option>
                      <option value="ES">İspanya</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Surinam</option>
                      <option value="SJ">Svalbard ve Jan Mayen</option>
                      <option value="SZ">Svaziland</option>
                      <option value="CH">İsviçre</option>
                      <option value="SY">Suriye</option>
                      <option value="TJ">Tacikistan</option>
                      <option value="TZ">Tanzanya</option>
                      <option value="TH">Tayland</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad ve Tobago</option>
                      <option value="TN">Tunus</option>
                      <option value="TM">Türkmenistan</option>
                      <option value="TC">Turks ve Caicos Adaları</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="AE">Birleşik Arap Emirlikleri</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Özbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam</option>
                      <option value="EH">Batı Sahra</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambiya</option>
                      <option value="ZW">Zimbabve</option>
                    </select>
                  </div>
                </label>
              </div>
              <div class="form-label "><span class="label">Şehir</span><label class="mask-input"><input name="city" placeholder="Şehir" type="text" class="input" value=""></label></div>
              <div class="form-label "><span class="label">E-posta</span><label class="mask-input"><input name="email" disabled="" class="input" value="**********@gmail.com"></label></div>
              <div class="form-label "><span class="label">Adres</span><label class="mask-input"><input name="address" placeholder="Adres" type="text" class="input" value=""></label></div>
              <div class="form-label "><span class="label">Telefon Numarası</span><label class="mask-input"><input name="phone" disabled="" class="input" value="+90 *** *** ** **"></label></div>
            </form>
          </div>
          <div class="profile-info-popup-wrap"></div>
        </div>
      </section>
    </div>
  </div>
</div>
