$("#dnload").hover(function(){
	$("#dnload").css({"background":"green","font-family":"arial"});
 },
	function(){
	$("#dnload").css({"background":"navy","font-family":"arial"});
	}
)


        
		 function Export() {
            
            html2canvas(document.getElementById('target'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Your booked room.pdf");
                    alert("Your booked room information Downloading Started");
                }
            });
        }
            
        



