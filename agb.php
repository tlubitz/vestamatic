<?php
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
	case "eng":
        require('lang/eng.php');
    break;
    case "ger":
        require('lang/ger.php');
    break;
    default:
        require('lang/eng.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vestamatic - AGB</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Vestamatic - The global solution provider in dynamic facades">
    <link rel="shortcut icon" href="img/favicon.png">
    
    <!-- add bootstrap CSS; normalize for JS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet">
    
    <!-- import google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;0,800;1,400&display=swap" rel="stylesheet"> 

    <!-- Add additional CSS in static file -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar-front nav-dark" id="navbar-dynamic">
		<div class="main-logo">
			<a href="index.php#main">
			  <img src="img/logo.svg" alt="Logo Vestamatic">
			</a>
		  </div>
		<button type="button" class="navbar-toggle collapsed" id="navbutton" data-toggle="collapse" data-target="#mobile_collapse_front" aria-expanded="false">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="mobile_collapse_front">
	
			<ul class="nav navbar-nav-front borders-out container">
			<li>
			<a class="rubric nav-item" id="topmost-nav" href="index.php#about" onclick="closeNav()"><?php echo $lang['nav-about'];?></a>
			</li>
			<li>
			<a class="rubric nav-item" href="index.php#product" onclick="closeNav()"><?php echo $lang['nav-manuals'];?></a>
			</li>
			<li>
			<a class="rubric nav-item" href="index.php#contact" onclick="closeNav()"><?php echo $lang['nav-contact'];?></a>
			</li>
		</ul>

		<div class="lang-btns" id="langSelect">
			<a href="index.php?la=eng"><img src="img/eng.jpg" alt="<?=$lang['lang-eng'];?>" title="<?=$lang['lang-eng'];?>" /></a>
			<a href="index.php?la=ger"><img src="img/ger.jpg" alt="<?=$lang['lang-ger'];?>" title="<?=$lang['lang-ger'];?>" /></a>
		</div>
		</div>
	  </nav>
  
  <main>
    <article class="header-sub">
      <header>
	<h1 class="h1-custom">Terms and Conditions – Deliveries and Services (AGB) 2021</h1>
      </header>
    </article>
      
    <article class="article-small">
      <div class="row">
	<div class="col-md-12">
	<h2> I. Validity of conditions</h2>
	<p class="p-custom">
		All supplies, services and offers by the vendor shall be based exclusively on these general 
		terms and conditions. These shall therefore also apply to all future business relations, even 
		in the absence of any specific additional agreements. These conditions shall be considered as 
		having been accepted not later than the date on which the goods or services are accepted. 
		Buyer’s terms and conditions shall not apply. Any counter-confirmation by the purchaser, making 
		reference to his terms and conditions are hereby precluded.
	</p>

	<h2>II. Offer, conclusion of contract, technical properties and documentation</h2>
	<p class="p-custom">
		<ol>
			<li>Vendor’s offers are subject to confirmation. Legally binding are only the vendor’s order confirmations.</li>
			<li>Any data in brochures, drawings, illustrations, measurements, specifically assembly dimensions and weights are firm only if explicitly agreed to in writing or text form.</li>
			<li>The technical properties of the supply items are described in the product information of the vendor and are in accordance with the technical standards referred to therein. Any product information provided by the vendor to the purchaser shall be free of charge. Any features of the supply items in addition to the abovementioned product properties shall be deemed as agreed only, if separately recorded by the vendor.</li>
			<li>The vendor shall not be liable for the compatibility of the supply items with control units or equipments, data processing systems or building management systems, unless specifically offered or approved by the vendor. Clearance certificates must be issued in writing or text form.</li>
			<li>In the case of custom manufacture, the vendor shall be entitled to supply up to 10 % more or 10 % less than the agreed quantities.</li>
			<li>The vendors texts and pictures are usable only after written acceptance of the vendor. They remain solely owned by the vendor.</li>
		</ol>
	</p>

	<h2>III. Delivery periods, delay</h2>
	<p class="p-custom">
		<ol>
			<li>Compliance with the agreed delivery dates shall be subject to the purchaser’s compliance with the agreed payment terms, including the timely delivery of all documentation, plans, necessary permits and approvals by the purchaser. If these conditions are not complied within due time, the delivery dates are appropriately extended; however, this shall not be applicable, if the vendor is responsible for the delay.</li>
			<li>The delivery date is extended appropriately, if the non-compliance with the delivery date is due to force majeure, such as mobilization, war, riots or similar events, e.g. strike or lockout. The vendor shall also not be responsible for delays due to the above-mentioned circumstances if they occur during an existing delay.</li>
			<li>Part shipments are permissible.</li>
			<li>The vendor shall be deemed to be in default, if the delivery is due and after a reminder in written or text form has been issued, except when a specific delivery date was agreed. In all cases of late delivery, the purchaser shall not be entitled to any compensation; this shall also be applicable, where an extension that was granted by the purchaser has been exceeded. This shall not apply, where mandatory liability exists in cases of willful misconduct or gross negligence as a result of personal injuries, health detriment, or death. This is not related to a change in the burden of proof to the detriment of the purchaser. The purchaser’s statutory right to withdraw from the agreement shall remain unaffected.</li>
			<li>The purchaser is permitted to withdraw from the agreement within the limits imposed by law only if the vendor is responsible for the delay.</li>
			<li>If so requested by the vendor, the purchaser is obligated to declare within a reasonable period whether he intends to withdraw from the agreements or whether he demands compensatory damage in place of performance, or whether he abides by the agreement.</li>
		</ol>
	</p>

	<h2> IV. Scope of supply and services</h2>
	<p class="p-custom">
		<ol>
			<li>The scope of supply shall be specified in the vendor’s order confirmation in written or text form.</li>
			<li>The right to make technical modifications due to technical improvements and/or as a result of legislative requirements which occur during the delivery period shall be reserved, provided that no major change of the supply item results and that such changes can be reasonably accepted by the purchaser.</li>
			<li>Oral consulting services are binding only when confirmed in writing through the vendor.</li>
			<li>The vendor is not obliged to supply long term supplier agreements nor declaration of origin unless legally required.</li>
		</ol>
	</p>
	<h2>V. Cancellation costs</h2>
	<p class="p-custom">
		If the purchaser cancels the order without justification, the vendor may demand 10% of the sales price as compensation for order processing costs and possible loss of earnings, without prejudice to the option of claiming higher than actual damage. The purchaser shall retain the right to provide documentation to the extent that the damage is lower or that no damage has occurred.
	</p>
	<h2>VI. Packaging and shipping</h2>
	<p class="p-custom">
		Shipment shall be ex the vendor’s works, otherwise unless specified in the order confirmation. If the purchaser requests shipment by the vendor, the transport shall always be at the purchaser’s risk. In this case, the vendor invoices the usual freight and packaging costs. The choice of shipping method shall be at the vendor’s discretion. Transport insurance is available on request and at the purchaser’s expense.
	</p>
	<h2>VII. Transfer of risk / Approval</h2>
	<p class="p-custom">
		<ol>
			<li>Risk shall pass to the purchaser even in case of carriage paid delivery with the handing over to the carrier or collector; transport insurance is available on request and at the purchaser’s expense. This also includes vendor implementations of items installed by the purchaser.</li>
			<li>The purchaser approves developments and services in form of products, prototypes, customized products or services in a written
				The place of performance and jurisdiction is Mönchen-gladbach, if not agreed differently. Should the purchaser not release the development or services with approval within a reasonable timeframe, the development is approved 6 weeks after the supply of the products, prototypes or customized products. The approval releases the final account and the unconditional use of the development or services.</li>
			<li>A multi-phased development or service can be invoiced as part approval when agreed. § VII.2 is applied for these approvals as well. multi-phased development or service can be invoiced as part approval when agreed. § VII.2 is applied for these approvals as well.</li>
		</ol>
	</p>
	<h2>VIII. Liability for material defects (warranty)</h2>
	<p class="p-custom">
		The vendor or shall be liable for material defects as follows:
		<ol>
			<li>Parts or services which exhibit material defects within the period of limitation shall, at the option of the vendor be repaired, newly supplied or newly created, provided that the cause of the material defects already existed at the time of the passing of risk (supplementary performance).</li>
			<li>The vendor must always first be given an extension to fulfill his obligation within a reasonable time. Should this be refused, he shall be exempted with respect to any liability for material defects. If the vendor fails to fulfill his obligation within the extension period, the purchaser may withdraw from the contract or reduce the compensatory damage without prejudice to any potential claims for damages.</li>
			<li>Claims for compensation of material defects are subject to a limitation period of 12 months. The term starts at the time of passing the risk. The above provisions shall not be appli­cable, if the law obligatorily provides longer terms pursuant to §§ 438, paragraph 1, No. 2 (construction projects), 479, paragraph 1 (right of recourse) and 634a (structural defects) of the BGB [BGB = German Civil Code].</li>
			<li>The purchaser shall notify the vendor immediately with respect to any material defects. Any visible damage to the outside packaging must be reported to the freight forwarder immediately; shortages shall be reported within four business days.</li>
			<li>With respect to the notification of defects, the purchaser may only withhold payments if a defect notification has been asserted beyond legitimate doubt, or if the defect notification has been indisputably determined by a legal decision. Deliveries with minor defects cannot be rejected by the purchaser.</li>
			<li>After the risk has passed, warranty claims shall not be recognized in the event of insignificant deviations from the agreed quality, minor reduction in usability, normal wear and tear or damage as a result of incorrect or negligent handling, excessive loading, use of unsuitable equipment, inadequate construction work or as a result of any special external influences not provided for in the agreement, including any non-reproducible software defects claimed. Warranty claims shall not be recognized in the event of improper modifications or installation by the purchaser or third parties and through any consequences resulting therefrom.</li>
			<li>Claims by the purchaser because of necessary expenses for the purpose of remediating the defects in performance, specifically costs in respect of transport, infrastructure, labor and materials, shall be excluded if the additional costs were caused because the supply item was transferred to a different location from the place of delivery, unless the transfer has been agreed upon between the parties.</li>
			<li>The purchaser shall have recourse claims against the vendor only in so far that the purchaser has not agreed any additional conditions beyond the statutory warranty claims with his customer.</li>
			<li>In all other respects, compensatory damages shall be subject to Section XI (other compensatory claims). Any additional or different claims other than the claims agreed to above by the purchaser against the vendor or persons employed by him in the performance of his obligation as a result of material defects shall be excluded.</li>
			<li>The purchaser is obligated to pay to the vendor the costs and expenses arising where the purchaser demands the remediation of a defect during the defects liability period and it however transpires that no material defect exists.</li>
		</ol>
	</p>

	<h2>IX. Retention of title / Intellectual Property</h2>
	<p class="p-custom">
		<ol>
			<li>The supply items (goods subject to the retention of title) shall remain the property of the vendor until such time that any claims by him against the purchaser in terms of the business relationship have been satisfied. If the value of all security interests to which the vendor is entitled exceeds the amount of all secured claims by more than 20%, the vendor shall release an appropriate percentage of the security interests if so requested by the purchaser.</li>
			<li>During the existence of a retention of title, the purchaser shall not be permitted to pledge or transfer ownership by way of security and may permit resale by resellers only in the normal course of business and on condition that the reseller is paid by his customer or reserves the right that ownership will be transferred to the customer only after he has fulfilled his payment obligations.</li>
			<li>In the event of an attachment of property, confiscation, or other decrees or through the intervention of third parties, the purchaser must notify the vendor immediately.</li>
			<li>If the purchaser fails to comply with his duty, specifically, the failure to pay on due date, the vendor is entitled to cancel the agreement and take back the goods, while the purchaser is obligated to surrender the goods. Taking back the goods and/or enforcing the retention of title does not require the purchaser to withdraw. These actions by the vendor or the attachment of the goods subject to the retention of title does not imply a withdrawal from the agreement, unless specifically stated by the vendor.</li>
			<li>With respect to the resale of the goods subject to the retention of title by the purchaser, the purchaser hereby agrees to assign all receivables which accrue to the purchaser from the resale, equal to the price (including VAT) agreed between the vendor and the purchaser; this shall occur irrespective of whether the supply items were resold prior or subsequent to any subsequent fabrication. The vendor shall be entitled to collect these receivables. However, the right of the purchaser to collect these receivables directly shall remain unaffected; the vendor, however, shall be obligated to refrain from collecting these receivables, provided that the purchaser meets his obligation to pay appropriately and is not in default in payment. However, should the purchaser be in default, the vendor may demand the purchaser to disclose all details of the assigned receivables and the debtors, provide all necessary information for the collection of receivables, hand over all relevant documentation and notify the debtors (third parties) of the assignment.</li>
			<li>The purchaser is granted usage rights on the developments once the results are approved and the final invoice is paid without deduction. The purchaser only receives the usage rights as defined in the separated contract. Should the vendor use existing intellectual property for the development, the purchaser is only granted a limited right of usage. The vendor remains the sole owner of the intellectual property.</li>
			<li>Vendor and purchaser will agree consensual on how rights of third parties affecting the development, will be included.</li>
		</ol>
	</p>

	<h2>X. Impossibility of performance, adaptation of contract</h2>
	<p class="p-custom">
		<ol>
			<li>If delivery is impossible, the purchaser is entitled to claim compensatory damages, unless the inability to supply is beyond the vendor’s control. Any compensatory claims by the purchaser shall however be limited to 10% of the value of the respective part of the supply that cannot be utilized because of the inability to supply. This limitation shall not apply, if liability exists due to willful misconduct, gross negligence, or physical injuries. This provision does not require amending the burden of proof to the purchaser’s disadvantage. The right of the purchaser to withdraw from the agreement remains unaffected, even in the event that an extension of the delivery period had been previously agreed with the purchaser. In the event of a temporary impossibility of performance, the provisions under paragraph III (delivery periods, delay) shall apply.</li>
			<li>In the event that unforeseen circumstances in terms of paragraph III, No. 2 have a material impact upon the economic consequences or on the scope of supply or if they significantly affect the vendor’s operations, this agreement shall be appropriately adapted in good faith. Should this not be tenable from a business perspective, the vendor shall have the right to withdraw from the agreement. If he intends to invoke this right, he must inform the purchaser immediately after realizing the implications of this action.</li>
		</ol>
	</p>
	<h2>XI. Other compensatory claims</h2>
	<p class="p-custom">
		<ol>
			<li>Compensatory claims by the purchaser, irrespective of their legal basis, particularly if due to a violation of the relationship under the law obligations and tortious acts, are excluded. This shall not apply where mandatory liability exists, e.g. pursuant to the Product Liability Act, in cases of willful misconduct or gross negligence or as a result of personal injuries, health detriment, or death, or because of the violation of significant obligations in terms of the agreement.</li>
			<li>However, compensatory damages for the violation of significant obligations under the agreement shall be limited to foreseeable, typical contractual damages, except for cases of willful misconduct or gross negligence, or because of warrantied characteristics.</li>
			<li>The foregoing arrangements shall not affect the burden of proof to the detriment of the purchaser.</li>
			<li>The vendor is not liable for technical and/ or commercial usability of development results. The vendor is not liable for any consequences caused by the fact that the purchaser markets products before final release of the developments.</li>
		</ol>
	</p>
	<h2>XII. Payment terms, set-off, EAN</h2>
	<p class="p-custom">
		<ol>
			<li>Invoices must be paid for immediately and without deductions. Discounts are applicable only, if stated in the order confirmation. Discounts may not be taken on new invoices, as long as older invoices that are due for payment are still outstanding.</li>
			<li>The purchaser shall be deemed to be in default with respect to payment if he has not paid within 30 days of receipt of invoice.</li>
			<li>The acceptance of drafts is subject to previous agreement in written or text form. The acceptance of drafts shall be subject to standard bank interest rates and fees, payable immediately in cash.</li>
			<li>The purchaser shall be entitled to the right of setting off on the condition that his counterclaims are determined to be legitimate and uncontested and are acknowledged by the vendor. The purchaser shall have no right of retention with respect to any contested counterclaims.</li>
			<li>Without the vendors written permission, the purchaser is not allowed to use the brand “Vestamatic” or any other Vestamatic product brands in any way and concerning Vestamatic products to apply for EAN-codes or any similar codes and to use those codes.</li>
		</ol>
	</p>
	<h2>XIII. Place of performance, jurisdiction</h2>
	<p class="p-custom">
		<ol>
			<li>The place of performance and jurisdiction is Mönchengladbach.</li>
			<li>German law shall apply exclusively, subject to the exclusion of the law governing the international sale of movable property, even if the purchaser’s corporate domicile is located in a foreign country.</li>
			<li>If a provision of this agreement shall be or become invalid, then this shall not affect the validity of the other provisions.</li>
		</ol>
	</p>
	<p class="p-custom">
		<a href="misc/2021_VC-AGB.pdf" target="_blank">
			Download AGB Deutsch
		</a><br>
		<a href="misc/2021_VC-GTC.pdf" target="_blank">
			Download AGB English
		</a>
	</p>
	</div>
      </div>
    </article>
</main>

<footer>
  <article class="module-dark" id="footer-responsive">
	<div class="row">
	  <div class="col-md-12">
		  <div class="rubric-large center">
		  <button id="button-contact" class="transp"><?php echo $lang['nav-contact'];?></button>
		</div>
	  </div>
	</div>
  </article>
  
  <div id="modal-contact" class="modal">
	<div class="modal-content">
	  <span class="close">&times;</span>
	  <h1 class="h1-custom"><?php echo $lang['nav-contact'];?></h1>
	  <p class="p-custom">
	  Vestamatic CRE GmbH
	  </p>
	  <p class="p-custom">
	  Dohrweg 27<br>
	  D-41066 Mönchengladbach
	  </p>
	  <p class="p-custom">
	  info@vestamaticcre.com
	  </p>
	  <p class="p-custom">
		  Tel.: +49 2161 / 29 408-0
	  </p>
	  <div class="rubric-large center">
	  <a href="https://vestamaticcre.com" target="_blank" class="white">VESTAMATICCRE.COM</a>
	  </div>
	  <div class="rubric-large center">
	  <a href="https://vcp-network.com" target="_blank" class="white">VCP-NETWORK.COM</a>
	  </div>
	  <div class="rubric-large center">
	  <a href="imprint.php" class="white"><?php echo $lang['imprint'];?></a>
	  </div>
	  <div class="rubric-large center">
	  <a href="dsgvo.php" class="white">DSGVO</a>
	  </div>
	  <div class="rubric-large center">
	  <a href="agb.php" class="white">AGB</a>
	  </div>
  

	</div>
  </div>

  <article class="module-dark" id="footer-desktop">
	<div class="row">
  <div class="col-md-4 fd-1">
	<h1 class="h1-custom"><?php echo $lang['nav-contact'];?></h1>
	<p class="p-custom">
	  Vestamatic CRE GmbH
	</p>
	<p class="p-custom">
	  Dohrweg 27<br>
	  D-41066 Mönchengladbach
	</p>
	<p class="p-custom">
	info@vestamaticcre.com
	</p>
	<p class="p-custom">
	  Tel.: +49 2161 / 29 408-0
	</p>
  </div>
  <div class="col-md-4 fd-2">
  <p>
	    <div class="rubric-medium center"><a href="https://vestamaticcre.com" target="_blank" class="white button-like">VESTAMATICCRE.COM</a></div>
	  </p><br>
	  <p>
	    <div class="rubric-medium center"><a href="https://vcp-network.com" target="_blank" class="white button-like">VCP-NETWORK.COM</a></div>
	  </p><br>

	</div>
  <div class="col-md-4 fd-3">

	<p>
	  <div class="rubric-medium center"><a href="imprint.php" class="white button-like"><?php echo $lang['imprint'];?></a></div>
	</p><br>
	<p>
	  <div class="rubric-medium center"><a href="dsgvo.php" class="white button-like">DSGVO</a></div>
	</p><br>
	<p>
	  <div class="rubric-medium center"><a href="agb.php" class="white button-like">AGB</a></div>
	</p>
  </div>
	</div>
  </article>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/scripts_agb.js"></script>

</body>
</html>