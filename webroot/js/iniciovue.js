new Vue({
	el:'main',

	created:function(){
		this.path = window.location.pathname;
		this.getKeeps();
		this.IDsearchE = this.getParameterByName('IDsearchE');
		if (this.IDsearchE==' ') {
			this.IDsearchE=0;
		}
		this.selectE=this.IDsearchE;
		if (this.path=='/pages/reservas') {
			this.Buscar();
		}	
	},	

	data:{
		path : '/',
		ListE:[{id:0,nombre:''},{},{},{}],
		paginate:{ 
			total:0,
			current_page:0,
			per_page:0,
	        last_page:0,
	        from:0,
	        to:0
        },

        medics:[{
        		amaterno: '',
				apaterno: '',
				email: '',
				especialidad_id: 1,
				especialidad: '',
				id: 1,
				nombre: '',
				telefono: ''
		}],

		IDsearchE:0,
		selectE:0,

	},

	methods:{
		getKeeps: function(){
			this.cargando();
			axios.get('/especialidads/listar')
			.then(respuesta=>{
				//console.log(respuesta.data.especialidads);
				this.ListE= respuesta.data.especialidads;
				this.paginate= respuesta.data.mipag
			});
			this.cargado();
		},

		Buscar(){
			this.cargando();
			var sel=this.selectE+1
			
			//alert('buscando e: '+ (this.selectE++));
			axios.get('/medicos/buscar/'+ (parseInt(this.selectE)+1))
			.then(respuesta=>{
				//console.log(respuesta.data);
				this.medics= respuesta.data.Medics;
				this.cargado();
			});					
		},

		cargando(){
			var $prog=$('#progressbar');
			$prog.removeClass("hide");
		},
		cargado(){
			var $prog=$('#progressbar');
			$prog.addClass("hide");
		},

		getParameterByName : function(name){
		    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
		    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
		    var results = regex.exec(location.search);
		    return results === null ? ' ' : decodeURIComponent(results[1].replace(/\+/g, ' '));
		}
	}
});

