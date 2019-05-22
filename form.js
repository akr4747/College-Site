
  function up()
  {
	x=document.getElementById("fun");
	x.value=x.value.toUpperCase();

	y=document.getElementById("lname");
	y.value=y.value.toUpperCase();

	b=document.getElementById("fname");
	b.value=b.value.toUpperCase();
	c=document.getElementById("mname");
	c.value=c.value.toUpperCase();

	z=document.getElementById("cours");
	z.value=z.value.toUpperCase();

	a=document.getElementById("address");
	a.value=a.value.toUpperCase();

	d=document.getElementById("peradd");
	d.value=d.value.toUpperCase();


  }
  function validationform()
  {
    var fn=document.myform.fn.value;
    var ln=document.myform.ln.value;
	  var fna=document.myform.fna.value;
  	 var mna=document.myform.mna.value;
    var m = document.getElementById('gen1');
    var f = document.getElementById('gen2');
    var cou=document.myform.cou.value;
		  var upf=document.myform.upf.value;
			var upd=document.myform.upd.value;
			var upd1=document.myform.upd1.value;
			var upd2=document.myform.upd2.value;
    var cla1=document.getElementById("cl1").checked;
    var cla2= document.getElementById("cl2").checked;
		var bs= document.getElementById("bs").checked;
		var bc= document.getElementById("bc").checked;
    var ye=document.myform.ye.value;
    var ad=document.myform.ad.value;
    var num=document.myform.num.value;
    var ma=document.myform.ma.value;
    var dob=document.myform.dob.value;
    var add=document.myform.add.value;
    var padd=document.myform.padd.value;

    var per=document.myform.per.value;
    var pwd=document.myform.pwd.value;
    var cpw=document.myform.cpw.value;



  if (fn==null || fn=="")
   {
     alert("no blank value allowed");
     document.myform.fn.focus();
     return false;
  }
  else if(ln==null || ln=="")
   {
    alert("last Name can't be blank");
    document.myform.ln.focus();
    return false;
   }
	 else if(fna==null || fna=="")
		{
		 alert("enter father's name");
     document.myform.fna.focus();
		 return false;
		}
		else if(mna==null || mna=="")
		 {
			alert("enter mother's name");
      document.myform.mna.focus();
			return false;
		 }
   else if ( (m.checked == false ) && (f.checked == false ) )
     {
      alert ( "select gender" );
      return false
     }
     else if(cou==null || cou=="")
      {
       alert("enter the course name");
       document.myform.cou.focus();
       return false;
      }
			else if(upf==null || upf=="")
       {
        alert("upload photo");
        document.myform.upf.focus();
        return false;
       }
			 else if((upd==null || upd=="")||(upd1==null || upd1=="")||(upd2==null || upd2==""))
        {
         alert("upload documents");
         document.myform.upd.focus();
         return false;
        }

     else if ((cla1=="")&&(cla2=="")&&(bs=="")&&(bc==""))
       {
        alert( "select the qualification");
        document.myform.cl1.focus();
        return false
       }
    else if(ye==null || ye=="")
     {
      alert("select the year");
      document.myform.ye.focus();
      return false;
     }
     else if(ad==null || ad=="")
      {
       alert("fill the addimission number");
       document.myform.ad.focus();
       return false;
     }
     else if(isNaN(num)||num=="")
      {
       alert("mobile number can't be empty and enter numeric value only");
       document.myform.num.focus();
       return false;
     }
     else if(ma==null || ma=="")
      {
       alert("enter correct e-mail id");
       document.myform.ma.focus();
       return false;
     }
	 else if(dob==null || dob=="")
      {
       alert("enter dateofbirth");
       document.myform.dob.focus();
       return false;
     }
     else if(add==null || add=="")
      {
       alert("fill the address");
       document.myform.add.focus();
       return false;
     }
		 else if(padd==null || padd=="")
      {
       alert("enter permanent address");
       document.myform.padd.focus();
       return false;
     }

     else if(per==null || per=="")
      {
       alert("enter percentage of last qualified course");
       document.myform.per.focus();
       return false;
     }
	 else if(pwd==null || pwd=="")
      {
       alert("enter password");
       document.myform.pwd.focus();
       return false;
     }
	 else if(cpw==null || cpw=="")
      {
       alert("enter confirm password");
       document.myform.cpw.focus();
       return false;
     }
     else if((pwd!=cpw))
     {
       alert("password must be same");
       return false;
     }


  }
