﻿<!DOCTYPE html>
<html lang="de">
<head>
	<title>Suche - IÖR-Flächenportal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="robots" content="index,follow" />
	
	<link href="Css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="Css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="Css/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="Css/jquery.mmenu.all.css" rel="stylesheet" type="text/css" />
	<link href="Css/jquery.mmenu.bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="Css/mmenu-extensions/jquery.mmenu.shadows.css" rel="stylesheet" type="text/css" />
	<link href="Css/mmenu-extensions/jquery.mmenu.borderstyle.css" rel="stylesheet" type="text/css" />
	<link href="Css/screen.css" rel="stylesheet" type="text/css" />
	<link href="Css/screen-fp.css" rel="stylesheet" type="text/css" />
	<script language="javascript" src="JavaScript/jquery.min.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/bootstrap.min.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/bootstrap-dropdownhover.min.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/jquery.mmenu.all.min.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/jquery.mmenu.bootstrap.min.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/jquery.headroom.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/headroom.min.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/default.js" type="text/javascript"></script>

	<script language="javascript" src="JavaScript/fp.js" type="text/javascript"></script>
	<script language="javascript" src="JavaScript/parser.js" type="text/javascript"></script>

	<?php 
	/* Erhalten des Suchbegriffs von anderen Unterseiten*/
	$query = $_GET['q'];
	?>
</head>
<body>

<div class="page">
	
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-toggle" href="#mobile-navbar">
				<span>Menu&nbsp;</span>
				<i class="fa fa-navicon"></i>
			</a>
			<a class="navbar-brand" href="http://www.ioer.de/">
				<img alt="Brand" src="Images/logo-ioer.svg">
			</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="fadeIn fadeIn">
				<li class="dropdown ">
					<a href="kat.html" >Kategorien <i class="dropdown-toggle"></i></a>
					<ul class="dropdown-menu">
						<li><a href="ziele.php">Ziele</a></li>
						<li><a href="gesetz.php">Gesetzliche Regelungen</a></li>
						<li><a href="stat.php">Statistische Angebote</a></li>
						<li><a href="port.php">Portale</a></li>	
						<li><a href="anw.php">Anwendungen</a></li>
						<li><a href="lit.php">Fachliteratur</a></li>						
					</ul>
				</li>
				<li><a href="news.php">Neuigkeiten</a></li>
				<li><a href="veranstaltungen.php">Veranstaltungen</a></li>
				<li><a href="glossar.php">Glossar</a></li>
				<li class="active"><a href="suche.php">Suche</a></li>
				<li>
					<form class="navbar-form navbar-search" id="searchForm" action="" method="POST">
						<div class="navbar-form navbar-search form-group">
							<div class="input-icon search">
								<input type="text" class="form-control" id="inputSearch" placeholder="Portal durchsuchen..." name="search"/>		
							</div>
						</div>
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2><a href="index.html">IÖR-Flächenportal</a></h2>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</header>
	
<!--Einbinden der Bibtex Quelldatei-->
<bibtex src="./data/Flaechenportal.bib"></bibtex>

<div id="bibtex_errors"></div>

