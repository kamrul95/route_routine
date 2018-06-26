var fname=false, femail=false, fpass=false, fcpass=false,exist=true;



    function valid(){
        if(fname){
            if(femail){
                if(fpass){
                    if(fcpass){
                        document.signup.submit.disabled=false;
                        var btn = document.getElementById("sub");
                        btn.style.backgroundColor='#428bca';
                        btn.style.cursor='pointer';
                    }
                    else {
                        verify(document.signup.cpass);
                        document.signup.submit.disabled=true;
                        
                    }
                }
                else {
                    verify(document.signup.pass);
                    document.signup.submit.disabled=true;
                }
            }
            else {
               document.signup.submit.disabled=true; 
               verify(document.signup.email);
            }
        }
        else {
            document.signup.submit.disabled=true;
            verify(document.signup.id);
        } 
    }

/*function showHint() {
        //document.getElementById("spinner").style.visibility= "visible";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                resp=xmlhttp.responseText;
                document.getElementById("txtHint").innerHTML = resp;
                if (resp!="ok"){
                    var error = document.getElementById("img1");
                    error.style.display = 'block';
                    exist=true;
                    //fname=false;
                    //valid();
                  
                   
                }

                else {
                    //fname=true;
                    exist=false;
                    var ok = document.getElementById("img");
                    ok.style.display='block';
                }
            }
        };
        var url="isexist.php?name="+document.signup.id.value+'&email='+document.signup.email.value;
        //alert(url);
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
    }
*/

    function verify(val){
        
        id = document.signup.id.value;
        email = document.signup.email.value;
        pass = document.signup.pass.value;
        cpass = document.signup.cpass.value;
        if(val.getAttribute("name")=="id"){
            var ok = document.getElementById("img");
            var error = document.getElementById("img1");
            if(id.length>3 ){
                //showHint();
                //if (!exist){
                ok.style.display = 'block';
                error.style.display = 'none';
                fname=true;
            //}
                
            }   
            else{
                error.style.display = 'block';
                fname=false;
				//valid();
                
            }
        }
        else if(val.getAttribute("name")=="email"){
            var ok = document.getElementById("eimg");
            var error = document.getElementById("eimg1");
            var check1 = email.indexOf("@"); 
            var check2 = email.indexOf(".com");
            if(check1 > 0 && check2 > 0){
                ok.style.display = 'block';
                error.style.display = 'none';
                femail=true;

            }
            else
            {
                error.style.display = 'block';
                femail=false;
                //valid();
                
            }
        }
        else if(val.getAttribute("name")=="pass"){
            var ok = document.getElementById("pimg");
            var error = document.getElementById("pimg1"); 
            if(pass.length<6){
                error.style.display = 'block';
                fpass=false;
				////valid();
                //showHint();

				
            }
            else{

                fpass=true;
                ok.style.display = 'block';
                error.style.display = 'none';

            }
        }

        else if(val.getAttribute("name")=="cpass"){
            var ok = document.getElementById("cimg");
            var error = document.getElementById("cimg1"); 
            if(pass!=cpass){
                error.style.display = 'block';
                fcpass=false;
                //valid();

            }
            else{

                fcpass=true;
                ok.style.display = 'block';
                error.style.display = 'none';

            }
        }
         valid();
    }

