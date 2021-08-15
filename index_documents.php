<?php

date_default_timezone_set('MESZ');




function listdocs($cat) {
    $fp = fopen($cat,'r') or die("can't open file");
    print "<table id='documents' class='table table-striped table-bordered dataTable no-footer' style='margin-left: auto; margin-right: auto; width: 75%; max-width: 1000px;'' role='grid' aria-describedby='documents_info'>\n";
print "  <thead>  
   <tr><th>no</th><th>group</th><th>item no</th><th>description</th><th>application DE</th><th>application EN</th><th>download DE</th><th>download EN</th></tr>  
  </thead> ";
        while($csv_line = fgetcsv($fp,1024)) {
            if ($csv_line[3]!="") {
                print "<tr class=''>";
            } else {
            print "<tr class='subhead'>";
            }
            //for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
            for ($i = 0, $j = 6; $i < $j; $i++) {
                print '<td>'.$csv_line[$i].'</td>';
        }
        if ($csv_line[3]!="") {
        if ($csv_line[8]!="") {
            print "<td><a href='".$csv_line[8]."' class='button' target='_blank'>download</a></td>\n";
            print "<td><a href='".$csv_line[9]."' class='button' target='_blank'>download</a></td></tr>\n";
        } else {
            print "<td><a class='button' href='mailto: info@vestamaticcre.com?subject=[request manual] ".$csv_line[2]."&body=Anfrage: ".$csv_line[3]."'>anfragen</a></td>\n";
            print "<td><a class='button' href='mailto: info@vestamaticcre.com?subject=[request manual] ".$csv_line[2]."&body=request: ".$csv_line[3]."'>request</a></td>\n";
        }
    } else {
        print "<td></td><td><p></p></td></tr>\n";
    }
}
print '</table>';
fclose($fp) or die("can't close file");
}
?>

<style type="text/css">
* {
  margin:0;
  padding:0;
  list-style:none;
}

body, html {
    margin: 0;
    min-height: 100%;
    background: 0 0;
    font-family: 'Open Sans';
}

body {
    color: #464646;
    font-size: 15px;
line-height: 1.35;
-webkit-font-smoothing: antialiased;
}

.header {
	margin: 0;
}
.liste {
	margin: 1em;
}
.subhead {
    background: #ccc !important;
}

#documents_filter {
padding: 1em 4em 1em 1em !important;
}

#documents_info {
padding: 1em 4em 1em 1em !important;
}

#basic-accordian{
  border:0px solid #FFF;
  padding:0px;
  width:50%;
  margin-left:25%;
  z-index:2;
}

@media only screen and (max-width : 1100px) {
  #basic-accordian{
    border:0px solid #FFF;
    padding:0px;
    width:100%;
    margin-left:0;
    z-index:2;
  }

.row {
margin: 0;
}

    table, thead, tbody, th, td, tr {
        display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

    tr {
margin-bottom:  10px;
    }
      
   
        td {
            /* Behave  like a "row" */
            border: none;
            position: relative;
            left:  40%;
            width:  50%;
            border:  0 !important;
        }

        td:before {
            font-size: 0.7em;
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 0;
            left: -60%;
            width: 40%;
            padding-top: 20px;
            white-space: nowrap;
        }

        /*
        Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
        */
        td:nth-of-type(1):before { content: "no"; }
        td:nth-of-type(2):before { content: "group"; }
        td:nth-of-type(3):before { content: "item no"; }
        td:nth-of-type(4):before { content: "description"; }
        td:nth-of-type(5):before { content: "application DE"; }
        td:nth-of-type(6):before { content: "application EN"; }
        td:nth-of-type(7):before { content: "download DE"; }
        td:nth-of-type(8):before { content: "download EN"; }
    
}

.pdfimage {
  height: 200px;
  border: 1px solid #666;
}

.listentry {
  float: left;
  height: 256px;
  width: 196px;
  max-width: 196px;
  overflow: hidden;
  padding: 10px 5px 5px 5px;
  display: block;
  color: black;
  text-decoration: none;
  word-wrap: break-word;
}

.pdflink, pdflink:hover, pdflink:visited, pdflink:active {
}

.pdflink img {
  height: 20px;
  width: 20px;
}

.accordion_headings{
  padding:5px;
  background:#ffffff;
  color:#a00f22;
  border:1px solid #FFF;
  cursor:pointer;
  font-weight:bold;
  font-size: 1.3em;
}

.accordion_headings:hover{
  background:#b80f24;
  color: #ffffff;
}

.accordion_child{
  padding:15px;
  background:#FFFFFF;
}

.header_highlight{
  background:#666666;
  color:#FFFFFF;
}

.thumbnail {
  border: 1px solid #ccc;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.download-center-list__row {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px
}
.download-center-list__row:nth-child(2n+1) {
    background: #f1f1f1
}
.download-center-list img {
    box-shadow: 0 0 20px rgba(0, 0, 0, .1)
}
.download-center-list__cell:nth-child(1) {
    min-width: 100px
}
.download-center-list__cell:nth-child(2) {
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    justify-self: flex-start;
    padding: 0 20px
}

.button {
    display: inline-block;
    font-size: 14px;
    padding: 14px 22px;
    border-radius: 5px;
    border: 2px solid currentColor;
    background-color: transparent;
    font-weight: 700;
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}
.button:focus {
    outline: 0;
    color: #db2224
}
.button__text {
    color: currentColor;
    white-space: nowrap
}
.button--filled {
    background-color: currentColor
}
.button--filled .button__text {
    color: #fff
}
.button--filled.white .button__text {
    color: #464646
}

.black {
    color: #464646
}

.red {
    color: #db2224;
}

a {
    background-color: transparent;
    text-decoration: none;
}

.download-center-list__row {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px
}
.download-center-list__row:nth-child(2n+1) {
    background: #f1f1f1
}
.download-center-list img {
    box-shadow: 0 0 20px rgba(0, 0, 0, .1)
}
.download-center-list__cell:nth-child(1) {
    min-width: 100px
}
.download-center-list__cell:nth-child(2) {
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    justify-self: flex-start;
    padding: 0 20px;
}

.name {
    font: inherit;
    color: inherit;
    background: none;
    text-align: inherit;
    outline: none;
    cursor: text;
}

#info {
padding: 1em;
}

h1 {
  font-size: 20pt;
  padding: 20pt 20pt;
  text-align: left;
  text-rendering: optimizeLegibility;
  color: #fff;
  font-weight: 100;
}

.img-circular{
 width: 200px;
 height: 200px;
 background-image: url('');
 background-size: cover;
 display: block;
 border-radius: 100px;
 -webkit-border-radius: 100px;
 -moz-border-radius: 100px;
}

h1.deepshadow {
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,f6f6f6+47,ededed+100;White+3D+%231 */
background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #ededed 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */

}

.header .logo {
	height: 30pt;
	width: auto;
  padding: 10pt;
  margin-right: 10pt;
  background: #ffffff;
}

b,
optgroup,
strong {
    font-weight: 700
}
</style>

</head>
<script>
$(document).ready(function() {
    $('#documents').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     true,
        select: {
        items: 'cells',
        info: true
    }
    } );
} );
</script>







<body>
	<?php listdocs("documents.csv"); ?>
</body>
</html>
