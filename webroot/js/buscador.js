$(document).ready(function(){
	$('#b').autocomplete({
		minLength:4,
		select:function(event,ui){
			$('#b').val(ui.item.label)
		},
		source:function(request,response){
			$.ajax({
				url:'productos/searchjson',
				data:{
					term:request.term
				},
				dataType:'json',
				success:function(data){
					response($.map(data,function(el,index{
						return{
							value:el.Producto.modelo
							modelo:el.Producto.modelo
						}
					})));
				}
			})
		}
	}).data('ui-autocomplete')._renderItem=function(ul,item){
		return $("<li></li>")
		.data("item.autocomplete",item)
		.append("<a>"+item.nombre+"</a>")
		.appendTo(ul)
	}
});