<!--Beginn bib_structure: Reihenfolge und Überschriften (h2) für Ausgabe der Dokumentenarten/Kategorien-->
<div class="bibtex_structure">
  <div class="sections bibtextypekey">
	<div class="section @ziele" id="@ZIELE">
		 <h2><i class="fa fa-line-chart  fa-flip-vertical "></i>&nbsp;&nbsp;Ziele</h2>
      <div class="sort date" extra="DESC string">
        <div class="templates"></div>
      </div>	
      	<a href="#top"><em>(nach oben)</em></a>	
	</div>  	
  	<div class="section @fachliteratur" id="@FACHLITERATUR">
		<h2><i class="fa fa-book"></i>&nbsp;&nbsp;Fachliteratur</h2>
     	<div class="sort date" extra="DESC string">
      	  <div class="templates"></div>
     	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div>  	  
	<div class="section @gesetze" id="@GESETZE">
	 	<h2><i class="fa fa-balance-scale"></i>&nbsp;&nbsp;Gesetzliche Regelungen</h2>
     	<div class="sort date" extra="DESC string">      		
        	<div class="templates"></div>
    	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div>  
	<div class="section @statistik" id="@STATISTIK">
			<h2><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Statistische Angebote</h2>
      	<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
      	</div>
      	<a href="#top" ><em>(nach oben)</em></a>		
	</div>  		
	<div class="section @portale" id="@PORTALE">
		<h2><i class="fa fa-bookmark-o"></i>&nbsp;&nbsp;Portale</h2>
      	<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
      	</div>	
   		<a href="#top"><em>(nach oben)</em></a>   	
	</div>  
	<div class="section @anwendungen" id="@ANWENDUNGEN">
		<h2><i class="fa fa-star-o"></i>&nbsp;&nbsp;Anwendungen</h2>
    	<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
      	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div> 	
	<div class="section @inreference" id="@INREFERENCE">
		<h2>Glossarbegriffe</h2>
      	<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
      	</div>
      	<a href="#top" ><em>(nach oben)</em></a>		
	</div> 
	<div class="section @misc" id="@MISC">
		<h2>Sonstige Ziele (@misc)</h2>
      	<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
    	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div>  
	<div class="section @unpublished|@article" id="@UNPUBLISHED|@ARTICLE">
		<h2>Sonstige Fachliteratur (Vortrag/@unpublished@article)</h2>
      	<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
      	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div>  
	<div class="section @legislation" id="@LEGISLATION" >
		<h2>Sonstige gesetzliche Regelungen (Gesetze/@legislation)</h2>
      	<div class="sort date" extra="DESC string">      		
       		<div class="templates"></div>
    	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div>
	<div class="section @report" id="@REPORT">
		<h2>Sonstige Berichte (@report)</h2>
    	<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
    	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div>  
	<div class="section @online" id="@ONLINE">
		<h2>Sonstige Webseite (@online)</h2>
		<div class="sort date" extra="DESC string">
        	<div class="templates"></div>
    	</div>	
      	<a href="#top" ><em>(nach oben)</em></a>	
	</div>   
 </div>
</div>
<!--Ende Bibstructure-->

