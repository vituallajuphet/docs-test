<?php
/**********************************************************/
/*            CODE DESIGN FOR PROWEAVERIANS               */
/*            CODE BY: DEVELOPERS TEAM                    */
/*            Created: NOVEMBER 24, 2009                  */
/*            Version: 1.0.4                              */
/*            Last Updated: JUNE 14, 2018                  */
/**********************************************************/
class FormsClass {
	var $optMonth = array('January','February','March','April','May','June','July','August','September','October','November','December');
	var $countries = array('AD'=>array('name'=>'ANDORRA','code'=>'376'),'AE'=>array('name'=>'UNITED ARAB EMIRATES','code'=>'971'),'AF'=>array('name'=>'AFGHANISTAN','code'=>'93'),'AG'=>array('name'=>'ANTIGUA AND BARBUDA','code'=>'1268'),'AI'=>array('name'=>'ANGUILLA','code'=>'1264'),'AL'=>array('name'=>'ALBANIA','code'=>'355'),'AM'=>array('name'=>'ARMENIA','code'=>'374'),'AN'=>array('name'=>'NETHERLANDS ANTILLES','code'=>'599'),'AO'=>array('name'=>'ANGOLA','code'=>'244'),'AQ'=>array('name'=>'ANTARCTICA','code'=>'672'),'AR'=>array('name'=>'ARGENTINA','code'=>'54'),'AS'=>array('name'=>'AMERICAN SAMOA','code'=>'1684'),'AT'=>array('name'=>'AUSTRIA','code'=>'43'),'AU'=>array('name'=>'AUSTRALIA','code'=>'61'),'AW'=>array('name'=>'ARUBA','code'=>'297'),'AZ'=>array('name'=>'AZERBAIJAN','code'=>'994'),'BA'=>array('name'=>'BOSNIA AND HERZEGOVINA','code'=>'387'),'BB'=>array('name'=>'BARBADOS','code'=>'1246'),'BD'=>array('name'=>'BANGLADESH','code'=>'880'),'BE'=>array('name'=>'BELGIUM','code'=>'32'),'BF'=>array('name'=>'BURKINA FASO','code'=>'226'),'BG'=>array('name'=>'BULGARIA','code'=>'359'),'BH'=>array('name'=>'BAHRAIN','code'=>'973'),'BI'=>array('name'=>'BURUNDI','code'=>'257'),'BJ'=>array('name'=>'BENIN','code'=>'229'),'BL'=>array('name'=>'SAINT BARTHELEMY','code'=>'590'),'BM'=>array('name'=>'BERMUDA','code'=>'1441'),'BN'=>array('name'=>'BRUNEI DARUSSALAM','code'=>'673'),'BO'=>array('name'=>'BOLIVIA','code'=>'591'),'BR'=>array('name'=>'BRAZIL','code'=>'55'),'BS'=>array('name'=>'BAHAMAS','code'=>'1242'),'BT'=>array('name'=>'BHUTAN','code'=>'975'),'BW'=>array('name'=>'BOTSWANA','code'=>'267'),'BY'=>array('name'=>'BELARUS','code'=>'375'),'BZ'=>array('name'=>'BELIZE','code'=>'501'),'CA'=>array('name'=>'CANADA','code'=>'1'),'CC'=>array('name'=>'COCOS (KEELING) ISLANDS','code'=>'61'),'CD'=>array('name'=>'CONGO,THE DEMOCRATIC REPUBLIC OF THE','code'=>'243'),'CF'=>array('name'=>'CENTRAL AFRICAN REPUBLIC','code'=>'236'),'CG'=>array('name'=>'CONGO','code'=>'242'),'CH'=>array('name'=>'SWITZERLAND','code'=>'41'),'CI'=>array('name'=>'COTE D IVOIRE','code'=>'225'),'CK'=>array('name'=>'COOK ISLANDS','code'=>'682'),'CL'=>array('name'=>'CHILE','code'=>'56'),'CM'=>array('name'=>'CAMEROON','code'=>'237'),'CN'=>array('name'=>'CHINA','code'=>'86'),'CO'=>array('name'=>'COLOMBIA','code'=>'57'),'CR'=>array('name'=>'COSTA RICA','code'=>'506'),'CU'=>array('name'=>'CUBA','code'=>'53'),'CV'=>array('name'=>'CAPE VERDE','code'=>'238'),'CX'=>array('name'=>'CHRISTMAS ISLAND','code'=>'61'),'CY'=>array('name'=>'CYPRUS','code'=>'357'),'CZ'=>array('name'=>'CZECH REPUBLIC','code'=>'420'),'DE'=>array('name'=>'GERMANY','code'=>'49'),'DJ'=>array('name'=>'DJIBOUTI','code'=>'253'),'DK'=>array('name'=>'DENMARK','code'=>'45'),'DM'=>array('name'=>'DOMINICA','code'=>'1767'),'DO'=>array('name'=>'DOMINICAN REPUBLIC','code'=>'1809'),'DZ'=>array('name'=>'ALGERIA','code'=>'213'),'EC'=>array('name'=>'ECUADOR','code'=>'593'),'EE'=>array('name'=>'ESTONIA','code'=>'372'),'EG'=>array('name'=>'EGYPT','code'=>'20'),'ER'=>array('name'=>'ERITREA','code'=>'291'),'ES'=>array('name'=>'SPAIN','code'=>'34'),'ET'=>array('name'=>'ETHIOPIA','code'=>'251'),'FI'=>array('name'=>'FINLAND','code'=>'358'),'FJ'=>array('name'=>'FIJI','code'=>'679'),'FK'=>array('name'=>'FALKLAND ISLANDS (MALVINAS)','code'=>'500'),'FM'=>array('name'=>'MICRONESIA,FEDERATED STATES OF','code'=>'691'),'FO'=>array('name'=>'FAROE ISLANDS','code'=>'298'),'FR'=>array('name'=>'FRANCE','code'=>'33'),'GA'=>array('name'=>'GABON','code'=>'241'),'GB'=>array('name'=>'UNITED KINGDOM','code'=>'44'),'GD'=>array('name'=>'GRENADA','code'=>'1473'),'GE'=>array('name'=>'GEORGIA','code'=>'995'),'GH'=>array('name'=>'GHANA','code'=>'233'),'GI'=>array('name'=>'GIBRALTAR','code'=>'350'),'GL'=>array('name'=>'GREENLAND','code'=>'299'),'GM'=>array('name'=>'GAMBIA','code'=>'220'),'GN'=>array('name'=>'GUINEA','code'=>'224'),'GQ'=>array('name'=>'EQUATORIAL GUINEA','code'=>'240'),'GR'=>array('name'=>'GREECE','code'=>'30'),'GG'=>array('name'=>'GUERNSEY','code'=>'44'),'GT'=>array('name'=>'GUATEMALA','code'=>'502'),'GU'=>array('name'=>'GUAM','code'=>'1671'),'GW'=>array('name'=>'GUINEA-BISSAU','code'=>'245'),'GY'=>array('name'=>'GUYANA','code'=>'592'),'HK'=>array('name'=>'HONG KONG','code'=>'852'),'HN'=>array('name'=>'HONDURAS','code'=>'504'),'HR'=>array('name'=>'CROATIA','code'=>'385'),'HT'=>array('name'=>'HAITI','code'=>'509'),'HU'=>array('name'=>'HUNGARY','code'=>'36'),'ID'=>array('name'=>'INDONESIA','code'=>'62'),'IE'=>array('name'=>'IRELAND','code'=>'353'),'IL'=>array('name'=>'ISRAEL','code'=>'972'),'IM'=>array('name'=>'ISLE OF MAN','code'=>'44'),'IN'=>array('name'=>'INDIA','code'=>'91'),'IQ'=>array('name'=>'IRAQ','code'=>'964'),'IR'=>array('name'=>'IRAN,ISLAMIC REPUBLIC OF','code'=>'98'),'IS'=>array('name'=>'ICELAND','code'=>'354'),'IT'=>array('name'=>'ITALY','code'=>'39'),'JM'=>array('name'=>'JAMAICA','code'=>'1876'),'JO'=>array('name'=>'JORDAN','code'=>'962'),'JP'=>array('name'=>'JAPAN','code'=>'81'),'JE'=>array('name'=>'JERSEY','code'=>'44'),'KE'=>array('name'=>'KENYA','code'=>'254'),'KG'=>array('name'=>'KYRGYZSTAN','code'=>'996'),'KH'=>array('name'=>'CAMBODIA','code'=>'855'),'KI'=>array('name'=>'KIRIBATI','code'=>'686'),'KM'=>array('name'=>'COMOROS','code'=>'269'),'KN'=>array('name'=>'SAINT KITTS AND NEVIS','code'=>'1869'),'KP'=>array('name'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF','code'=>'850'),'KR'=>array('name'=>'KOREA REPUBLIC OF','code'=>'82'),'KW'=>array('name'=>'KUWAIT','code'=>'965'),'KY'=>array('name'=>'CAYMAN ISLANDS','code'=>'1345'),'KZ'=>array('name'=>'KAZAKSTAN','code'=>'7'),'LA'=>array('name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC','code'=>'856'),'LB'=>array('name'=>'LEBANON','code'=>'961'),'LC'=>array('name'=>'SAINT LUCIA','code'=>'1758'),'LI'=>array('name'=>'LIECHTENSTEIN','code'=>'423'),'LK'=>array('name'=>'SRI LANKA','code'=>'94'),'LR'=>array('name'=>'LIBERIA','code'=>'231'),'LS'=>array('name'=>'LESOTHO','code'=>'266'),'LT'=>array('name'=>'LITHUANIA','code'=>'370'),'LU'=>array('name'=>'LUXEMBOURG','code'=>'352'),'LV'=>array('name'=>'LATVIA','code'=>'371'),'LY'=>array('name'=>'LIBYAN ARAB JAMAHIRIYA','code'=>'218'),'MA'=>array('name'=>'MOROCCO','code'=>'212'),'MC'=>array('name'=>'MONACO','code'=>'377'),'MD'=>array('name'=>'MOLDOVA,REPUBLIC OF','code'=>'373'),'ME'=>array('name'=>'MONTENEGRO','code'=>'382'),'MF'=>array('name'=>'SAINT MARTIN','code'=>'1599'),'MG'=>array('name'=>'MADAGASCAR','code'=>'261'),'MH'=>array('name'=>'MARSHALL ISLANDS','code'=>'692'),'MK'=>array('name'=>'MACEDONIA,THE FORMER YUGOSLAV REPUBLIC OF','code'=>'389'),'ML'=>array('name'=>'MALI','code'=>'223'),'MM'=>array('name'=>'MYANMAR','code'=>'95'),'MN'=>array('name'=>'MONGOLIA','code'=>'976'),'MO'=>array('name'=>'MACAU','code'=>'853'),'MP'=>array('name'=>'NORTHERN MARIANA ISLANDS','code'=>'1670'),'MR'=>array('name'=>'MAURITANIA','code'=>'222'),'MS'=>array('name'=>'MONTSERRAT','code'=>'1664'),'MT'=>array('name'=>'MALTA','code'=>'356'),'MU'=>array('name'=>'MAURITIUS','code'=>'230'),'MV'=>array('name'=>'MALDIVES','code'=>'960'),'MW'=>array('name'=>'MALAWI','code'=>'265'),'MX'=>array('name'=>'MEXICO','code'=>'52'),'MY'=>array('name'=>'MALAYSIA','code'=>'60'),'MZ'=>array('name'=>'MOZAMBIQUE','code'=>'258'),'NA'=>array('name'=>'NAMIBIA','code'=>'264'),'NC'=>array('name'=>'NEW CALEDONIA','code'=>'687'),'NE'=>array('name'=>'NIGER','code'=>'227'),'NG'=>array('name'=>'NIGERIA','code'=>'234'),'NI'=>array('name'=>'NICARAGUA','code'=>'505'),'NL'=>array('name'=>'NETHERLANDS','code'=>'31'),'NO'=>array('name'=>'NORWAY','code'=>'47'),'NP'=>array('name'=>'NEPAL','code'=>'977'),'NR'=>array('name'=>'NAURU','code'=>'674'),'NU'=>array('name'=>'NIUE','code'=>'683'),'NZ'=>array('name'=>'NEW ZEALAND','code'=>'64'),'OM'=>array('name'=>'OMAN','code'=>'968'),'PA'=>array('name'=>'PANAMA','code'=>'507'),'PE'=>array('name'=>'PERU','code'=>'51'),'PF'=>array('name'=>'FRENCH POLYNESIA','code'=>'689'),'PG'=>array('name'=>'PAPUA NEW GUINEA','code'=>'675'),'PH'=>array('name'=>'PHILIPPINES','code'=>'63'),'PK'=>array('name'=>'PAKISTAN','code'=>'92'),'PL'=>array('name'=>'POLAND','code'=>'48'),'PM'=>array('name'=>'SAINT PIERRE AND MIQUELON','code'=>'508'),'PN'=>array('name'=>'PITCAIRN','code'=>'870'),'PR'=>array('name'=>'PUERTO RICO','code'=>'1'),'PT'=>array('name'=>'PORTUGAL','code'=>'351'),'PW'=>array('name'=>'PALAU','code'=>'680'),'PY'=>array('name'=>'PARAGUAY','code'=>'595'),'QA'=>array('name'=>'QATAR','code'=>'974'),'RO'=>array('name'=>'ROMANIA','code'=>'40'),'RS'=>array('name'=>'SERBIA','code'=>'381'),'RU'=>array('name'=>'RUSSIAN FEDERATION','code'=>'7'),'RW'=>array('name'=>'RWANDA','code'=>'250'),'SA'=>array('name'=>'SAUDI ARABIA','code'=>'966'),'SB'=>array('name'=>'SOLOMON ISLANDS','code'=>'677'),'SC'=>array('name'=>'SEYCHELLES','code'=>'248'),'SD'=>array('name'=>'SUDAN','code'=>'249'),'SE'=>array('name'=>'SWEDEN','code'=>'46'),'SG'=>array('name'=>'SINGAPORE','code'=>'65'),'SH'=>array('name'=>'SAINT HELENA','code'=>'290'),'SI'=>array('name'=>'SLOVENIA','code'=>'386'),'SK'=>array('name'=>'SLOVAKIA','code'=>'421'),'SL'=>array('name'=>'SIERRA LEONE','code'=>'232'),'SM'=>array('name'=>'SAN MARINO','code'=>'378'),'SN'=>array('name'=>'SENEGAL','code'=>'221'),'SO'=>array('name'=>'SOMALIA','code'=>'252'),'SR'=>array('name'=>'SURINAME','code'=>'597'),'ST'=>array('name'=>'SAO TOME AND PRINCIPE','code'=>'239'),'SV'=>array('name'=>'EL SALVADOR','code'=>'503'),'SY'=>array('name'=>'SYRIAN ARAB REPUBLIC','code'=>'963'),'SZ'=>array('name'=>'SWAZILAND','code'=>'268'),'TC'=>array('name'=>'TURKS AND CAICOS ISLANDS','code'=>'1649'),'TD'=>array('name'=>'CHAD','code'=>'235'),'TG'=>array('name'=>'TOGO','code'=>'228'),'TH'=>array('name'=>'THAILAND','code'=>'66'),'TJ'=>array('name'=>'TAJIKISTAN','code'=>'992'),'TK'=>array('name'=>'TOKELAU','code'=>'690'),'TL'=>array('name'=>'TIMOR-LESTE','code'=>'670'),'TM'=>array('name'=>'TURKMENISTAN','code'=>'993'),'TN'=>array('name'=>'TUNISIA','code'=>'216'),'TO'=>array('name'=>'TONGA','code'=>'676'),'TR'=>array('name'=>'TURKEY','code'=>'90'),'TT'=>array('name'=>'TRINIDAD AND TOBAGO','code'=>'1868'),'TV'=>array('name'=>'TUVALU','code'=>'688'),'TW'=>array('name'=>'TAIWAN,PROVINCE OF CHINA','code'=>'886'),'TZ'=>array('name'=>'TANZANIA,UNITED REPUBLIC OF','code'=>'255'),'UA'=>array('name'=>'UKRAINE','code'=>'380'),'UG'=>array('name'=>'UGANDA','code'=>'256'),'US'=>array('name'=>'UNITED STATES','code'=>'1'),'UY'=>array('name'=>'URUGUAY','code'=>'598'),'UZ'=>array('name'=>'UZBEKISTAN','code'=>'998'),'VA'=>array('name'=>'HOLY SEE (VATICAN CITY STATE)','code'=>'39'),'VC'=>array('name'=>'SAINT VINCENT AND THE GRENADINES','code'=>'1784'),'VE'=>array('name'=>'VENEZUELA','code'=>'58'),'VG'=>array('name'=>'VIRGIN ISLANDS,BRITISH','code'=>'1284'),'VI'=>array('name'=>'VIRGIN ISLANDS,U.S.','code'=>'1340'),'VN'=>array('name'=>'VIET NAM','code'=>'84'),'VU'=>array('name'=>'VANUATU','code'=>'678'),'WF'=>array('name'=>'WALLIS AND FUTUNA','code'=>'681'),'WS'=>array('name'=>'SAMOA','code'=>'685'),'XK'=>array('name'=>'KOSOVO','code'=>'381'),'YE'=>array('name'=>'YEMEN','code'=>'967'),'YT'=>array('name'=>'MAYOTTE','code'=>'262'),'ZA'=>array('name'=>'SOUTH AFRICA','code'=>'27'),'ZM'=>array('name'=>'ZAMBIA','code'=>'260'),'ZW'=>array('name'=>'ZIMBABWE','code'=>'263'));
	//fields
	// ex. $input->fields('Total','text','Total','readonly="readonly" onkeypress="test" ondblclick="test"');
	function fields($name='',$class='',$id='',$attrib='') {
		$fldname = str_replace(' ', '_', $name);
		$value = '';
		if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $value = $_POST[$fldname];
		$input = '<div class="field_holder animated_box"><input type="text" name="'.$fldname.'" class="'.$class.'" value="'.$value.'" id="'.$id.'" '.$attrib.'><span class = "animated_class"></span></div>';
		echo $input;
	}

	function label($name='', $required=''){
		$fldname = str_replace(' ', '_', $name);
		$value = '';
		if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $value = $_POST[$fldname];
		$input = '<div class ="form_label"><label class = "text_uppercase"><strong>'.$name.' <span class = "required_filed">'.$required.'</span></strong></label></div>';
		echo $input;
	}

	 function masterselect($name='',$required='',$class='',$optName='',$id='',$attrib='') {
        $n = '';
        $option = '';
        $strfldname = str_replace(' ', '_', $name);
        $fldname = str_replace('?', '', $strfldname);

		$lblname = str_replace('_', ' ', $name);
        if(isset($_SESSION[$fldname])) $n = $_SESSION[$fldname];
        if(isset($_POST[$fldname])) $n = $_POST[$fldname];

		$inputlabel = '<div class="group"><div class ="form_label"><label class = "text_uppercase"><strong>'.$lblname.' <span class = "required_filed">'.$required.'</span></strong></label></div>';

        foreach($optName as $optVal){
            $cndtn = ($n == $optVal)? 'selected="selected"' : '';
            //$option .= '<option value="'.$optVal.'" '.$cndtn.'>'.$optVal.'</option>';

            if($optVal === $optName[0])
                $option .= '<option value="" '.$cndtn.'>'.$optVal.'</option>';
            else
                $option .= '<option value="'.$optVal.'" '.$cndtn.'>'.$optVal.'</option>';
        }
       $select = '<div class="select-field"><select name="'.$fldname.'" class="'.$class.'" id="'.$id.'" '.$attrib.'>'.$option.'</select></div></div>';
        echo $inputlabel.''.$select;
    }

	// @param field name, required, value, id, attrib, rows
	function masteradio($name='',$required='',$value='',$id='',$attrib='',$rows=''){
		$n = '';
		$style = '';
		$brekz = 0;
		$count = 0;
		$strlblname = str_replace('?', '', $name);
		$fldname = str_replace(' ', '_', $strlblname);
		$lblname = str_replace('_', ' ', $name);

		$radio = '<table class="radio" border="0" cellpadding="0" cellspacing="0"><tr>';
		if(isset($_SESSION[$fldname])) $n = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $n = $_POST[$fldname];

		if($rows == 1){
			$style = " style='width: 100%;'";
		}else if($rows == 2){
			$style = " style='width: 50%;'";
		}else if($rows == 3){
			$style = " style='width: 33%;'";
		}else if($rows == 4){
			$style = " style='width: 25%;'";
		}

		$inputlabel = '<div class="group"><div class ="form_label"><label class = "text_uppercase"><strong>'.$lblname.' <span class = "required_filed">'.$required.'</span></strong></label></div>';


		foreach($value as $radVal){
			$cndtn = ($n == $radVal)? 'checked="checked"' : '';
			if($brekz == $rows) {
				$radio .= '</tr><tr>';
				$brekz = 0;
			}
			$radio .= '<td'.$style.'><input type="radio" name="'.$fldname.'" value="'.$radVal.'" '.$cndtn.' id="'.$fldname.$count.'" '.$attrib.'>'.'<label for="'.$fldname.$count.'"style="font-weight:normal; color:#000;">'.$radVal.'</label></td>'."\n";
			$brekz++;
			$count++;
		}
		$radio .= "</tr></table></div>";
		echo $inputlabel.''.$radio;
	}

	// @param field name, required, class, replaceholder, rename, id, attrib, value
	function masterfield($name='',$required='' ,$class='',$replaceholder='', $rename='', $id='', $attrib='', $value=''){

		if($rename == ''){
			$strfldname = str_replace(' ', '_', $name);
			$fldname = str_replace('?', '', $strfldname);
		}else{
			$strfldname = str_replace(' ', '_', $rename);
			$fldname = str_replace('?', '', $strfldname);
		}

		$lblname = str_replace('_', ' ', $name);
		$strlblname = str_replace('?', '', $lblname);

		$strlblname = str_replace('?', '', $name);



		if($replaceholder == ''){
			$placeholder = "Enter ".strtolower(preg_replace('/\s+/', ' ',$strlblname)).' here';
		}else{
			$placeholder = $replaceholder;
		}

		$value = '';
		if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $value = $_POST[$fldname];



		$inputlabel = '<div class="group"><div class ="form_label"><label class = "text_uppercase"><strong>'.$lblname.' <span class = "required_filed">'.$required.'</span></strong></label></div>';


		$inputfield = '<div class="field_holder animated_box"><input type="text" name="'.$fldname.'" class="'.$class.'" value="'.$value.'" id="'.$id.'" placeholder="'.trim($placeholder).'" '.$attrib.'><span class = "animated_class"></span></div></div>';

		echo $inputlabel.' '.$inputfield;

	}

	//textarea
	// ex. $input->textarea('Total','textarea','Total','readonly="readonly" onkeypress="test" ondblclick="test"','This is a textarea');
	function mastertextarea($name='',$required='' ,$class='',$replaceholder='', $rename='', $id='', $attrib='', $value=''){

		if($rename == ''){
			$fldname = str_replace(' ', '_', $name);
		}else{
			$fldname = str_replace(' ', '_', $rename);
		}

		$lblname = str_replace('_', ' ', $name);
		$strlblname = str_replace('?', '', $lblname);


		if($replaceholder == ''){
			$placeholder = "Enter ".strtolower(preg_replace('/\s+/', ' ',$strlblname)).' here';
		}else{
			$placeholder = $replaceholder;
		}

		if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $value = $_POST[$fldname];


		$inputlabel = '<div class="group"><div class ="form_label"><label class = "text_uppercase"><strong>'.$lblname.' <span class = "required_filed">'.$required.'</span></strong></label></div>';

		$txtarea = '<div class="field_holder animated_box"><textarea type="text" name="'.$fldname.'" class="'.$class.'" value="'.$value.'" id="'.$id.'" placeholder="'.trim($placeholder).'" '.$attrib.'></textarea><span class = "animated_class"></span></div></div>';


		echo $inputlabel.''.$txtarea;
	}


	//masterdatepicker
	function masterdatepicker($name='',$required="", $id='', $replaceholder='', $attrib='') {
		$fldname = str_replace(' ', '_', $name);
		$lblname = str_replace('_', ' ', $name);
		$value = '';
		$errorVal = '';

		$lblname = str_replace('_', ' ', $name);
		$strlblname = str_replace('?', '', $lblname);

		if($replaceholder == ''){
			$placeholder = "Enter ".strtolower(preg_replace('/\s+/', ' ',$strlblname)).' here';
		}else{
			$placeholder = $replaceholder;
		}

		if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $value = $_POST[$fldname];

		$inputlabel = '<div class="group"><div class ="form_label"><label class = "text_uppercase"><strong>'.$lblname.' <span class = "required_filed">'.$required.'</span></strong></label></div>';

		$input = '<div class="field_holder animated_box"><input type="text" name="'.$fldname.'" class=" form_field Date " value="'.$value.'" id="'.$id.'" '.$attrib.' readonly="readonly" placeholder="'.$placeholder.'"><span class = "animated_class"></span></div></div>';

		echo $inputlabel.''.$input;
	}


	//textarea
	// ex. $input->textarea('Total','textarea','Total','readonly="readonly" onkeypress="test" ondblclick="test"','This is a textarea');
	function textarea($name='',$class='',$id='',$attrib='',$value = '') {
		$fldname = str_replace(' ', '_', $name);
		if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $value = $_POST[$fldname];
		$txtarea = '<div class="field_holder animated_box"><textarea name="'.$fldname.'" class="'.$class.'" id="'.$id.'" '.$attrib.'>'.$value.'</textarea><span class = "animated_class"></span></div>';
		echo $txtarea;
	}

	//select with script
    // ex. $input->select('Small_Box','select',$box,'Small_Box','onchange="getTotal();" onkeypress="test" ondblclick="test"');
    function select($name='',$class='',$optName='',$id='',$attrib='') {
        $n = '';
        $option = '';
        $fldname = str_replace(' ', '_', $name);
        if(isset($_SESSION[$fldname])) $n = $_SESSION[$fldname];
        if(isset($_POST[$fldname])) $n = $_POST[$fldname];
        foreach($optName as $optVal){
            $cndtn = ($n == $optVal)? 'selected="selected"' : '';
            //$option .= '<option value="'.$optVal.'" '.$cndtn.'>'.$optVal.'</option>';

            if($optVal === $optName[0])
                $option .= '<option value="" '.$cndtn.'>'.$optVal.'</option>';
            else
                $option .= '<option value="'.$optVal.'" '.$cndtn.'>'.$optVal.'</option>';
        }
         $select = '<div class="select-field"><select name="'.$fldname.'" class="'.$class.'" id="'.$id.'" '.$attrib.'>'.$option.'</select></div>';
        echo $select;
    }


	//radio
	// ex. $input->radio($input->radio('Example',array('Yes','No'),'Example','readonly="readonly" onkeypress="test" ondblclick="test"');
	function radio($name='',$value='',$id='',$attrib='',$rows=''){
		$n = '';
		$style = '';
		$brekz = 0;
		$count = 0;
		$fldname = str_replace(' ', '_', $name);


		$radio = '<table class="radio" border="0" cellpadding="0" cellspacing="0"><tr>';
		if(isset($_SESSION[$fldname])) $n = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $n = $_POST[$fldname];
		if($rows == 1){
			$style = "style='width: 100%;'";
		}else if($rows == 2){
			$style = " style='width: 50%;'";
		}else if($rows == 3){
			$style = " style='width: 33%;'";
		}else if($rows == 4){
			$style = " style='width: 25%;'";
		}

		foreach($value as $radVal){
			$cndtn = ($n == $radVal)? 'checked="checked"' : '';
			if($brekz == $rows) {
				$radio .= '</tr><tr>';
				$brekz = 0;
			}
			$radio .= '<td'.$style.'><input type="radio" name="'.$fldname.'" value="'.$radVal.'" '.$cndtn.' id="'.$fldname.$count.'" '.$attrib.'>'.'<label for="'.$fldname.$count.'"style="font-weight:normal; color:#000;">'.$radVal.'</label></td>'."\n";
			$brekz++;
			$count++;
		}
		$radio .= "</tr></table>";
		echo $radio;
	}

	function radioline($name='',$value='',$id='',$attrib='',$rows=''){
		$n = '';
		$style = '';
		$brekz = 0;
		$count = 0;
		$fldname = str_replace(' ', '_', $name);

		$radio = '<div class="radioLine">';
		if(isset($_SESSION[$fldname])) $n = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $n = $_POST[$fldname];
		if(empty($rows)){
			$rows = 4;
		}

		foreach($value as $radVal){
			$cndtn = ($n == $radVal)? 'checked="checked"' : '';
			if($brekz == $rows) {
				$radio .= '';
				$brekz = 0;
			}
			$radio .= '<div'.$style.'><input type="radio" name="'.$fldname.'" value="'.$radVal.'" '.$cndtn.' id="'.$fldname.$count.'" '.$attrib.'>'.'<label for="'.$fldname.$count.'"style="font-weight:normal; color:#000;">'.$radVal.'</label></div>'."\n";
			$brekz++;
			$count++;
		}
		$radio .= "</div>";
		echo $radio;
	}


	//checkbox
	// ex. $input->chkbox($are_you_licensed_in_the_state_of_state?',array('Yes','No'),'Example','readonly="readonly" onkeypress="test" ondblclick="test"');
	function chkbox($name='',$Val='',$id='',$attrib='',$rows=''){
		$fldname = str_replace(' ', '_', $name);
		$ctr = 1;
		$brekz = 0;
		$chckbox = '<table class="checkbox-table" border="0" cellpadding="0" cellspacing="0" style="margin-top:6px; width: 100%;"><tr>';
		if(empty($rows)){
			$rows = 4;
		}
		foreach($Val as $chckVal){
			$cndtn = '';
			if(isset($_SESSION[$fldname.'_'.$ctr]))
				$cndtn = ($_SESSION[$fldname.'_'.$ctr] == $chckVal)? 'checked="checked"' : '';
			if(isset($_POST[$fldname.'_'.$ctr]))
				$cndtn = ($_POST[$fldname.'_'.$ctr] == $chckVal)? 'checked="checked"' : '';

			if($brekz == $rows) {
				$chckbox .= '</tr><tr>';
				$brekz = 0;
			}
			$chckbox .= '<td><input type="checkbox" class="wskCheckbox" name="'.$fldname.'_'.$ctr.'" value="'.$chckVal.'" '.$cndtn.' id="'.$fldname.'_'.$ctr.'" '.$attrib.'/><label class="wskLabel" for="'.$fldname.'_'.$ctr.'">'.$chckVal.'</label></td>'."\n";
			$brekz++;
			$ctr++;
		}
		$chckbox .= "</tr></table>";
		echo $chckbox;
	}



	//buttons
	//ex. $input->buttons('submit','submit','Submit','','Submit','onchange="test" onkeypress="test" ondblclick="test"');
	function buttons($type='',$name='',$value='',$class='',$id='',$attrib='') {
		$button = '<input type="'.$type.'" name="'.$name.'" class="'.$class.'" value="'.$value.'" id="'.$id.'" '.$attrib.'>';
		echo $button;
	}

	//select option for months $input->selectMonth('Months','width: 80px; font-size:11px;');
	function selectMonth($name='',$class='') {
		$cndtn = '';
		$fldname = str_replace(' ', '_', $name);
		$curMon = date('F',time());
		$option = '<option value="'.$curMon.'">'.$curMon.'</option>';

		foreach($this->optMonth as $optkey => $optVal){
			if(isset($_SESSION[$fldname]))
				$cndtn = ($_SESSION[$fldname] == $optVal)? 'selected="selected"' : '';
			if(isset($_POST[$fldname]))
				$cndtn = ($_POST[$fldname] == $optVal)? 'selected="selected"' : '';
			$option .= '<option value="'.$optVal.'" '.$cndtn.'>'.$optVal.'</option>';
		}
		$selectMonth = '<select name="'.$fldname.'" class="'.$class.'">'.$option.'</select>';
		echo $selectMonth;
	}

	//select option for days $input->selectDays('Day_Birth','',array(30));
	function selectDays($name='',$class='') {
		$cndtn = '';
		$fldname = str_replace(' ', '_', $name);
		$numdays = array(date('t'));
		$curMon = date('F',time());
		$curDay = date('j',time());
		$optDays = '<option value="'.$curDay.'">'.$curDay.'</option>';
		foreach($numdays as $optkey => $optVal){
			if($optkey == $curMon){
				for($days=1;$days<=$optVal;$days++){
					if(isset($_SESSION[$fldname]))
						$cndtn = ($_SESSION[$fldname] == $days)? 'selected="selected"' : '';
					if(isset($_POST[$fldname]))
						$cndtn = ($_POST[$fldname] == $days)? 'selected="selected"' : '';
					if($days<=9)
						$days = 0 . $days;
						$optDays .= '<option value="'.$days.'" '.$cndtn.'>'.$days.'</option>';
				}
			}
		}
		$selectDays = '<select name="'.$fldname.'" class="'.$class.'">'.$optDays.'</select>';
		echo $selectDays;
	}

	//select option for years
	function selectYears($name='',$class='',$start,$upto) {
		$cndtn = '';
		$fldname = str_replace(' ', '_', $name);
		$curYr = date('Y',time());
		$optYears = '<option value="'.$curYr.'">'.$curYr.'</option>';
		for($year=$start;$year<=$upto;$year++){
			if(isset($_SESSION[$fldname]))
				$cndtn = ($_SESSION[$fldname] == $year)? 'selected="selected"' : '';
			if(isset($_POST[$fldname]))
				$cndtn = ($_POST[$fldname] == $year)? 'selected="selected"' : '';
			$optYears .= '<option value="'.$year.'" '.$cndtn.'>'.$year.'</option>';
		}
		$selectYears = '<select name="'.$fldname.'" class="'.$class.'">'.$optYears.'</select>';
		echo $selectYears;
	}

	//file
	function files($name='', $class='') {
		$fldname = str_replace(' ', '_', $name);
		$file = '<input name="'.$fldname.'" type="file" class="'.$class.'"/>';
		echo $file;
	}


	//datepicker
	function datepicker($name='',$id='',$attrib='') {
		$fldname = str_replace(' ', '_', $name);
		$value = '';
		$errorVal = '';
		if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
		if(isset($_POST[$fldname])) $value = $_POST[$fldname];

		$input = '<div class="field_holder animated_box"><input type="text" name="'.$fldname.'" class=" form_field Date " value="'.$value.'" id="'.$id.'" '.$attrib.' readonly="readonly"><span class = "animated_class"></span></div>';

		echo $input;
	}

	// input date today only
	function datetoday($name='',$id='',$attrib='') {
		$fldname = str_replace(' ', '_', $name);
		$value = date("F j, o");
		$errorVal = '';
		$input = '<div class="field_holder animated_box"><input type="text" name="'.$fldname.'" class="form_field" value="'.$value.'" id="'.$id.'" '.$attrib.' readonly="readonly"><span class = "animated_class" ></span></div>';
		echo $input;
	}

	// input date today only
	function amount($name='',$id='',$attrib='') {
		$fldname = str_replace(' ', '_', $name);
		$errorVal = '';

		$input = '<div class="field_holder animated_box"> <i id="icon" class="fas fa-dollar-sign "></i> <input type="text" name="'.$fldname.'" class="form_field amount" id="'.$id.'" '.$attrib.'><span class = "animated_class" ></span></div>';

		echo $input;
	}


	function checktxt($name='',$value='',$text='') {
		$fldname = str_replace(' ', '_', $name);
		$errorVal = '';
		$theID = str_replace('_', ' ', $name);

		$input =  '<input class="wskCheckbox" name="'.$name.'" value="'.$value.'" id="'.$theID.'" type="checkbox"><label class="wskLabel" for="'.$theID.'"><span class="wskCircle"></span>'.$text.'</label>';

		echo $input;
	}

	function radiotxt($name='',$value='',$text='') {
		$fldname = str_replace(' ', '_', $name);
		$errorVal = '';
		$theID = str_replace('_', ' ', $name);

		$input =  '<input type="radio" name="'.$name.'" value="'.$value.'" id="'.$theID.'">'.'<label for="'.$theID.'"style="font-weight:normal; color:#000;">'.$text.'</label>';

		echo $input;
	}

	// @param field name, required, class, replaceholder, rename, id, attrib, value
	function masterfieldicon($icontxt='', $name='',$required='' ,$class='',$replaceholder='', $rename='', $id='', $attrib='', $value=''){

			if($rename == ''){
					$fldname = str_replace(' ', '_', $name);
			}else{
					$fldname = str_replace(' ', '_', $rename);
			}

			$lblname = str_replace('_', ' ', $name);
			$strlblname = str_replace('?', '', $lblname);

			if($replaceholder == ''){
					$placeholder = "Enter ".strtolower(preg_replace('/\s+/', ' ',$strlblname)).' here';
			}else{
					$placeholder = $replaceholder;
			}

			$value = '';
			if(isset($_SESSION[$fldname])) $value = $_SESSION[$fldname];
			if(isset($_POST[$fldname])) $value = $_POST[$fldname];

			$inputfield = '<div class="field_holder animated_box"> <i id="icon" class="fas">'.$icontxt.'</i> <input type="text" name="'.$fldname.'" class="'.$class.' fldicon" value="'.$value.'" id="'.$id.'" placeholder="'.trim($placeholder).'" '.$attrib.'><span class = "animated_class"></span></div>';

			 echo $inputfield;
	}

	//checkbox V2
	// ex. $input->chkbox($are_you_licensed_in_the_state_of_state?',array('Yes','No'),'Example','readonly="readonly" onkeypress="test" ondblclick="test"');
	function chkboxVal($name='',$class='',$Val='',$id='',$attrib='',$rows=''){
		$fldname = str_replace(' ', '_', $name);
		$fldid = str_replace(' ', '_', $id);
		$ctr = 1;
		$brekz = 0;
		$chckbox = '<input data-check="chk" id="'.$fldid.'" type="hidden" name="'.$fldname.'" value="" class="'.$class.'"><table id="'.$name.'" chk-attr="'.$fldname.'" class="checkbox-table" border="0" cellpadding="0" cellspacing="0" style="margin-top:6px; width: 100%;"><tr>';
		if(empty($rows)){
			$rows = 4;
		}
		foreach($Val as $chckVal){
			$cndtn = '';
			if(isset($_SESSION[$fldname.'_'.$ctr]))
				$cndtn = ($_SESSION[$fldname.'_'.$ctr] == $chckVal)? 'checked="checked"' : '';
			if(isset($_POST[$fldname.'_'.$ctr]))
				$cndtn = ($_POST[$fldname.'_'.$ctr] == $chckVal)? 'checked="checked"' : '';

			if($brekz == $rows) {
				$chckbox .= '</tr><tr>';
				$brekz = 0;
			}
			$chckbox .= '<td><input type="checkbox" class="wskCheckbox '.$name.'" name="checkboxVal" value="'.$chckVal.'" '.$cndtn.' id="'.$fldname.'_'.$ctr.'" '.$attrib.'/><label class="wskLabel" for="'.$fldname.'_'.$ctr.'">'.$chckVal.'</label></td>'."\n";
			$brekz++;
			$ctr++;
		}
		$chckbox .= "</tr></table>";
		echo $chckbox;
	}

	function chkboxVal2($name='',$Val='',$id='',$attrib='',$rows=''){
		$fldname = str_replace(' ', '_', $name);
		$ctr = 1;
		$brekz = 0;
		$chckbox = '<input id="'.$id.'" type="hidden" name="'.$name.'" value=""><table class="checkbox-table" border="0" cellpadding="0" cellspacing="0" style="margin-top:6px; width: 100%;"><tr>';
		if(empty($rows)){
			$rows = 4;
		}
		foreach($Val as $chckVal){
			$cndtn = '';
			if(isset($_SESSION[$fldname.'_'.$ctr]))
				$cndtn = ($_SESSION[$fldname.'_'.$ctr] == $chckVal)? 'checked="checked"' : '';
			if(isset($_POST[$fldname.'_'.$ctr]))
				$cndtn = ($_POST[$fldname.'_'.$ctr] == $chckVal)? 'checked="checked"' : '';

			if($brekz == $rows) {
				$chckbox .= '</tr><tr>';
				$brekz = 0;
			}
			$chckbox .= '<td><input type="checkbox" class="wskCheckbox '.$name.'" name="'.$name.'" value="'.$chckVal.'" '.$cndtn.' id="'.$fldname.'_'.$ctr.'" '.$attrib.'/><label class="wskLabel" for="'.$fldname.'_'.$ctr.'">'.$chckVal.'</label></td>'."\n";
			$brekz++;
			$ctr++;
		}
		$chckbox .= "</tr></table>";
		echo $chckbox;
	}

	function info($name=''){
		$input = '<div class="info_heading"><i class="fas fa-info"></i> '. $name .'<input type="hidden" value=":" name="'.$name.'"></div>';
		echo $input;
	}

	function phoneInput($name='',$class='',$id='',$attrib='') {
		$fldname = str_replace(' ', '_', $name);
		$value = '';
		$input = '';
		$trigger = '<div class="phone-trigger"><i class="us flag" data-flag="true"></i><i class="fas fa-caret-down"></i></div>';
		$input .= '<div class="field_holder animated_box">'.$trigger.'<input type="text" name="'.$fldname.'" class="'.$class.' cphone" id="'.$id.'" placeholder="+1 (phone number)"><span class = "animated_class"></span></div>';
		echo $input;
	}

	function phone($activate) {
		$option = '';
		$input = '';
		$selectphone = '';
		$searchBox = '<div class="search-box"><input class="searchInput" placeholder="Search a country..." /></div>';
		$selectFirst = '<div class="selectfirst"><p>Select a country first.</p></div>';
		if($activate == true) {
			foreach($this->countries as $ckey => $cVal){
				if($ckey == "AQ" && $cVal['name'] == "ANTARCTICA") {
					continue;
				} else {
					$option .= '<li class="" data-ccode="'.strtolower($ckey).'" data-country="'.$cVal['name'].'" data-code="+'.$cVal['code'].'"><i class="'.strtolower($ckey).' flag"></i>'.$cVal['name'].' (+'.$cVal['code'].')</li>';
				}
			}
			$selectphone .= '<div class="select-holder" data-ref="">'.$searchBox.'<ul class="country-holder">'.$option.'</ul></div>'.$selectFirst;
		} else {
			$selectphone = '';
		}
		echo $selectphone;
	}	

}
?>
