// JavaScript Document
//<![CDATA[
var maxTabs = 50;
window.onload = function(){
    activaTab("año", document.getElementById("tabck-1"));
};
function activaTab(unTable, unTab) {
    try {
        //Los elementos div de todas las pestañas están todos juntos en una
        //única celda de la segunda fila de la tabla de estructura de pestañas.
        //Hemos de buscar la seleccionada, ponerle display block y al resto
        //ponerle display none.
        var id = unTab.id;
        if (id){
            var idTab = id.split("tabck-");
			var idCTab = id.split("ctabck-");
			
            var numTabA = parseInt(idTab[1]);
			var numTabC = parseInt(idCTab[1]);
            //Las "tabdiv" son los bloques interiores mientras que los "tabck"
            //son las pestañas.
				var esteTabDiv = document.getElementById("adiv-" + numTabA);
				for (var i=1; i<maxTabs; i++) 
				{
					var adiv = document.getElementById("adiv-" + i);
					if (adiv) 
					{
						var tabck = document.getElementById("tabck-" + i);
						if (adiv.id == esteTabDiv.id) 
						{
							adiv.style.display = "block";
							tabck.style.color = "blue";
							tabck.style.backgroundColor = "rgb(235, 235, 225)";
							tabck.style.borderBottomColor = "rgb(235, 235, 225)";
						} 
						else 
						{
							adiv.style.display = "none";
							tabck.style.color = "white"; 
							tabck.style.backgroundColor = "#0099CC"; 
							tabck.style.borderBottomColor = "#0099CC";   
						}
					} 
					else 
					{
						break;
					}
				}
        }
    } 
	catch (e) {
        alert("Error al activar una pestaña. " + e.message);
    }
}       
//]]>