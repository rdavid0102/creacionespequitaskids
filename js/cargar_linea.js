var inicio=function () {

function cargar_lineas(){
	$.post('./controler/con_linea.php',{
		caso:'cargar_lineas'
		},function(a){
			var json = eval(a);
			var galeria="";
			for(i=0; i<json.length; i++){
				galeria+="<a href="+'./lineas/'+json[i].nom_linea+'/todos-'+json[i].id_linea+"> <div class="+'col-sm-12 '+" id="+json[i].id_linea+">"			
					galeria+="<div class="+'contactanos'+">"
						galeria+="<h3 class="+'text-center'+"><b><img src="+'./img/'+json[i].img1+" width="+'225'+"></b></h3>"
							galeria+='</div></a>'
							     $("#galeria_principal").append(galeria);
										$("#"+json[i].id_linea).addClass("col-md-3");
											 galeria="";
			}


			//alert(a);
	});
}

	cargar_lineas();
///////////cargar los datos de una linea
function getUrlVars()
{

    var hashes = window.location.href.slice(window.location.href.indexOf('-') + 1);
      var vars = hashes;

    return vars;
}

function cargar_sublineas(){

	var id_linea = getUrlVars();
		$.post('http://localhost/creacionespequitaskids/controler/con_linea.php',{
			id_linea:id_linea,
			caso:'cargar_sublineas'
			
			},function(a){
				var id_linea = getUrlVars();
				$.post('http://localhost/creacionespequitaskids/controler/con_linea.php',{
				id_linea:id_linea,
				caso:'cargar_linea'
					},function(b){
						var json2 = eval(b);
						  $("#titulo").append(json2[0].nom_linea);
				});
						var json = eval(a);
						var sub="";
						var id_linea = getUrlVars();
			for(i=0; i<json.length; i++){
				sub+="<a href="+'./'+json[i].nom_sublinea+'/galeria/todos-'+id_linea+'-'+json[i].id_sublinea+" id="+json[i].id_sublinea+">"			
					sub+="<div class="+'stilo-sub'+">"
						sub+="<h3 class="+'text-center'+"><b><img src="+'http://localhost/creacionespequitaskids//img/'+json[i].img_sublinea+" width="+'225'+"></b></h3>"
							sub+='</div></a>'
							     $("#sublineas").append(sub);
										$("#"+json[i].id_sublinea).addClass("col-md-6");
											 sub="";
			}
			
		});
}
	
	cargar_sublineas();
////
	}
//$.post('',{},function(a){});
$(document).on('ready',inicio);