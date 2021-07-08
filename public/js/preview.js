document.getElementById("image").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();
  
    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);
  
    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function(){
      let preview = document.getElementById('preview'),
              image = document.createElement('img');
  
      image.src = reader.result;
  
      preview.innerHTML = '';
      preview.append(image);
    };
  }
// Imagen2
document.getElementById("image2").onchange = function(e) {
    let reader2 = new FileReader();
    reader2.readAsDataURL(e.target.files[0]);
    reader2.onload = function(){
        let preview2 = document.getElementById('preview2'),
            image2 = document.createElement('img');
        image2.src = reader2.result;
        preview2.innerHTML = '';
        preview2.append(image2);
    };
}
// Imagen3
document.getElementById("image3").onchange = function(e) {
    let reader3 = new FileReader();
    reader3.readAsDataURL(e.target.files[0]);
    reader3.onload = function(){
        let preview3 = document.getElementById('preview3'),
            image3 = document.createElement('img');
        image3.src = reader3.result;
        preview3.innerHTML = '';
        preview3.append(image3);
    };
}
// Imagen4
document.getElementById("image4").onchange = function(e) {
    let reader4 = new FileReader();
    reader4.readAsDataURL(e.target.files[0]);
    reader4.onload = function(){
        let preview4 = document.getElementById('preview4'),
            image4 = document.createElement('img');
        image4.src = reader4.result;
        preview4.innerHTML = '';
        preview4.append(image4);
    };
}
// Imagen5
document.getElementById("image5").onchange = function(e) {
    let reader5 = new FileReader();
    reader5.readAsDataURL(e.target.files[0]);
    reader5.onload = function(){
        let preview5 = document.getElementById('preview5'),
            image5 = document.createElement('img');
        image5.src = reader5.result;
        preview5.innerHTML = '';
        preview5.append(image5);
    };
}
// Imagen6
document.getElementById("image6").onchange = function(e) {
    let reader6 = new FileReader();
    reader6.readAsDataURL(e.target.files[0]);
    reader6.onload = function(){
        let preview6 = document.getElementById('preview6'),
            image6 = document.createElement('img');
        image6.src = reader6.result;
        preview6.innerHTML = '';
        preview6.append(image6);
    };
}
// Imagen7
document.getElementById("image7").onchange = function(e) {
    let reader7 = new FileReader();
    reader7.readAsDataURL(e.target.files[0]);
    reader7.onload = function(){
        let preview7 = document.getElementById('preview7'),
            image7 = document.createElement('img');
        image7.src = reader7.result;
        preview7.innerHTML = '';
        preview7.append(image7);
    };
}
// Imagen8
document.getElementById("image8").onchange = function(e) {
    let reader8 = new FileReader();
    reader8.readAsDataURL(e.target.files[0]);
    reader8.onload = function(){
        let preview8 = document.getElementById('preview8'),
            image8 = document.createElement('img');
        image8.src = reader8.result;
        preview8.innerHTML = '';
        preview8.append(image8);
    };
}