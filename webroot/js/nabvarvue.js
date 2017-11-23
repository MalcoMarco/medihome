new Vue({
	el:'#mynavbar',

	created:function(){
		this.pathname = window.location.pathname;
	},	

	data:{
		pathname : '/',
	},

	methods:{
		isnav(path){
			return this.pathname===path;
		}
	}
});
