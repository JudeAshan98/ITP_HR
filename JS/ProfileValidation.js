

profilevalidation();{

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

var DOB=document.getElementById("DOB").value;

if(DOB=""){

    text="Date of birth should be filled";  
}

var Contact=document.getElementById("contact").value;

if(isNaN(Contact)){

    text="Should be a number";
    }
    else if(Contact=""){

        text="Contcat no should be filled"; 
    }


var Mail=document.getElementById("mail").value;

if(Mail=""){

    text="Mail Name should be filled";  
}

var Address=document.getElementById("address").value;

if(Address=""){

    text="Mail Name should be filled";  
}

var D_id=document.getElementById("D_id").value;

if(isNaN(D_id)){

    text="Department should be a numder";
    }
    else if(EPF=""){

        text="Department should be filled"; 
    }

}  




















