new Vue({
	el:'#horarios',

	created:function(){
		this.Mid = this.getParameterByName('Mid');
		//this.Mpath = window.location.pathname;
		//this.Msearch = (window.location.search).substring(1);
		
		this.BuscarMid(this.Mid);
	},	

//obtener la fecha y asociarlo al modelo
	data:{
		fecha:'',
		Mid:'',
		medic:[{
        		amaterno: '',
				apaterno: '',
				email: '',
				especialidad: '',
				id: 1,
				nombre: '',
				telefono: ''
		}],
		mañanas:[{id:0,hora:'8:00', estado:'Disponib'},
				{id:1,hora:'8:20', estado:'Disponible'},
				{id:2,hora:'8:40', estado:'Disponible'},
				{id:3,hora:'9:00', estado:'Disponible'},
				{id:4,hora:'9:20', estado:'Disponible'},
				{id:5,hora:'9:40', estado:'Disponible'},
				{id:6,hora:'10:00', estado:'Disponible'},
				{id:7,hora:'10:20', estado:'Disponible'},
				{id:8,hora:'10:40', estado:'Disponible'},
				{id:9,hora:'11:00', estado:'Disponible'},
				{id:10,hora:'11:20', estado:'Disponible'},
				{id:11,hora:'11:40', estado:'Disponible'},
				{id:12,hora:'12:00', estado:'Disponible'},
				{id:13,hora:'12:20', estado:'Disponible'}
				],
		tardes: [{id:0,hora:'1:00', estado:'Disponible'},
				{id:1,hora:'1:20', estado:'Disponible'},
				{id:2,hora:'1:40', estado:'Disponible'},
				{id:3,hora:'2:00', estado:'Disponible'},
				{id:4,hora:'2:20', estado:'Disponible'},
				{id:5,hora:'2:40', estado:'Disponible'},
				{id:6,hora:'3:00', estado:'Disponible'},
				{id:7,hora:'4:20', estado:'Disponible'},
				{id:8,hora:'4:40', estado:'Disponible'},
				{id:9,hora:'5:00', estado:'Disponible'},
				{id:10,hora:'5:20', estado:'Disponible'},
				{id:11,hora:'5:40', estado:'Disponible'},
				{id:12,hora:'6:00', estado:'Disponible'},
				{id:13,hora:'6:20', estado:'Disponible'}
				],
		noches: [{id:0,hora:'8:00', estado:'Disponible'},
				{id:1,hora:'8:20', estado:'Disponible'},
				{id:2,hora:'8:40', estado:'Disponible'},
				{id:3,hora:'9:00', estado:'Disponible'},
				{id:4,hora:'9:20', estado:'Disponible'},
				{id:5,hora:'9:40', estado:'Disponible'},
				{id:6,hora:'10:00', estado:'Disponible'},
				{id:7,hora:'10:20', estado:'Disponible'},
				{id:8,hora:'10:40', estado:'Disponible'},
				{id:9,hora:'11:00', estado:'Disponible'},
				{id:10,hora:'11:20', estado:'Disponible'},
				{id:11,hora:'11:40', estado:'Disponible'}
				],
	},

	methods:{
		getParameterByName : function(name){
		    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
		    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
		    var results = regex.exec(location.search);
		    return results === null ? ' ' : decodeURIComponent(results[1].replace(/\+/g, ' '));
		},

		BuscarMid : function(Mid){			
			//alert('buscando e: '+ (this.selectE++));
			axios.get('/medicos/medicoid/'+ Mid)
			.then(respuesta=>{
				//console.log(respuesta.data);
				this.medic= respuesta.data.Medic;
			});
		},

		VerHorario : function(fecha){			
			//alert('buscando e: '+ (this.selectE++));
			axios.get('/citas/verhorario/?Mid='+ this.Mid +'&fecha='+fecha)
			.then(respuesta=>{
				//console.log(respuesta.data);
				this.medic= respuesta.data.Medic;
			});
		},
	}
});