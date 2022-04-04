document.addEventListener("DOMContentLoaded", () => {
    //////////////////////////
    // //// Student Page ////
    ////////////////////////

    const proposalTableStud = document.querySelector("#proposalTableStud");
    const myProject = document.querySelector("#myProjects");
    const proposalBtnStud =document.querySelector("#proposalsBtnStud");
    const myProjectBtn = document.querySelector("#projectsBtnStud");


    proposalBtnStud.addEventListener("click", e =>{
        e.preventDefault();
        myProject.classList.add("card-hidden");
        proposalBtnStud.classList.add("button-active");
        proposalTableStud.classList.remove("card-hidden");
        myProjectBtn.classList.remove("button-active");
    });

    myProjectBtn.addEventListener("click", e =>{
        e.preventDefault();
        myProject.classList.remove("card-hidden");
        proposalBtnStud.classList.remove("button-active");
        proposalTableStud.classList.add("card-hidden");
        myProjectBtn.classList.add("button-active");
    });


//     let inputs = document.querySelectorAll( '.inputfile' );
//     Array.prototype.forEach.call( inputs, function( input )
//     {
// 	var label	 = input.nextElementSibling,
// 		labelVal = label.innerHTML;

// 	input.addEventListener( 'change', function( e )
// 	{
// 		var fileName = '';
// 		if( this.files && this.files.length > 1 )
// 			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
// 		else
// 			fileName = e.target.value.split( ' \ ').pop();

// 		if( fileName )
// 			label.querySelector( 'span' ).innerHTML = fileName;
// 		else
// 			label.innerHTML = labelVal;
// 	});
// });

});