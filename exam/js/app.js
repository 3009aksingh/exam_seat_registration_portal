var modalBtn = document.queryselector('.modal-btn');
var modalBg = document.queryselector('.modal-bg');
var modalClose =document.queryselector('.modal-close');

modalBtn.addEventListner('click',function(){
	modalBg.classlist.add('bg-active');
});
modalClose.addEventListner('click',function(){
	modalBg.classlist.remove('bg-active');
});