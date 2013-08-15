<?php
/**
 * @package    Joomla.Installation
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_CUNITY') or die;

$doc = JFactory::getDocument();

// Add Stylesheets
$doc->addStyleSheet('template/css/install.css');

// Load the JavaScript behaviors
$doc->addScript('template/js/install.js');
$doc->addScript('template/js/jquery.js');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
	</head>

	<body>
		<div class="wrapper">
			<div id="header" class="steps">
				<img src = "<?php echo $this->baseurl ?>/template/images/logoweb.gif" alt = "Cunity logo" style = "margin-top: 10px; margin-left: 10px"/>
				<img src = "<?php echo $this->baseurl ?>/template/images/sloganweb.gif" alt = "Your private social network" style = "position: absolute; margin-left: 20px; margin-top: 35px;"/>
			</div>
			<hr style="width:700px; color:#808080;"/>
			<noscript>
				<div style="text-align: center;">
					<br/><br/>
					<h1 style="color:red;font-weight:bold;font-family: Arial,Helvetica,sans-serif;">
						 Please activate javascript!</h1>
				</div>
			</noscript>

			<div id="d0" class="steps" style="display:none;">
				<h2>{$d_headline} <span class="headerinfo">{$d0_h1}</span></h2>
				<p>{$d0_t1}</p><br/><br/>
				<form action="install.php" method="post"> 
					<label for="radio1" class="pointer"><input type = "radio" id="radio1" name = "lang_install" value = "en" checked="checked"/>English</label><br/>
					<label for="radio2" class="pointer"><input type = "radio" id="radio2" name = "lang_install" value = "de"/>Deutsch</label><br/>
					<input type="hidden" name="installerrun" value="no" /><br/><br/>
					<button type="submit" class ="btn" style="width:160px; float:right;" id="language" onmouseover="this.className='btnhov'"  onmouseout="this.className='btn'">  NEXT / WEITER  </button>
					</form>
			</div>

			<div id="d1" class="steps" style= "display:none">
				<h2>{$d2_h1} <span class="headerinfo">{$d2_h2}</span></h2>
				<p style="font-size: large;color:green;">{$d2_t0}&nbsp;<img src="./img/comp-smiley.gif" border="0"/></p>
				<p>{$d2_t1}</p><br/>
				{$terms_conditions}<br /><br />
			</div>

			<div id="d2" class="steps" style="display:none;">
				<h2>{$d1_h1} <span class="headerinfo">{$d1_h2}</span></h2>
				<p style="font-size: larger; color:red;"><br/>{$d1_t1}</h2></p>
	  			<ul>
					{$d1_t2}<br />
				</ul>
				<table>
					<tr>
						<td>{$d2_tb1}</td>
						<td>
							<select name="jump">
					  			<option value="4">{$d2_op1}</option>
					  			<option value="5">{$d2_op2}</option>
					  			<option value="6">{$d2_op3}</option>
					  			<option value="7">{$d2_op4}</option>
					  			<option value="10">{$d2_op5}</option>
					 		</select>
        				</td>
        				<td><button id="btn_jump" class ="btn" style="width:80px;" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'">{$d2_b1}</button></td>
        			</tr>
        			<tr>
        				<td></td>
        				<td><span style="color:red;font-size:90%;"><strong>{$d2_tb2}</strong></span></td>
        			</tr>
 			 	</table>
			</div>

			<div id="d3" class="steps" style="display:none;">
				<h2>{$d3_h1} <span class="headerinfo">{$d3_h2}</span></h2>
     
     <p>{$d3_t1} 
     <br/>{$d3_t2}
     <br/><br/>{$d3_t3}<br/>
     <ul>
     {$d3_t4}
     </ul>
     {$d3_t5}
     
     </p>
     
     <table>
             <tr>
             <td style="width:200px;">{$d3_tb1}<span class="required">*</span>:</td>
             <td><input name = "db_name" class ="req" type = "text" size = "30"/></td>
             </tr>
             <tr><td>{$d3_tb2}<span class="required">*</span>:</td>
             <td><input name = "db_user" class ="req" type = "text" size = "30"/></td>
             </tr>
             <tr><td>{$d3_tb3}</td>
             <td><input name = "db_pass1" type = "password" size = "20"/></td>
             </tr>
             <tr><td>{$d3_tb4}</td>
             <td><input name = "db_pass2" type = "password" size = "20"/> <span class="span_pw"></span></td>
             </tr>
             <tr><td>{$d3_tb5}<span class="required">*</span>:</td>
             <td><input name = "db_host" class ="req" type = "text" size = "30" value="localhost"/></td>
             </tr>
             
             <tr><td>{$d3_tb6}<span class="required">*</span>:</td>
             <td><input name = "db_prefix" class ="req" type = "text" value="cunity" size = "30"/></td>
             </tr>
             <tr><td><button id="btn_dbtest" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'">{$d3_b1}</button></td>
             <td id="database_test"  width = "20"></td></tr>
             <tr><td><button id="btn_dbinstall" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d3_b2}</button></td>
             <td id="database_install"  width = "20"></td></tr>
     
     </table>
      
     
</div>

<div id="d4" class="steps" style="display:none;"><h2>{$d4_h1} <span class="headerinfo">{$d4_h2}</span></h2>
  
     <p>{$d4_t1}
     <br/>{$d4_t2}<br/>
     </p>
     <ul>
     {$d4_t3}
     </ul> 
    <br/><p>{$d4_t4}
     </p>
     
     <table>
         <tr>
         <td style="width:200px;">{$d4_tb1}<span class="required">*</span>:</td>
         <td><input name = "web_name" class ="req" type = "text" size = "40"/></td>
         </tr>
         <tr><td>{$d4_tb2}<span class="required">*</span>:</td>
         <td><input name = "web_slogan" type = "text" class ="req" size = "40"/></td>
         </tr>
         <tr><td>{$d4_tb3}<span class="required">*</span>:</td>
         <td><select id="web_country" name="web_country">{$countries}</select></td>
         </tr>
         <tr><td>{$d4_tb4}<span class="required">*</span>:</td>
         <td><input name = "web_url" id="web_url" class ="req" type = "text" size = "40"/></td>
         </tr>
         <tr><td>{$d4_tb5}<span class="required">*</span>:</td>
         <td><input name = "web_email" id="web_email" class ="req" type = "text" size = "40"/></td>
         </tr>
         <tr><td>{$d4_tb6}<span class="required">*</span>:</td>
         <td> <select name = "web_purpose"  id="web_purpose" class ="req">
                          <option>{$d4_tb7}</option>
                          <option>{$d4_tb8}</option>
                          <option>{$d4_tb9}</option>
                          <option>{$d4_tb10}</option>
                          <option>{$d4_tb11}</option>
                          <option>{$d4_tb12}</option>
                          <option>{$d4_tb13}</option>
                          <option>{$d4_tb14}</option>
                        </select>   </td>
         
      
         </tr>
         <tr><td><button id="btn_settings" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d4_b1}</button></td>
         <td id="d4_request" width = "20"></td>
         </tr>
         
     </table>
</div>           

<div id="d5" class="steps" style="display:none;"><h2>{$d5_h1} <span class="headerinfo">{$d5_h2}</span></h2>
     
             <p>{$d5_t1}
              </p>
     <table>
     <tr>
     <td><strong>{$d5_t2}</strong></td>
     <td><span id="local_folder"></span></td>
     </tr>
     <tr style="height: 20px;"><td></td><td></td></tr>
     <tr style="height: 20px;">
     <td class="filetable" style="background-color: #FFFF00;"><strong>{$d5_t3}</strong></td>
     <td class="filetable" style="background-color: #FFFF00;"><span  id="current_folder"></span></td>
     </tr>
     <tr>
     <td class="filetable" style="vertical-align: top;">{$d5_t4}
     <br/><br/><button id="btn_foldercreate" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" ><img src="img/folder-new20.png"/> {$d5_b1}</button><br/>
     <span id="foldercreate_feedback"><br/><br/></span><br/>
     <button id="btn_filefolder" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" ><img src="img/folder-refresh20.png"/> {$d5_b2}</button></td>
     <td class="filetable"><div id ="span_folder" style="white-space:nowrap; border : solid 1px #000000; padding : 4px; width : 350px; height :180px; overflow :scroll; "></div></td>
     </tr>
     <tr><td></td>
         <td ></td>
         </tr>
         <tr>
     <td ><strong>{$d5_t5}</strong></td>
     <td ><input name = "filefolder" type = "text" size = "55"/></td>
     </tr>
      <tr>
     <td ><button id="btn_foldercheck" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d5_b3}</button></td>
     <td id="d5_request" width = "20"></td>
     </tr>
     
     </table>
</div>


<div id="d6" class="steps" style="display:none;"><h2>{$d6_h1} <span class="headerinfo">{$d6_h2}</span></h2>
    
      {$d6_t1}
     </p>
     <ul>
      {$d6_t2}
     
    </ul>
     <table>
         <tr>
			<td style="width:200px;">{$d6_tb8}:</td>
         <td>
					<select name="smtp_method" class="smtp2">
					  <option value="SMTP">SMTP Server</option>
					  <option value="Sendmail">Sendmail</option>
					  <option value="Mail">PHP Mail Function</option>
					 </select>
		 
			</td>
         </tr>
         		 
		 <tr>
         <td style="width:200px;">{$d6_tb1}:</td>
         <td><input name = "smtp_host" class="smtp" type = "text" size = "40"/></td>
         </tr>
         <tr>
         <td style="width:200px;">{$d6_tb2}<span class="required">*</span>:</td>
         <td><input name = "smtp_port" class ="smtp req" type = "text" size = "5" value="25"/></td>
         </tr>
         <tr><td>{$d6_tb3}</td>
         <td><input name = "smtp_user" class="smtp" type = "text" size = "40"/></td>
         </tr>
         <tr><td>{$d6_tb4}</td>
         <td><input name = "smtp_pass1" class="smtp" type = "password" size = "20"/></td>
         </tr>
         <tr><td>{$d6_tb5}</td>
         <td><input name = "smtp_pass2" class="smtp" type = "password" size = "20"/> <span class="span_pw"></span></td>
         </tr>
		 <tr><td>{$d6_tb9}</td>
			<td>
					<select name="smtp_auth" class="smtp2">
					  <option value="true">ON</option>
					  <option value="false">OFF</option>
					</select>
			</td>
         </tr>
         <tr><td>{$d6_tb6}<span class="smtp required">*</span>:</td>
         <td><input name = "smtp_sender" class ="req" type = "text" size = "40"/></td>
         </tr>
         <tr><td>{$d6_tb7}<span class="smtp required">*</span>:</td>
         <td><input name = "smtp_email" class ="req" type = "text" size = "40"/></td>
         </tr>
         <tr><td><button id="btn_smtp_write" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d6_b1}</button></td>
         <td id="d6_request" width = "20"></td>
         </tr>
         <tr><td><button id="btn_smtp_check" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d6_b2}</button></td>
         <td id="d6_request2" width = "20"></td>
         </tr>
     </table>
</div>

<div id="d7" class="steps" style="display:none;"><h2>{$d7_h1} <span class="headerinfo">{$d7_h2}</span></h2>
  
     <p> {$d7_t1}
     </p>
     <table>
             <tr>
             <td style="width:200px;">{$d7_tb1}<span class="required">*</span>:</td>
             <td><input name = "nickname" class ="req" type = "text" size = "40"/></td>
             </tr>
             <tr><td>{$d7_tb2}<span class="required">*</span>:</td>
             <td><input name = "firstname" class ="req" type = "text" size = "40"/></td>
             </tr>
             <tr><td>{$d7_tb3}<span class="required">*</span>:</td>
             <td><input name = "lastname" class ="req" type = "text" size = "40"/></td>
             </tr>
             <tr><td>{$d7_tb4}<span class="required">*</span>:</td>
             <td><input name = "admin_email1" class ="req" type = "text" size = "25"/></td>
             </tr>
             <tr><td>{$d7_tb5}<span class="required">*</span>:</td>
             <td><input name = "admin_email2" class ="req" type = "text" size = "25"/> <span class="span_em"></span></td>
             </tr>
             <tr><td>{$d7_tb6}<span class="required">*</span>:</td>
             <td><input name = "admin_pass1" class ="req" type = "password" size = "20"/><span class="span_pw1"></span></td>
             </tr>
             <tr><td>{$d7_tb7}<span class="required">*</span>:</td>
             <td><input name = "admin_pass2" class ="req" type = "password" size = "20"/> <span class="span_pw"></span></td>
             </tr>
             <tr><td><button id="btn_admin" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d7_b1}</button></td>
         <td id="d7_request" width = "20"></td>
         </tr>
     </table>
</div>                   
 
<div id="d8" class="steps" style="display:none;"><h2>{$d8_h1} <span class="headerinfo">{$d8_h2}</span></h2>
  
     <p>{$d8_t1}</p>  
     <div id="summary"></div>
     
      <table style="border-width:0px;">
         <tr><td style="width:200px;"><button id="btn_showpass" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d8_b1}</button></td>
         <td id="d8_request1" width = "20"></td>
         </tr>
         <tr><td><a href="#" onclick="window.print()"><button id="btn_print" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d8_b2}</button></a> </td>
         <td id="d8_request2" width = "20"></td>
         </tr>
         <tr><td><button id="btn_sendemail" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d8_b3}</button></td>
         <td id="d8_request3" width = "20"></td>
         </tr>
     </table>
     
     
     
 </div>
  
<div id="d9" class="steps" style="display:none;"><h2>{$d9_h1} <span class="headerinfo">{$d9_h2}</span></h2>

     <p>{$d9_t1}<br /><br /> 
     
     <strong>{$d9_t2}</strong>
     <ul>
      {$d9_t3}
     </ul>
    <br/>
    
    {$d9_t4}<br /><br />
    
    <table>
             <tr><td  style="width:200px;"><button id="btn_improve" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d9_b1}</button></td>
             <td id="d9_request"  style="width:200px;"></td></tr>
             
     </table>
 </div>

<div id="d10" class="steps" style="display:none;"><h2>{$d10_h1} <span class="headerinfo">{$d10_h2}</span></h2>

     <p>{$d10_t1}<br /><br />

    <ul>
        {$d10_t2}
     </ul>
    <br/>

    <strong>{$d10_t3}<br/>
     (<span id="d10path"></span>/installer)<br/><br/>
    {$d10_t4}</strong>
    					<br/>
    					<br/>
						<table>
							<tr>
             					<td><button id="btn_delete" style="width:200px;" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d10_b1}</button></td>
								<td id="d10_request1" style="width:200px;"></td>
							</tr>
							<tr style="height:20px"></tr>
							<!--  This did not work correctly (securing Linux folders)
							<tr><td><button id="btn_linux" style="width:200px;" class ="btn" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'" >{$d10_b2}</button></td>
				             <td id="d10_request2" style="width:200px;"></td></tr>
							-->
						</table>
					</div>
					<div id="error"><br/>
					<div id="errormessage"></div>
					<div id="close" style="text-align:center">
						<br/>
						<br/>
						<button id="btn_close">OK</button>
					</div>
				</div>
				<div class="footer2"><div  style="text-align:right;witdth:600px;">
					<button class ="btn2" style="display: none; width:140px;" id="skip" onmouseover="this.className='btnhov2'"  onmouseout="this.className='btn2'">  {$skip}  </button>
					<button class ="btn" style="display: none; width:80px;" id="back" onmouseover="this.className='btnhov'"  onmouseout="this.className='btn'">  {$back}  </button>
					<button class ="btn" style="width:80px;" id="next" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'">  {$next}  </button>
					<button class ="btn" style="width:200px;" id="end" onmouseover="this.className='btnhov'" onmouseout="this.className='btn'">  {$end}&nbsp;&nbsp;<img src="./img/smiley.png"/></button>
				</div >
				<div style="font-size: 0.76em;">
					<br/>{$copyright}
					<br/>Version 1.041
				</div>
				<br/>
				<br/>
			</div>
		</div>
	</body>
</html>