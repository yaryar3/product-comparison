var select = document.querySelector('#customID'),
    select2 = document.querySelector('#customID2'),
    select3 = document.querySelector('#customID3'),
    select4 = document.querySelector('#customID4'),
    select5 = document.querySelector('#customID5'),
    select6 = document.querySelector('#customID6'),
    select7 = document.querySelector('#customID7'),
    select8 = document.querySelector('#customID8'),


    blocs1 = document.querySelector('.blocs1'),
    blocs2 = document.querySelector('.blocs2'),
    blocs3 = document.querySelector('.blocs3'),
    blocs4 = document.querySelector('.blocs4'),
    blocs5 = document.querySelector('.blocs5'),
    blocs6 = document.querySelector('.blocs6'),
    blocs7 = document.querySelector('.blocs7'),
    blocs8 = document.querySelector('.blocs8'),


    blocs11 = blocs1.getElementsByTagName('div'),
    blocs22 = blocs2.getElementsByTagName('div'),
    blocs33 = blocs3.getElementsByTagName('div'),
    blocs44 = blocs4.getElementsByTagName('div'),
    blocs55 = blocs5.getElementsByTagName('div'),
    blocs66 = blocs6.getElementsByTagName('div'),
    blocs77 = blocs7.getElementsByTagName('div');
    blocs88 = blocs8.getElementsByTagName('div');

 
function init() {
    select.options[0].selected=true;
    blocs11[0].style.display = 'none';

}
init();
function init2() {
    select2.options[0].selected=true;
    blocs22[0].style.display = 'none';

}
init2();
function init3() {
    select3.options[0].selected=true;
    blocs33[0].style.display = 'none';

}
init3();
function init4() {
    select4.options[0].selected=true;
    blocs44[0].style.display = 'none';

}
init4();
function init5() {
    select5.options[0].selected=true;
    blocs55[0].style.display = 'none';

}
init5();
function init6() {
    select6.options[0].selected=true;
    blocs66[0].style.display = 'none';

}
init6();
function init7() {
    select7.options[0].selected=true;
    blocs77[0].style.display = 'none';

}
init7();
function init8() {
    select8.options[0].selected=true;
    blocs88[0].style.display = 'none';

}
init8();



 
select.addEventListener('change', function() {
    var ind = select.selectedIndex;
    
    for (var i=1;i<=blocs11.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs11[ii].style.display = 'block';
        } else {
            blocs11[ii].style.display = 'none';
        }
    }


})
select2.addEventListener('change', function() {
    var ind = select2.selectedIndex;
    for (var i=1;i<=blocs22.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs22[ii].style.display = 'block';
        } else {
            blocs22[ii].style.display = 'none';
        }
    }

})

select3.addEventListener('change', function() {
    var ind = select3.selectedIndex;
    for (var i=1;i<=blocs33.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs33[ii].style.display = 'block';
        } else {
            blocs33[ii].style.display = 'none';
        }
    }

})

select4.addEventListener('change', function() {
    var ind = select4.selectedIndex;
    for (var i=1;i<=blocs44.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs44[ii].style.display = 'block';
        } else {
            blocs44[ii].style.display = 'none';
        }
    }

})
select5.addEventListener('change', function() {
    var ind = select5.selectedIndex;
    for (var i=1;i<=blocs55.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs55[ii].style.display = 'block';
        } else {
            blocs55[ii].style.display = 'none';
        }
    }

})
select6.addEventListener('change', function() {
    var ind = select6.selectedIndex;
    for (var i=1;i<=blocs66.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs66[ii].style.display = 'block';
        } else {
            blocs66[ii].style.display = 'none';
        }
    }

})
select7.addEventListener('change', function() {
    var ind = select7.selectedIndex;
    for (var i=1;i<=blocs77.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs77[ii].style.display = 'block';
        } else {
            blocs77[ii].style.display = 'none';
        }
    }

})

select8.addEventListener('change', function() {
    var ind = select8.selectedIndex;
    for (var i=1;i<=blocs88.length;i++){
        var ii = i-1;
        if (i == ind) {
            blocs88[ii].style.display = 'block';
        } else {
            blocs88[ii].style.display = 'none';
        }
    }

})









