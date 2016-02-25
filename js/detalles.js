var inicio=function () {


///////////cargar los datos de una linea
function getUrlVars()
{

    var hashes = window.location.href.slice(window.location.href.indexOf('-') + 1);
      var vars = hashes;

    return vars;
}


function cargar_detalles_producto(){
	//alert(id_linea);
	var id_producto = getUrlVars();
	//alert(id_producto);
		$.post('http://localhost/creacionespequitaskids/controler/con_producto.php',{
			id_producto:id_producto,
			caso:'cargar_detalles_producto'
			
			},function(a){
			
				var json = eval(a);
				var galeria="";
			//alert(a);
					galeria+="<a href="+'hola'+"> <div class="+'col-sm-12 '+" id="+json[0].id_producto+">"			
						galeria+="<div class="+'stilo-sub'+">"
							galeria+="<h3 class="+'text-center'+"><b><img src="+'http://localhost/creacionespequitaskids/img/'+json[0].img1+" width="+'225'+"></b></h3>"
								galeria+='</div></a>'
								     $("#detalles_producto").append(galeria);
											$("#"+json[0].id_producto).addClass("col-md-4");
												 galeria="";
			
			
			
		});
}
	
	cargar_detalles_producto();
////
	}
//$.post('',{},function(a){});
$(document).on('ready',inicio);