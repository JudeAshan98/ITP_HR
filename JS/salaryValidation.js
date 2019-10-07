salaryValidation();{

    var text;
var EPF=document.getElementById("Emp_id").value;

if(isNaN(EPF)){

    text="E_id should be a numder";
    }
    else if(EPF=""){

        text="E_id should be filled"; 
    }
var F_name=document.getElementById("F_name").value;

if(F_name=""){

    text="First Name should be filled";  
}

var L_name=document.getElementById("L_name").value;

if(L_name=""){

    text="Last Name should be filled";  
}


var D_id=document.getElementById("D_id").value;

if(isNaN(D_id)){

    text="Department should be a numder";
    }
    else if(EPF=""){

        text="Department should be filled"; 
    }

var D_id=document.getElementById("Total").value;
    
if(isNaN(Total)){
    
    text="Department should be a numder";
    }
    else if(EPF=""){
    
        text="Department should be filled"; 
    }
        
var D_id=document.getElementById("Paycheck_id").value;

if(isNaN(Paycheck_id)){
        
        text="Department should be a numder";
        }
        else if(EPF=""){
        
            text="Department should be filled"; 
        }        

}  