<!--Beginn Bereich, der auf Webseite ausgegeben wird-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="index.html"><i class="fa fa-home"></i></a></li>
					<li class="active">Suche</li>
				</ol>
				</div>	
				<div class="container">
				<div class="row">
				<div class="col-md-9"><h3><i class="fa fa-search"></i>&nbsp;&nbsp;Suche</h3><hr/>
				<!--Eingabe und Einstellungsbereich-->			
				<div class="searchbar">
					<div>
						<button type="button" class="btn btn-default" onclick="reset()">Reset</button>
					</div>
					<div>
						<input type="text" class="bibtex_search form-control" id="searchbar" placeholder="Suche nach Autoren, Themen, Schlagwörtern,..." value="<?php if ($query) {echo($query);}?>" >
						<span class="help-block">Beispiel: Klimawandel Bund (findet Übereinstimmungen beider Terme)</span>
					</div>

					<p>Erweiterte Suche:</p>
					<div class="div-inline" >
						<select id="authorselect" class="btn bibtex_search bibtex_author"  search="author">
							<option value="">Suche unter allen Autoren</option>
						</select>
					</div>
						<div class="div-inline" >
						<select id="authorselect" class="btn bibtex_search bibtex_keywords" search="keywords">
							<option value="">Suche unter allen Keywords</option>
						</select>
					</div>
					<div class="div-inline" >
						<select id="topicselect" class="btn bibtex_search" >
							<option value="">Vorgegebene Themen</option>
							<!-- Add topic values here -->
							<option value="Bodenschutz">Bodenschutz</option>
							<option value="Klimaschutz">Klimaschutz</option>
							<option value="Flächenverbrauch">Flächenverbrauch</option>
						</select>
					</div>		
				</div>
				<!---Ende Eingabebereich--></div>
				<div class="col-md-3 download">
					<h4><i class="fa fa-download"></i>&nbsp;&nbsp;Download</h4>
					<p>Speichern Sie den alle Dokumente dieses Portals als .bib-Datei (Format: BibTeX) lokal ab. Diese Bibliothek kann dann in eine eigene Literaturverwaltungssoftware geladen werden.<br /><a href="./data/Flaechenportal.bib" class="btn btn-primary ">.bib herunterladen</a> </p>	
				</div>
				</div>
				</div>
				<div class="col-md-12">
				<!--Links zu Eintragsarten auflisten-->
				<h3> Springe zu Kategorie:</h3>	
				<div class="bibtex_topics"> </div>

				<!-- Ausgabebereich der Einträge-->	
				<div id="bibtex_display" >				
					<!--Template bestimmt Anordnung der Elemente, screen-fnp.css bestimmt Aussehen
							mit class=if... können Leere Zeilen vermieden werden
					Beginn Template eines Eintrags-->
					<div class="bibtex_template">
						<div class="media">
							<div class="media-body">								
								<div class="row">
									<div class="col-sm-9 col-md-10">
										<a class="bibtexVar bibtexCodeLink noread" href="http://monitor.ioer.de/svg_viewer/fp/detail.php?bibkey=+BIBTEXKEY+" aria-controls="bib+BIBTEXKEY+" extra="BIBTEXKEY"><h4 class="first"> <span class="title"> </span></h4></a>								
										<div class="doc-body">
											<p class="if abstract">
												<span class="abstract"></span>
											</p>
											<p class="if keywords" style="display:none;">
												<span class="keywords"></span>
											</p>
											<p class="if author" style="display:none;">
												<span class="author"></span>
											</p>
											<div class="if annotation0">
												<span class="bold">Inhalte:</span> 													
												<ul class="list-unstyled doc">												
													<li><span class="if annotation0">  <span class="annotation0"></span></span></li>
													<li><span class="if annotation1">  <span class="annotation1"></span></span></li>
													<li><span class="if annotation2">  <span class="annotation2"></span></span></li>
													<li><span class="if annotation3">  <span class="annotation3"></span></span></li>
													<li><span class="if annotation4">  <span class="annotation4"></span></span></li>
													<li><span class="if annotation5">  <span class="annotation5"></span></span></li>
													<li><span class="if annotation6">  <span class="annotation6"></span></span></li>
													<li><span class="if annotation7">  <span class="annotation7"></span></span></li>
													<li><span class="if annotation8">  <span class="annotation8"></span></span></li>
													<li><span class="if annotation9">  <span class="annotation9"></span></span></li>
													<li><span class="if annotation10"> <span class="annotation10"></span></span></li>
													<li><span class="if annotation11"> <span class="annotation11"></span></span></li>
													<li><span class="if annotation12"> <span class="annotation12"></span></span></li>
													<li><span class="if annotation13"> <span class="annotation13"></span></span></li>
													<li><span class="if annotation14"> <span class="annotation14"></span></span></li>
													<li><span class="if annotation15"> <span class="annotation15"></span></span></li>
													<li><span class="if annotation16"> <span class="annotation16"></span></span></li>
													<li><span class="if annotation17"> <span class="annotation17"></span></span></li>
													<li><span class="if annotation18"> <span class="annotation18"></span></span></li>
													<li><span class="if annotation19"> <span class="annotation19"></span></span></li>
													<li><span class="if annotation20"> <span class="annotation20"></span></span></li>												
												</ul>	
											</div>											
										</div>	
									</div>
									<div class="col-sm-3 col-md-2">
										<ul class="list-unstyled first">
											<li><a class="bibtexVar bibtexCodeLink noread" href="http://monitor.ioer.de/svg_viewer/fp/detail.php?bibkey=+BIBTEXKEY+" aria-controls="bib+BIBTEXKEY+" extra="BIBTEXKEY"><i class="fa fa-search"></i>&nbsp;&nbsp;Detailansicht</a></li>
											<li class="if url"><a class="bibtexVar" href="+URL+" extra="URL" target="_blank"><i class="fa fa-file-o"></i>&nbsp;&nbsp;Dokument aufrufen</a></li>
											<li>					 							 				   	
											<!--Bootstrap collapse wird ausgelöst bei Klick auf diesen Link...-->
												<div>								
													<a class="bibtexVar bibtexCodeLink noread" role="button" data-toggle="collapse" href="#bib+BIBTEXKEY+" 
														aria-expanded="false" aria-controls="bib+BIBTEXKEY+" extra="BIBTEXKEY">
														<i class="fa fa-external-link"></i>&nbsp;&nbsp;Export (BibLaTeX)	
													</a>
												</div>																			 		
											</li>
										</ul>
									</div>								
								</div>
							</div>
							<!--...und klappt Feld auf mit .bib Eintrag des Elements; class "noread" bei bibtexraw bewirkt, dass suche nicht darauf ausgeführt wird-->
							<div class="bibtexVar collapse noread" id="bib+BIBTEXKEY+" extra="BIBTEXKEY">
								&nbsp;<span class="help-block">	<i class="fa fa-question-circle-o" aria-hidden="true"></i>&nbsp;Hilfe: Untenstehenden BibLaTeX Code auswählen, in Zwischenablage kopieren, in Zoteros Hauptmenü 'Datei' - 'Importieren aus Zwischenablage' verwenden </span>
								<button type="button" class="bibtexVar btn btn-primary" id="button1" onclick="CopyToClipboard('spanraw+BIBTEXKEY+')" extra="BIBTEXKEY">Code kopieren</button>
								<div class="bibtexVar help-block"	 id="hinweiscopyspanraw+BIBTEXKEY+" extra="BIBTEXKEY"></div>
								<div class="well">
									<pre><span class="bibtexVar" id="spanraw+BIBTEXKEY+" extra="BIBTEXKEY"><span class="bibtexraw noread"></span></span></pre>
								</div>
							</div>   
						</div>
					</div>
				</div>
				<!-- Ende Ausgabebereich der Einträge-->	 
			</div>  <div
		</div>
	</div>	
