
// Cuando clickee en la imagen con id imgclick, disparar el input con id image. 

  $("#imgclick").click(function () {
    $("#image").trigger('click');
});

function cambiar(){
  var pdrs = document.getElementById('image').files[0].name;
  document.getElementById('info').innerHTML = pdrs;
}



// Agregar servicios

var App = new Vue ({

  el: root,

  data: {
      newService: '',
      services: [],
      title: 'Servicios',
  },

  methods: {
      addService() {
          this.services.push(this.newService)
          this.newService =  '';
      }
  }
});