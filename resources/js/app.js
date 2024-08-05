
import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//import { idharIkhfa } from './myscripts';

const situation = document.getElementById('nachta');
const raison = document.getElementById('hala');

  situation.addEventListener('change',function() {
    if (situation.value === 'ملف_قيدالمعالجة') {
        raison.style.display = 'block';
        situation.style.backgroundColor = '#ff8888';
    } else {
        raison.style.display = 'none';
        if (situation.value === 'نشطة') {
           situation.style.backgroundColor = '#158462';
           situation.style.color = 'white';

       } else {
        if (situation.value === 'الوظعية') {
            situation.style.backgroundColor = 'white';

        } else {
            situation.style.backgroundColor = 'red';
            situation.style.color = 'white';

            
        }

           
       }
    }
})

    window.addEventListener('load',function() {
     if (situation.value === 'ملف_قيدالمعالجة') {
         raison.style.display = 'block';
         situation.style.backgroundColor = '#ff8888';
     } else {
         raison.style.display = 'none';
         if (situation.value === 'نشطة') {
            situation.style.backgroundColor = '#158462';
            situation.style.color = 'white';

        } else {
            if (situation.value === 'الوظعية') {
                situation.style.backgroundColor = 'white';
    
            } else {
                situation.style.backgroundColor = 'red';
                situation.style.color = 'white';
    
                
            }

           
            
        }
     }
 });

