/****Funktion für Kopieren von Code (Bibtexraw) in Zwischenablage */
function CopyToClipboard(containerid) {
	console.log(containerid);
if (document.selection) { 
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select().createTextRange();
    document.execCommand("copy"); 

} else if (window.getSelection) {
    var range = document.createRange();
     range.selectNode(document.getElementById(containerid));
     window.getSelection().addRange(range);
     document.execCommand("copy");
     //alert("Code wurde in Zwischenablage gespeichert.") 
     containerid2= "hinweiscopy" + containerid;
     	console.log(containerid2);
     document.getElementById(containerid2).textContent = "Code erfolgreich in Zwischenablage gespeichert.";
}}
/*****Ende Kopie Zwischenablage */


/*
function splitkeywords() {
  var str = document.getElementById("keywords").innerHTML;
 
 
var res = str.split(",");
res.forEach(function(element) {
  element.addClass(label);
});


    document.getElementById("keywords").innerHTML = res;
}


*/

/****Funktionen für Suche****/
		$(function() {
			 	
		  $("#Fontselector").on("change",function() {
		    var font = $("#Fontselector option:selected").text();
		  //  console.log(font);
		
		    $('.title.fonters').each(function() {
		    	$(this).css("font-family",font);
		    });
		  }); 
		});   
		function reset() {
		//	 	console.log('Das ist schritt 48 reset');
			$("select").each(function () {
			  localStorage.setItem($(this).attr("id"),"");
			  $(this).val("");
			}); 
			$("#searchbar").val("");
			$("#searchbar").trigger('change');
		}
		
		

/****Ende Funktionen für Suche****/

/********Suche von anderer Seite aus: Wenn Suchfeld abgeschickt wird, nehme dessen value und gebe es als Input in Such-Formular**********/

$(function() {
			$('#searchForm').submit(function () {
                var input = String(document.getElementById("inputSearch").value);
              
                if (input != ""){
                	 location.href = "./suche.php?q="+input;
			              $(function(input) {
			                	document.getElementById("searchbar").value = input;			                  	
                   	});                   
                    return false;
                }
      });
});
/********Ende Suche von anderer Seite aus*********/



/****Liste für Keywords, todo: sortierung****/
function keywordsList(object) {
	// 	console.log('Das ist schritt 46');
  var map = new Object();
  $("span.keywords").each(function(i, obj) {
  
  	arrayString = $(this).text().split(new RegExp(",[\\s]+and[\\s]+|,[\\s]+"));

	  	for (i = 0; i < arrayString.length; i++) {
	  	  if(arrayString[i] in map) {
	  		map[arrayString[i]] += 1;
	  	  } else {
	  		map[arrayString[i]] = 1;
	  	  }
	  	}  	
  }); 	 
      
  var tuples = [];
  for (var key in map) tuples.push([key, key.split(" ").pop().toLowerCase()]);
//Sortieren aller Keywords nach alphabet
  tuples.sort(function(a, b) {
    a = a[1];
     b = b[1];
    return a < b ? -1 : (a > b ? 1 : 0);
  });

//Keywords an Leerzeichen auftrennen und mit Komma umsortieren- nicht nötig
  for (var i = 0; i < tuples.length; i++) {
    var key = tuples[i][0];
    var value = tuples[i][1];    
    var array = key.split(" "); 
    var text = array.join(" "); //alle Elemente des Arrays als sting hintereinander auflisten, mit Leerzeichen dazwischen
   // var text = array.pop()+", "+array.join(" "); //pop() löscht letztes Element des arrays, dieses wird an Anfang gestellt, getrennt mit Komma
	object.append($("<option></option>").attr("value",key).text(text)); //alle umgestellten Keywords als Options in Dropdown einfügen
	
  }
}
/****Ende: suche /Liste für Keywords****/

/*
$(document).ready(function() {
	//feed to parse
	var feed = "https://www.bbsr.bund.de/SiteGlobals/Functions/RSSFeed/BBSR/DE/BBSRRaumentwicklung/RSS_BBSRRaumentwicklung_Generator.xml;jsessionid=30338E1952AA78018B1DAE91A0AE2DBA.live21304?nn=405942";
	
	$.ajax(feed, {
		accepts:{
			xml:"application/rss+xml"
		},
		dataType:"xml",
		success:function(data) {
			//Credit: http://stackoverflow.com/questions/10943544/how-to-parse-an-rss-feed-using-javascript

			$(data).find("item").each(function () { // or "item" or whatever suits your feed
				var el = $(this);
				console.log("------------------------");
				console.log("title      : " + el.find("title").text());
				console.log("link       : " + el.find("link").text());
				console.log("description: " + el.find("description").text());
			});
	

		}	
	});
	
});
*/
