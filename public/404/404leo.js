$(function(){
	
	var mouseX 		= 0,
		mouseY 		= 0,
		speed 		= 0,
		width 		= $(window).width(),
		height 		= $(window).height(),
		halfWidth 	= width/2,
		perspective = 200,
		rotateX 	= 0,
		rotateY 	= 0,
		scale 		= 100,
	    widthDig 	= $('.digitals').width(),
	   	ElemDig 	= widthDig/width*100, //ширина 404 в процентах відносно ширини екрану
	    centerPos 	= 50-ElemDig/2, //в процентах 37.5%
	    minLeftPos	= ElemDig/2, //в процентах 
	    maxLeftPos 	= 100-ElemDig, //в процентах 75%
	    maxrotateX	= 65, //deg
	    maxrotateZ 	= 40,
	    posX = centerPos;

	    $('#threeD').css({
	    	'left': centerPos+'%'
	    });

	$( document ).mousemove(function( event ) {
	    mouseX = event.pageX;
	    mouseY = event.pageY;
	    offset = $('#threeD').offset();

	    CoefPosX = mouseX/width;
	    if ( ((1-CoefPosX)*100)>minLeftPos && ((1-CoefPosX)*100)<(maxLeftPos) ) {	
	    	PosX = (maxLeftPos+minLeftPos)*(1-CoefPosX);
	    }

	    if(typeof PosX !== "undefined"){
	    	$('#threeD').animate({
	    					'left': PosX+'%'},speed);	
	    	dePosX = (PosX/100)*width;

	    	if( (dePosX*0.9)>offset.left ){
	    		console.log('dePosX='+dePosX);
	    	}
	    		console.log('offset.left='+offset.left);
	    		
	    	CoefPosY 	= mouseY/width;
	    	rotateX 	= (1-CoefPosY)*maxrotateX;

	    	CoefPosZ	= (halfWidth-mouseX)/halfWidth;
	    	rotateZ 	= (CoefPosZ*maxrotateZ);

	    	$('.digitals').css({
	    					'transform': 'rotateX('+rotateX+'deg)'+' rotateZ('+rotateZ+'deg)'});	
	    }



	});

	$('#GoTOmain a').on('click', function(event) {
		event.preventDefault();
		history.back();
		/* Act on the event */
	});
	
	function disableSelection(target){
	    if (typeof target.onselectstart!="undefined") // для IE:
	        target.onselectstart=function(){return false}
	    else if (typeof target.style.MozUserSelect!="undefined") //для Firefox:
	        target.style.MozUserSelect="none"
	    else // для всех других (типа Оперы):
	        target.onmousedown=function(){return false}
	    target.style.cursor = "default"
	}
	disableSelection(document.body);
});