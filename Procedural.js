var hoy = new Date();
var nombremes;
var mes=hoy.getMonth();
switch (mes) {
case 0 :
nombremes=" Enero";
break;
case 1 :
nombremes=" Febrero";
break;
case 6 :
nombremes=" Julio";
break;
case 9 :
nombremes=" Setiembre";
break;
default : nombremes= "... no se el mes";
}
alert("Estamos en el mes llamado" + nombremes);