</section>
<!---Ende Hauptbereich der Seite, Beginn des abschließenden Footers-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<h4>Inhalt</h4>
				<ul>
					<li><a href="ziele.php">Ziele</a></li>
					<li><a href="gesetz.php">Gesetzliche Regelungen</a></li>			
					<li><a href="stat.php">Statistische Angebote</a></li>
					<li><a href="port.php">Portale</a></li>	
					<li><a href="anw.php">Anwendungen</a></li>
					<li><a href="lit.php">Fachliteratur</a></li>
					<li><a href="news.php">Neuigkeiten</a></li>
					<li><a href="veranstaltungen.php">Veranstaltungen</a></li>
					<li><a href="glossar.php">Glossar</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-5">
				<h4>Weitere Informationen</h4>
				<ul>
					<li><a href="#">Datenschutz</a></li>
					<li><a href="#">Impressum</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h4>Kontakt</h4>
				<p>Leibniz-Institut für ökologische Raumentwicklung&nbsp;e.V.</p>
				<p>Weberplatz 1<br>01217 Dresden</p>
				<p>Telefon + 49 (0)351 46 79 0<br>E-Mail <a href="#">monitor[im]ioer.de</a><br>URL <a href="#">https://ioer.de/</a></p>
			</div>
		</div>
	</div>
	<!--schmaler blauer Balken als abschließendes Element-->
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<p>© IOER 2018</p>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</footer>
</div>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" media="all">
</body>
</html>








