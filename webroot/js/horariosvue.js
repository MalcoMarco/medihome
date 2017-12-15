new Vue({
	el:'#horarios',

	created:function(){
		this.Mid = this.getParameterByName('Mid');
		
		this.BuscarMid(this.Mid);
		this.VerHorario();
	},	

	data:{
		fecha:new Date().toJSON().slice(0,10),
		Paciente:'',
		loginData:{
			tipodoc:'DNI',
			username:'12345678',
			password:'12345678',
			meth:'',
			Mid:'POST'
		},
		
		medic:[{
        		amaterno: '',
				apaterno: '',
				email: '',
				especialidad: '',
				id: 1,
				nombre: '',
				telefono: ''
		}],
		horario:[{id:0,hora:'', estado:''}],
		mananas:[{id:0,hora:'8:00', estado:'Disponib'},
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

		BuscarMid : function(Mid){			
			//alert('buscando e: '+ (this.selectE++));
			axios.get('/medicos/medicoid/'+ Mid)
			.then(respuesta=>{
				//console.log(respuesta.data);
				this.medic= respuesta.data.Medic;
			});
		},

		dologin : function(event){			
			/*console.log(event);
			axios.post('/users/login', this.loginData)
			    .then(response => {
			    	console.log(response.data);
			    })
			    .catch(e => {
			      
			    })
*/
			
		},

		resetHorario: function(){
			for (var i = this.mananas.length - 1; i >= 0; i--) {
				this.mananas[i].estado='Disponible';
			}
			for (var i = this.tardes.length - 1; i >= 0; i--) {
				this.tardes[i].estado='Disponible';
			}
			for (var i = this.noches.length - 1; i >= 0; i--) {
				this.noches[i].estado='Disponible';
			}			
		},
		actualizarHorario(){
			for (var i = this.mananas.length - 1; i >= 0; i--) {				
				for (var j = this.horario.length - 1; j >= 0; j--) {
					if (this.mananas[i].hora==this.horario[j].hora) {
						this.mananas[i].estado='noDisponible';
						console.log(this.mananas[i].hora);
					}					
				}
			}
			for (var i = this.tardes.length - 1; i >= 0; i--) {				
				for (var j = this.horario.length - 1; j >= 0; j--) {
					if (this.tardes[i].hora==this.horario[j].hora) {
						this.tardes[i].estado='noDisponible';
						//console.log(this.tardes[i].hora);
					}					
				}
			}
			for (var i = this.noches.length - 1; i >= 0; i--) {				
				for (var j = this.horario.length - 1; j >= 0; j--) {
					if (this.noches[i].hora==this.horario[j].hora) {
						this.noches[i].estado='noDisponible';
						//console.log(this.noches[i].hora);
					}					
				}
			}
		},

		VerHorario : function(){			
			//alert('buscando e: '+ (this.selectE++));
			this.cargando();
			if (this.fecha!='') {			
				this.resetHorario();
				axios.get('/citas/verhorario/?Mid='+this.Mid +'&fecha='+this.fecha)
				.then(respuesta=>{
					//console.log('/citas/verhorario/?Mid='+this.Mid +'&fecha='+this.fecha);
					this.horario= respuesta.data.Cits;
					this.actualizarHorario();
					this.cargado();
				}).catch(function(error){console.log(error);});
			}else{
				alert('ingrese una fecha valida!!');
			}
		},

		cargando(){
			var $prog=$('#progressbar1');
			$prog.removeClass("hide");
			var $carhorario=$('#cargahoraria');
			$carhorario.addClass("hide");
		},
		cargado(){
			var $prog=$('#progressbar1');
			$prog.addClass("hide");
			var $carhorario=$('#cargahoraria');
			$carhorario.removeClass("hide");
		},

		getParameterByName : function(name){
		    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
		    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
		    var results = regex.exec(location.search);
		    return results === null ? ' ' : decodeURIComponent(results[1].replace(/\+/g, ' '));
		},

		fechaaa: function(){
			this.fecha=document.getElementById('fecha1').value
		}
	},

	mounted () {
        $('#fecha1').datepicker({
        	startDate: "today",
        	language: "es",
        	autoclose: true,
        	todayBtn: true
        }),

    	$('#fecha1').datepicker().on('changeDate',()=>{
    		this.fecha=$('#fecha1').val()  
    	})
	}
});
