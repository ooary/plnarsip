
    //upload Sk
    Dropzone.options.myDropzoneSk = {	acceptedFiles:'application/pdf',
    									autoProcessQueue: true,
    									success:function(file,response){
    												console.log(response)
    										}

    								}