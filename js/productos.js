var inicio=function () {


///////////cargar los datos de una linea
function getUrlVars()
{

    var hashes = window.location.href.slice(window.location.href.indexOf('-') + 1);
      var vars = hashes;

    return vars;
}
var id_linea = getUrlVars();
var element = id_linea.split(' ');
	var variable = element[0].split('-');
	var id_linea=variable[0];
	var id_sublinea=variable[1];

function cargar_productos(){
	//alert(id_linea);
		$.post('http://localhost/creacionespequitaskids/controler/con_producto.php',{
			id_linea:id_linea,
			id_sublinea:id_sublinea,
			caso:'cargar_productos'
			
			},function(a){
			
				var json = eval(a);
				var galeria="";
				for(i=0; i<json.length; i++){
					galeria+="<a href="+'productos/'+json[i].nom_producto+'-'+json[i].id_producto+"> <div class="+'col-sm-12 '+" id="+json[i].id_producto+">"			
						galeria+="<div class="+'stilo-sub'+">"
							galeria+="<h3 class="+'text-center'+"><b><img src="+'http://localhost/creacionespequitaskids/img/'+json[i].img1+" width="+'225'+"></b></h3>"
								galeria+='</div></a>'
								     $("#galeria_productos").append(galeria);
											$("#"+json[i].id_producto).addClass("col-md-4");
												 galeria="";
				}
			
			
		});
}
	
	cargar_productos();
////
	}
//$.post('',{},function(a){});
$(document).on('ready',inicio);