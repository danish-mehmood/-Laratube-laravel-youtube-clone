Vue.omponent('subscribe_button',{
props:{
  subsriptions:{
    type:Array,
    required:true,
    default:()=>[],
  }
}
,

methods:{

      toggleSub(){
          if(!__auth()){
              alert("first login ");
          }
      }
    
}

});