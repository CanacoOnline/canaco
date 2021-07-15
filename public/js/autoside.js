const flavoursContainer = document.getElementById('sliderPatro');
const flavoursScrollWidth = flavoursContainer.scrollWidth;
var aux=true;
var cont=0;
window.addEventListener('load', () => {
    self.setInterval(() => {
        if (aux==true) {
            flavoursContainer.scrollTo(flavoursContainer.scrollLeft + 1, 0);
            cont++;
            if(cont >= 1500){
                aux=false;
            }
        }
        if (aux==false) {
            flavoursContainer.scrollTo(flavoursContainer.scrollLeft - 1, 0);
            cont--;
            if(cont <= 0){
                aux=true;
            }
        }
    }, 15);
});